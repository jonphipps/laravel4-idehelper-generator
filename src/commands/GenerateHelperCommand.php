<?php namespace JonPhipps\IdeHelper\Commands;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class GenerateHelperCommand extends Command
{

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'idehelper:generate';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Builds an IDE autocomplete helper file.';

	/**
	 * The filesystem instance.
	 *
	 * @var \Illuminate\Filesystem\Filesystem
	 */
	protected $files;

	/**
	 * Create a new session table command instance.
	 *
	 */
	public function __construct()
	{
		parent::__construct();

		$this->files = "";
	}

	/**
	 * Execute the console command.
	 *
	 * @return void
	 */
	public function fire()
	{
		//TODO refactor to support templates for multiple file structures for the needs of different IDEs
		$str = <<<'EOD'
<?php die("Access denied!");
/**
 * ---------------- DO NOT UPLOAD THIS FILE TO LIVE SERVER ------------------------
 * Laravel IDE Helper <http://github.com/jonphipps>
 * with thanks to <http://LaravelBook.com>
 * Implements code completion for Laravel 4 in JetBrains PhpStorm and SublimeText 2
 * --------------------------------------------------------------------------------
 */

EOD;
		$app = app();
		$aliases = $app['Config']::get("app.aliases");

		//this is a hack to swap classes when the class registered to the alias returns a manager/factory that
		//returns an instance of a configured class. I couldn't figure out how to get this from the code/configuration
		//TODO find a way to get the correct providers from the config/factory/manager
		$providers['Auth']      = 'Illuminate\Auth\Guard';
		$providers['Cache']     = 'Illuminate\Cache\StoreInterface';
		$providers['DB']        = 'Illuminate\Database\Connection';
		$providers['Event']     = 'Illuminate\Events\Event';
		$providers['Queue']     = 'Illuminate\Queue\QueueInterface';
		$providers['Redis']     = 'Illuminate\Redis\Database';
		$providers['Validator'] = 'Illuminate\Validation\Validator';

		//this is the main parser
		//it tries to find a class to reflect, then gets the public properties, gets the public methods
		//formats each property and method for output as a docblock
		//extends the reflected class with the alias, repeats for each alias,
		//and writes it to a file, defaulting to the root Laravel 'app' directory
		foreach ($aliases as $alias => $facade) {
			$aliasDescription = "";
			try {
				if (isset($providers[$alias])) {
					$classReflect = new  \ReflectionClass($providers[$alias]);
					$aliasDescription = "a factory that provides ";
					//is the alias an instance of façade?
				} elseif (method_exists($app[$alias], 'getFacadeRoot')) {
					$aliasDescription = "a facade that provides ";
					$classReflect = new \ReflectionClass(get_class($app[$alias]::getFacadeRoot()));
					//maybe it's just a class
				} else {
					$classReflect = new \ReflectionClass($alias);
				}
			} catch(\Illuminate\Container\BindingResolutionException $e) {
				//couldn't instantiate the class from the facade, but we can do it directly
				$classReflect = new \ReflectionClass($alias);
			}

			//get the public properties
			$propertySignatures = array();
			$publicProperties = $classReflect->getProperties(\ReflectionMethod::IS_PUBLIC);
			$propertyValues   = $classReflect->getDefaultProperties();
			foreach ($publicProperties as $property) {
				$propertyArray = array();
				//get the name
				$propertyName = $property->getName();
				//get the default value
				$propertyArray['value'] = $propertyValues[$propertyName];

				//create a new docBlock
				$propertyDoc                       = new \phpDocumentor\Reflection\DocBlock($property);
				//get the description
				$propertyArray['description']      = self::stripReturns($propertyDoc->getShortDescription());
				//get the type
				$varTag                            = $propertyDoc->getTagsByName("var");
				$propertyArray['type']             = isset($varTag[0]) ? $varTag[0]->getContent() : '';
				//add it to the property signatures
				$propertySignatures[$propertyName] = $propertyArray;
			}//end foreach $publicProperties

			//get the public methods
			$publicMethods    = $classReflect->getMethods(\ReflectionMethod::IS_PUBLIC);
			$methodSignatures = array();
			foreach ($publicMethods as $method) {
				//get the method name
				$methodName = $method->getName();
				//skip the magic methods
				if (preg_match('/^__.*\Z/', $methodName)) {
					continue;
				}

				$methodArray         = array();
				$methodArray['name'] = $methodName;

				//get the docblock
				$methodDoc = new \phpDocumentor\Reflection\DocBlock($method);

				//get the description from the docblock
				$methodArray['description'] = self::stripReturns($methodDoc->getShortDescription());

				//get the return type
				$returnTags            = $methodDoc->getTagsByName("return");
				$returnType            = isset($returnTags[0]) ? $returnTags[0]->getType() : '';
				$methodArray['return'] = $returnType;

				//get the params for the method from reflection
				$methodParams = $method->getParameters();
				foreach ($methodParams as $param) {
					$paramArray = array();

					//get the reflect properties name
					$paramArray['type'] = $param->isArray() ? "array" : '';

					//get the hint, if set
					$paramArray['classHint'] = $param->getClass() ? $param->getClass()->getName() : '';

					//get the default value
					if ($param->isOptional()) {
						$paramArray['optional'] = true;
						if ($param->isDefaultValueAvailable()) {
							$paramArray['default'] = $param->getDefaultValue();
						}
					}
					//add it to the signature
					$methodArray['params']["$" . $param->getName()] = $paramArray;
				} //end foreach $methodParams

				//get the params from the docblock
				$paramTags = $methodDoc->getTagsByName("param");
				foreach ($paramTags as $param) {
					$paramName = $param->getVariableName();
					if (!$paramName) {
						//there's no name stored, even though there's a param
						//TODO throw an exception that we log for errors
						$methodErrors[$alias][$methodName][$paramName] = $param;
					}
					If (!isset($methodArray['params'][$paramName])) {
						$paramArray = array();
						//there's no param name anywhere but we have one
						//TODO throw an exception
						$methodErrors[$alias][$methodName][$paramName] = $param;
					} else {
						$paramArray = $methodArray['params'][$paramName];
					}
					$paramArray['docType']             = $param->getType();
					$paramArray['docContent']          = $param->getContent();
					$paramArray['docName']             = $param->getVariableName();
					$methodArray['params'][$paramName] = $paramArray;
				}//foreach $paramTags
				$methodSignatures[$methodName] = $methodArray;
			}//foreach $publicMethods

			//=========================
			//start building the output
			//=========================
			ksort($methodSignatures);

			//initial string for class
			$str .= "/** '" . $alias . "::' aliases $aliasDescription'" . $classReflect->getName() . "'\n";

			//output the public properties
			if (isset($propertySignatures))
			{
				ksort($propertySignatures);
				foreach ($propertySignatures as $name => $property) {
					$default = '';
					//if there's a 'value' it's the default value
					if (array_key_exists('value', $property)) {
						$default = self::getDefault($property['value']);
						$default = " = " . $default;
					}

					$str .= " * @var  " . $property['type'] . "  $" . $name . $default . "    " .
					        $property['description'] . "\n";
				}
			}//foreach $propertySignatures

			//find the longest return value for methods
			$longest = 0;
			foreach ($methodSignatures as $sig) {
				if (strlen($sig['return']) > $longest) {
					$longest = strlen($sig['return']);
				}
			}//foreach $methodSignatures

			//output the public methods
			foreach ($methodSignatures as $name => $method) {
				$str .= " * @method  static  " . str_pad($method['return'], $longest) . "  " . $name . "(";

				//output method parameters, if any
				if (isset($method['params'])) {
					foreach ($method['params'] as $paramName => $param) {
						if (!$paramName) {
							//we have a param but no name, so it's an error and we skip it
							continue;
						}
						//output each as... "type name = default, "
						//find a type from somewhere: reflection type first
						$type = (isset($param['docType']) and !empty($param['type'])) ? $param['type'] : '';
						//docblock type second
						$type = (empty($type)  and isset($param['docType']) and !empty($param['docType'])) ?
								$param['docType'] : $type;
						//reflection class hint third
						$type = (empty($type)  and isset($param['classHint']) and !empty($param['classHint'])) ?
								$param['classHint'] : $type;
						//check for pipes and truncate (arbitrarily takes the first one and discards the rest)
						$type = preg_replace('/(\|.*)/', '', $type);
						//add the type and name
						$str .= $type . " " . $paramName;
						//get the default
						if (isset($param['optional']) and $param['optional']) {
							$default = '';
							if (array_key_exists('default', $param)) {
								$default = self::getDefault($param['default']);
							}
							$str .= " = " . $default;
						}
						$str .= ", ";
					}//foreach $method['params']

					//remove the trailing comma
					$str = rtrim($str, ", ");
				}//if (isset($method['params'])

				//add a description
				$str .= ")" . "    " . $method['description'] . "\n";

			}//foreach $methodSignatures

			//add the class we're extending
			$str .= "*/\nclass " . $alias . " extends " . $facade . " {}\n\n";

		}//foreach $aliases

		//save the file
		//TODO make the app path configurable as a command line option
		$path = app_path() . DIRECTORY_SEPARATOR . '_ide_helper.php';
		\File::put($path, $str);
	}

	/**
	 * Get the console command arguments.
	 *
	 * @return array
	 */
	protected function getArguments()
	{
		return array(
			//TODO argument to do a single facade. Must be a valid facade
			array('example', InputArgument::OPTIONAL, 'An example argument.'),
		);
	}

	/**
	 * Get the console command options.
	 *
	 * @return array
	 */
	protected function getOptions()
	{
		return array(
			array('example', null, InputOption::VALUE_OPTIONAL, 'An example option.', null),
		);
	}

	/**
	 * Return a string as the default value
	 * @param mixed $value
	 *
	 * @return string
	 */
	protected static function getDefault($value)
	{
		if (is_array($value)) {
			$value   = isset($value[0]) ? $value[0] : '';
			return "array(" . $value . ")";
		}
		if (is_bool($value)) {
			return ($value) ? "true" : "false";
		}
		if (is_null($value)) {
			return "null";
		}
		return '"' . $value . '"';
	}
	/**
	 * Strips hard returns in the description
	 * @param string $value
	 *
	 * @return string
	 */
	protected static function stripReturns($value)
	{
		return trim(preg_replace('/\s+/', ' ', $value));
	}
}