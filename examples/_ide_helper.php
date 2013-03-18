<?php die("Access denied!");
/**
 * ---------------- DO NOT UPLOAD THIS FILE TO LIVE SERVER ------------------------
 * Laravel IDE Helper <http://github.com/jonphipps>
 * with thanks to <http://LaravelBook.com>
 * Implements code completion for Laravel 4 in JetBrains PhpStorm and SublimeText 2
 * --------------------------------------------------------------------------------
 */
/** 'App::' aliases a facade that provides 'Illuminate\Foundation\Application'
 * @method  static  void                                        abort(int $code, string $message = "", array $headers = array())    Throw an HttpException with the given data.
 * @method  static  void                                        after(\Closure $callback)    Register an "after" application filter.
 * @method  static  void                                        alias(string $abstract, string $alias)    Alias a type to a shorter name.
 * @method  static  void                                        before(\Closure $callback)    Register a "before" application filter.
 * @method  static  void                                        bind(string $abstract, \Closure $concrete = null, bool $shared = false)    Register a binding with the container.
 * @method  static  bool                                        bindIf(string $abstract, \Closure $concrete = null, bool $shared = false)    Register a binding if it hasn't already been registered.
 * @method  static  void                                        bindInstallPaths(array $paths)    Bind the installation paths to the application.
 * @method  static  void                                        boot()    Boot the application's service providers.
 * @method  static  void                                        booted(mixed $callback)    Register a new "booted" listener.
 * @method  static  void                                        booting(mixed $callback)    Register a new boot listener.
 * @method  static  bool                                        bound(string $abstract)    Determine if the given abstract type has been bound.
 * @method  static  mixed                                       build(string $concrete, array $parameters = array())    Instantiate a concrete instance of the given type.
 * @method  static  void                                        close(\Closure $callback)    Register a "close" application filter.
 * @method  static  string                                      detectEnvironment(array $environments)    Detect the application's current environment.
 * @method  static  \Symfony\Component\HttpFoundation\Response  dispatch(\Illuminate\Foundation\Request $request)    Handle the given request and get the response.
 * @method  static  string                                      environment()    Get the current application environment.
 * @method  static  void                                        error(\Closure $callback)    Register an application error handler.
 * @method  static  void                                        extend(string $abstract, \Closure $closure)    "Extend" an abstract type in the container.
 * @method  static  void                                        fatal(\Closure $callback)    Register an error handler for fatal errors.
 * @method  static  void                                        finish(\Closure $callback)    Register a "finish" application filter.
 * @method  static  array                                       getBindings()    Get the container's bindings.
 * @method  static  string                                      getBootstrapFile()    Get the application bootstrap file.
 * @method  static  array                                       getLoadedProviders()    Get the service providers that have been loaded.
 * @method  static  \Symfony\Component\HttpFoundation\Response  handle(\Illuminate\Foundation\Request $request, int $type = "1", bool $catch = true)    Handle the given request and get the response.
 * @method  static  void                                        instance(string $abstract, mixed $instance)    Register an existing instance as shared in the container.
 * @method  static  void                                        loadDeferredProviders()    Load and boot all of the remaining deferred providers.
 * @method  static  mixed                                       make(string $abstract, array $parameters = array())    Resolve the given type from the container.
 * @method  static  void                                        missing(\Closure $callback)    Register a 404 error handler.
 * @method  static  bool                                        offsetExists(string $key)    Determine if a given offset exists.
 * @method  static  mixed                                       offsetGet(string $key)    Get the value at a given offset.
 * @method  static  void                                        offsetSet(string $key, mixed $value)    Set the value at a given offset.
 * @method  static  void                                        offsetUnset(string $key)    Unset the value at a given offset.
 * @method  static  \Illuminate\Foundation\Request              prepareRequest(\Illuminate\Foundation\Request $request)    Prepare the request by injecting any services.
 * @method  static  \Symfony\Component\HttpFoundation\Response  prepareResponse(mixed $value, \Illuminate\Foundation\Request $request)    Prepare the given value as a Response object.
 * @method  static  void                                        register(\Illuminate\Support\ServiceProvider $provider, array $options = array())    Register a service provider with the application.
 * @method  static  void                                        registerAliasLoader(array $aliases)    Register the aliased class loader.
 * @method  static  void                                        resolving(\Closure $callback)    Register a new resolving callback.
 * @method  static  void                                        run()    Handles the given request and delivers the response.
 * @method  static  bool                                        runningInConsole()    Determine if we are running in the console.
 * @method  static  bool                                        runningUnitTests()    Determine if we are running unit tests.
 * @method  static  void                                        setDeferredServices(array $services)    Set the application's deferred services.
 * @method  static  void                                        setLocale(string $locale)    Set the current application locale.
 * @method  static  \Closure                                    share(\Closure $closure)    Wrap a Closure such that it is shared.
 * @method  static  void                                        shutdown(callable $callback = null)    Register a "shutdown" callback.
 * @method  static  void                                        singleton(string $abstract, \Closure $concrete = null)    Register a shared binding in the container.
 * @method  static  void                                        startExceptionHandling()    Start the exception handling for the request.
*/
class App extends Illuminate\Support\Facades\App {}

/** 'Artisan::' aliases a facade that provides 'Illuminate\Console\Application'
 * @method  static  \Symfony\Component\Console\Command\Command  add(\Symfony\Component\Console\Command\Command $command)    Add a command to the console.
 * @method  static                                              addCommands(array $commands)    Adds an array of command objects.
 * @method  static  \Command[]                                  all(string $namespace = null)    Gets the commands (registered in the given namespace if provided).
 * @method  static  string                                      asText(string $namespace = null, boolean $raw = false)    Returns a text representation of the Application.
 * @method  static  string|\DOMDocument                         asXml(string $namespace = null, Boolean $asDom = false)    Returns an XML representation of the Application.
 * @method  static  integer                                     doRun(\InputInterface $input, \OutputInterface $output)    Runs the current application.
 * @method  static  \Command                                    find(string $name)    Finds a command by name or alias.
 * @method  static  string                                      findNamespace(string $namespace)    Finds a registered namespace by a name or an abbreviation.
 * @method  static  \Command                                    get(string $name)    Returns a registered command by name or alias.
 * @method  static  array                                       getAbbreviations(array $names)    Returns an array of possible abbreviations given a set of names.
 * @method  static  \InputDefinition                            getDefinition()    Gets the InputDefinition related to this Application.
 * @method  static  string                                      getHelp()    Gets the help message.
 * @method  static  \HelperSet                                  getHelperSet()    Get the helper set associated with the command.
 * @method  static  string                                      getLongVersion()    Returns the long version of the application.
 * @method  static  string                                      getName()    Gets the name of the application.
 * @method  static  array                                       getNamespaces()    Returns an array of all unique namespaces used by currently registered commands.
 * @method  static  array                                       getTerminalDimensions()    Tries to figure out the terminal dimensions based on the current environment
 * @method  static  string                                      getVersion()    Gets the application version.
 * @method  static  Boolean                                     has(string $name)    Returns true if the command exists, false otherwise.
 * @method  static  \Command                                    register(string $name)    Registers a new command.
 * @method  static  void                                        renderException(\Exception $e, \Symfony\Component\Console\Output\OutputInterface $output)    Render the given exception.
 * @method  static  void                                        resolve(string $command)    Add a command, resolving through the application.
 * @method  static  void                                        resolveCommands(array $commands)    Resolve an array of commands through the application.
 * @method  static  integer                                     run(\InputInterface $input = null, \OutputInterface $output = null)    Runs the current application.
 * @method  static                                              setAutoExit(Boolean $boolean)    Sets whether to automatically exit after a command execution or not.
 * @method  static                                              setCatchExceptions(Boolean $boolean)    Sets whether to catch exceptions or not during commands execution.
 * @method  static                                              setDefinition(\InputDefinition $definition)    Set an input definition set to be used with this application
 * @method  static  void                                        setExceptionHandler(\Illuminate\Exception\Handler $handler)    Set the exception handler instance.
 * @method  static                                              setHelperSet(\HelperSet $helperSet)    Set a helper set to be used with the command.
 * @method  static  void                                        setLaravel(\Illuminate\Foundation\Application $laravel)    Set the Laravel application instance.
 * @method  static                                              setName(string $name)    Sets the application name.
 * @method  static                                              setVersion(string $version)    Sets the application version.
 * @method  static  \Illuminate\Console\Application             start(\Illuminate\Foundation\Application $app)    Start a new Console application.
*/
class Artisan extends Illuminate\Support\Facades\Artisan {}

/** 'Auth::' aliases a factory that provides 'Illuminate\Auth\Guard'
 * @method  static  bool                                    attempt(array $credentials = array(), bool $remember = false, bool $login = true)    Attempt to authenticate a user using the given credentials.
 * @method  static  bool                                    check()    Determine if the current user is authenticated.
 * @method  static  \Illuminate\CookieJar                   getCookieJar()    Get the cookie creator instance used by the guard.
 * @method  static  \Illuminate\Events\Dispatcher           getDispatcher()    Get the event dispatcher instance.
 * @method  static  string                                  getName()    Get a unique identifier for the auth session value.
 * @method  static  \Illuminate\Auth\UserProviderInterface  getProvider()    Get the user provider used by the guard.
 * @method  static  array                                   getQueuedCookies()    Get the cookies queued by the guard.
 * @method  static  string                                  getRecallerName()    Get the name of the cookie used to store the "recaller".
 * @method  static  \Illuminate\Session\Store               getSession()    Get the session store used by the guard.
 * @method  static  \Illuminate\Auth\UserInterface|null     getUser()    Return the currently cached user of the application.
 * @method  static  bool                                    guest()    Determine if the current user is a guest.
 * @method  static  void                                    login(\Illuminate\Auth\UserInterface $user, bool $remember = false)    Log a user into the application.
 * @method  static  \Illuminate\Auth\UserInterface          loginUsingId(mixed $id, bool $remember = false)    Log the given user ID into the application.
 * @method  static  void                                    logout()    Log the user out of the application.
 * @method  static  void                                    setCookieJar(\Illuminate\CookieJar $cookie)    Set the cookie creator instance used by the guard.
 * @method  static                                          setDispatcher(Illuminate\Events\Dispatcher $events)    Set the event dispatcher instance.
 * @method  static  void                                    setUser(\Illuminate\Auth\UserInterface $user)    Set the current user of the application.
 * @method  static  bool                                    stateless(array $credentials = array())    Log a user into the application without sessions or cookies.
 * @method  static  \Illuminate\Auth\UserInterface|null     user()    Get the currently authenticated user.
 * @method  static  bool                                    validate(array $credentials = array())    Validate a user's credentials.
*/
class Auth extends Illuminate\Support\Facades\Auth {}

/** 'Blade::' aliases a facade that provides 'Illuminate\View\Compilers\BladeCompiler'
 * @method  static  void    compile(string $path)    Compile the view at the given path.
 * @method  static  string  compileString(string $value)    Compile the given Blade template contents.
 * @method  static  string  createMatcher(string $function)    Get the regular expression for a generic Blade function.
 * @method  static  string  createOpenMatcher(string $function)    Get the regular expression for a generic Blade function.
 * @method  static  string  createPlainMatcher(string $function)    Create a plain Blade matcher.
 * @method  static  void    extend(\Closure $compiler)    Register a custom Blade compiler.
 * @method  static  string  getCompiledPath(string $path)    Get the path to the compiled version of a view.
 * @method  static  bool    isExpired(string $path)    Determine if the view at the given path is expired.
 * @method  static  void    setContentTags(string $openTag, string $closeTag, array $raw = false)    Sets the content tags used for the compiler.
 * @method  static  void    setEscapedContentTags(string $openTag, string $closeTag)    Sets the raw content tags used for the compiler.
*/
class Blade extends Illuminate\Support\Facades\Blade {}

/** 'Cache::' aliases a factory that provides 'Illuminate\Cache\Store'
 * @method  static  void   add(string $key, mixed $value, int $minutes)    Store an item in the cache if the key does not exist.
 * @method  static  void   decrement(string $key, int $value = "1")    Decrement the value at a given key.
 * @method  static  bool   existsInMemory(string $key)    Determine if an item is in memory.
 * @method  static  void   flush()    Remove all items from the cache.
 * @method  static  void   forever(string $key, mixed $value)    Store an item in the cache indefinitely.
 * @method  static  void   forget(string $key)    Remove an item from the cache.
 * @method  static  mixed  get(string $key, mixed $default = null)    Retrieve an item from the cache by key.
 * @method  static  int    getDefaultCacheTime()    Get the default cache time.
 * @method  static  array  getMemory()    Get all of the values in memory.
 * @method  static  bool   has(string $key)    Determine if an item exists in the cache.
 * @method  static  void   increment(string $key, int $value = "1")    Increment the value at a given key.
 * @method  static  bool   offsetExists(string $key)    Determine if a cached value exists.
 * @method  static  mixed  offsetGet(string $key)    Retrieve an item from the cache by key.
 * @method  static  void   offsetSet(string $key, mixed $value)    Store an item in the cache for the default time.
 * @method  static  void   offsetUnset(string $key)    Remove an item from the cache.
 * @method  static  void   put(string $key, mixed $value, int $minutes)    Store an item in the cache.
 * @method  static         remember(string $key, int $minutes, \Closure $callback)    Get an item from the cache, or store the default value.
 * @method  static         rememberForever(string $key, \Closure $callback)    Get an item from the cache, or store the default value forever.
 * @method  static  void   setDefaultCacheTime(int $minutes)    Set the default cache time in minutes.
*/
class Cache extends Illuminate\Support\Facades\Cache {}

/** 'ClassLoader::' aliases 'Illuminate\Support\ClassLoader'
 * @method  static  void    addDirectories(string $directories)    Add directories to the class loader.
 * @method  static  array   getDirectories()    Gets all the directories registered with the loader.
 * @method  static  void    load(string $class)    Load the given class file.
 * @method  static  string  normalizeClass(string $class)    Get the normal file name for a class.
 * @method  static  void    register()    Register the given class loader on the auto-loader stack.
 * @method  static  void    removeDirectories(string $directories = null)    Remove directories from the class loader.
*/
class ClassLoader extends Illuminate\Support\ClassLoader {}

/** 'Config::' aliases a facade that provides 'Illuminate\Config\Repository'
 * @method  static  void                                addNamespace(string $namespace, string $hint)    Add a new namespace to the loader.
 * @method  static  void                                afterLoading(string $namespace, \Closure $callback)    Register an after load callback for a given namespace.
 * @method  static  mixed                               get(string $key, mixed $default = null)    Get the specified configuration value.
 * @method  static  array                               getAfterLoadCallbacks()    Get the after load callback array.
 * @method  static  string                              getEnvironment()    Get the current configuration environment.
 * @method  static  array                               getItems()    Get all of the configuration items.
 * @method  static  \Illuminate\Config\LoaderInterface  getLoader()    Get the loader implementation.
 * @method  static  array                               getNamespaces()    Returns all registered namespaces with the config loader.
 * @method  static  bool                                has(string $key)    Determine if the given configuration value exists.
 * @method  static  bool                                hasGroup(string $key)    Determine if a configuration group exists.
 * @method  static  bool                                offsetExists(string $key)    Determine if the given configuration option exists.
 * @method  static  bool                                offsetGet(string $key)    Get a configuration option.
 * @method  static  bool                                offsetSet(string $key,  $value)    Set a configuration option.
 * @method  static  bool                                offsetUnset(string $key)    Unset a configuration option.
 * @method  static  void                                package(string $package, string $hint, string $namespace = null)    Register a package for cascading configuration.
 * @method  static  array                               parseKey(string $key)    Parse a key into namespace, group, and item.
 * @method  static  void                                set(string $key, mixed $value)    Set a given configuration value.
 * @method  static  \Illuminate\Config\LoaderInterface  setLoader(Illuminate\Config\LoaderInterface $loader)    Set the loader implementation.
 * @method  static  void                                setParsedKey(string $key, array $parsed)    Set the parsed value of a key.
*/
class Config extends Illuminate\Support\Facades\Config {}

/** 'Controller::' aliases 'Illuminate\Routing\Controllers\Controller'
 * @method  static  void                                        afterFilter(string $filter, array $options = array())    Register a new "after" filter on the controller.
 * @method  static  void                                        beforeFilter(string $filter, array $options = array())    Register a new "before" filter on the controller.
 * @method  static  \Symfony\Component\HttpFoundation\Response  callAction(\Illuminate\Container $container, \Illuminate\Routing\Router $router, string $method, array $parameters)    Execute an action on the controller.
 * @method  static  array                                       getControllerFilters()    Get the code registered filters.
 * @method  static  mixed                                       missingMethod(array $parameters)    Handle calls to missing methods on the controller.
*/
class Controller extends Illuminate\Routing\Controllers\Controller {}

/** 'Cookie::' aliases a facade that provides 'Illuminate\Cookie\CookieJar'
 * @method  static  \Symfony\Component\HttpFoundation\Cookie   forever(string $name, string $value, string $path = "/", string $domain = null, bool $secure = false, bool $httpOnly = true)    Create a cookie that lasts "forever" (five years).
 * @method  static  \Symfony\Component\HttpFoundation\Cookie   forget(string $name)    Expire the given cookie.
 * @method  static  mixed                                      get(string $key, mixed $default = null)    Get the value of the given cookie.
 * @method  static  \Illuminate\Encrypter                      getEncrypter()    Get the encrypter instance.
 * @method  static  \Symfony\Component\HttpFoundation\Request  getRequest()    Get the request instance.
 * @method  static  bool                                       has(string $key)    Determine if a cookie exists and is not null.
 * @method  static  \Symfony\Component\HttpFoundation\Cookie   make(string $name, string $value, int $minutes = "0", string $path = "/", string $domain = null, bool $secure = false, bool $httpOnly = true)    Create a new cookie instance.
*/
class Cookie extends Illuminate\Support\Facades\Cookie {}

/** 'Crypt::' aliases a facade that provides 'Illuminate\Encryption\Encrypter'
 * @method  static  string  decrypt( $payload, string $value)    Decrypt the given value.
 * @method  static  string  encrypt(string $value)    Encrypt the given value.
*/
class Crypt extends Illuminate\Support\Facades\Crypt {}

/** 'DB::' aliases a factory that provides 'Illuminate\Database\Connection'
 * @method  static  int                                              affectingStatement(string $query, array $bindings = array())    Run an SQL statement and get the number of rows affected.
 * @method  static  int                                              delete(string $query, array $bindings = array())    Run a delete statement against the database.
 * @method  static  void                                             flushQueryLog()    Clear the query log.
 * @method  static  mixed                                            getConfig(string $option)    Get an option from the configuration options.
 * @method  static  string                                           getDatabaseName()    Get the name of the connected database.
 * @method  static  string                                           getDriverName()    Get the PDO driver name.
 * @method  static  \Illuminate\Events\Dispatcher                    getEventDispatcher()    Get the event dispatcher used by the connection.
 * @method  static  int                                              getFetchMode()    Get the default fetch mode for the connection.
 * @method  static  string|null                                      getName()    Get the database connection name.
 * @method  static  \Illuminate\Pagination\Environment               getPaginator()    Get the paginator environment instance.
 * @method  static  \PDO                                             getPdo()    Get the currently used PDO connection.
 * @method  static  \Illuminate\Database\Query\Processors\Processor  getPostProcessor()    Get the query post processor used by the connection.
 * @method  static  \Illuminate\Database\Query\Grammars\Grammar      getQueryGrammar()    Get the query grammar used by the connection.
 * @method  static  array                                            getQueryLog()    Get the connection query log.
 * @method  static  \Illuminate\Database\Schema\Builder              getSchemaBuilder()    Get a schema builder instance for the connection.
 * @method  static  \Illuminate\Database\Query\Grammars\Grammar      getSchemaGrammar()    Get the schema grammar used by the connection.
 * @method  static  string                                           getTablePrefix()    Get the table prefix for the connection.
 * @method  static  bool                                             insert(string $query, array $bindings = array())    Run an insert statement against the database.
 * @method  static  void                                             logQuery(string $query, array $bindings,  $time = null)    Log a query in the connection's query log.
 * @method  static  array                                            prepareBindings(array $bindings)    Prepare the query bindings for execution.
 * @method  static  array                                            pretend(\Closure $callback)    Execute the given callback in "dry run" mode.
 * @method  static  bool                                             pretending()    Determine if the connection in a "dry run".
 * @method  static  \Illuminate\Database\Query\Expression            raw(mixed $value)    Get a new raw query expression.
 * @method  static  array                                            select(string $query, array $bindings = array())    Run a select statement against the database.
 * @method  static  mixed                                            selectOne(string $query, array $bindings = array())    Run a select statement and return a single result.
 * @method  static  string                                           setDatabaseName(string $database)    Set the name of the connected database.
 * @method  static  void                                             setEventDispatcher(Illuminate\Events\Dispatcher $events)    Set the event dispatcher instance on the connection.
 * @method  static  int                                              setFetchMode(int $fetchMode)    Set the default fetch mode for the connection.
 * @method  static  void                                             setPaginator(\Illuminate\Pagination\Environment $paginator)    Set the pagination environment instance.
 * @method  static  void                                             setPostProcessor(Illuminate\Database\Query\Processors\Processor $processor)    Set the query post processor used by the connection.
 * @method  static  void                                             setQueryGrammar(Illuminate\Database\Query\Grammars\Grammar $grammar)    Set the query grammar used by the connection.
 * @method  static  void                                             setSchemaGrammar(Illuminate\Database\Schema\Grammars\Grammar $grammar)    Set the schema grammar used by the connection.
 * @method  static  void                                             setTablePrefix(string $prefix)    Set the table prefix in use by the connection.
 * @method  static  bool                                             statement(string $query, array $bindings = array())    Execute an SQL statement and return the boolean result.
 * @method  static  \Illuminate\Database\Query\Builder               table(string $table)    Begin a fluent query against a database table.
 * @method  static  mixed                                            transaction(\Closure $callback)    Execute a Closure within a transaction.
 * @method  static  bool                                             unprepared(string $query)    Run a raw, unprepared query against the PDO connection.
 * @method  static  int                                              update(string $query, array $bindings = array())    Run an update statement against the database.
 * @method  static  void                                             useDefaultPostProcessor()    Set the query post processor to the default implementation.
 * @method  static  void                                             useDefaultQueryGrammar()    Set the query grammar to the default implementation.
 * @method  static  void                                             useDefaultSchemaGrammar()    Set the schema grammar to the default implementation.
 * @method  static  \Illuminate\Database\Grammar                     withTablePrefix(\Illuminate\Database\Grammar $grammar)    Set the table prefix and return the grammar.
*/
class DB extends Illuminate\Support\Facades\DB {}

/** 'Eloquent::' aliases 'Illuminate\Database\Eloquent\Model'
 * @var  bool  $exists = false    Indicates if the model exists.
 * @var  bool  $incrementing = true    Indicates if the IDs are auto-incrementing.
 * @var  bool  $snakeAttributes = true    Indicates whether attributes are snake cased on arrays.
 * @var  bool  $timestamps = true    Indicates if the model should be timestamped.
 * @method  static  \Illuminate\Database\Eloquent\Collection               all(array $columns = array(*))    Get all of the models from the database.
 * @method  static  array                                                  attributesToArray()    Convert the model's attributes to an array.
 * @method  static  \Illuminate\Database\Eloquent\Relations\BelongsTo      belongsTo(string $related, string $foreignKey = null)    Define an inverse one-to-one or many relationship.
 * @method  static  \Illuminate\Database\Eloquent\Relations\BelongsToMany  belongsToMany(string $related, string $table = null, string $foreignKey = null, string $otherKey = null)    Define a many-to-many relationship.
 * @method  static  \Illuminate\Database\Eloquent\Model                    create(array $attributes)    Save a new model and return the instance.
 * @method  static  void                                                   created(\Closure $callback)    Register a created model event with the dispatcher.
 * @method  static  void                                                   creating(\Closure $callback)    Register a creating model event with the dispatcher.
 * @method  static  void                                                   delete()    Delete the model from the database.
 * @method  static  \Illuminate\Database\Eloquent\Model                    fill(array $attributes)    Fill the model with an array of attributes.
 * @method  static  \Illuminate\Database\Eloquent\Model                    fillable(array $fillable)    Set the fillable attributes for the model.
 * @method  static  \Illuminate\Database\Eloquent\Model|\Collection        find(mixed $id, array $columns = array(*))    Find a model by its primary key.
 * @method  static  mixed                                                  freshTimestamp()    Get a fresh timestamp for the model.
 * @method  static  mixed                                                  getAttribute(string $key)    Get an attribute from the model.
 * @method  static  array                                                  getAttributes()    Get all of the current attributes on the model.
 * @method  static  \Illuminate\Database\Connection                        getConnection()    Get the database connection for the model.
 * @method  static  string                                                 getConnectionName()    Get the current connection name for the model.
 * @method  static  \Illuminate\Database\ConnectionResolverInterface       getConnectionResolver()    Get the connection resolver instance.
 * @method  static  string                                                 getCreatedAtColumn()    Get the name of the "created at" column.
 * @method  static  array                                                  getDirty()    Get the attributes that have been changed since last sync.
 * @method  static  \Illuminate\Events\Dispatcher                          getEventDispatcher()    Get the event dispatcher instance.
 * @method  static  array                                                  getFillable()    Get the fillable attributes for the model.
 * @method  static  string                                                 getForeignKey()    Get the default foreign key name for the model.
 * @method  static  array                                                  getHidden()    Get the hidden attributes for the model.
 * @method  static  bool                                                   getIncrementing()    Get the value indicating whether the IDs are incrementing.
 * @method  static  mixed                                                  getKey()    Get the value of the model's primary key.
 * @method  static  string                                                 getKeyName()    Get the primary key for the model.
 * @method  static  array                                                  getMutatedAttributes()    Get the mutated attributes for a given instance.
 * @method  static  array                                                  getOriginal(string $key = null, mixed $default = null)    Get the model's original attribute values.
 * @method  static  int                                                    getPerPage()    Get the number of models to return per page.
 * @method  static  mixed                                                  getRelation(string $relation)    Get a specified relationship.
 * @method  static  string                                                 getTable()    Get the table associated with the model.
 * @method  static  string                                                 getUpdatedAtColumn()    Get the name of the "updated at" column.
 * @method  static  \Illuminate\Database\Eloquent\Model                    guard(array $guarded)    Set the guarded attributes for the model.
 * @method  static  bool                                                   hasGetMutator(string $key)    Determine if a get mutator exists for an attribute.
 * @method  static  \Illuminate\Database\Eloquent\Relations\HasMany        hasMany(string $related, string $foreignKey = null)    Define a one-to-many relationship.
 * @method  static  \Illuminate\Database\Eloquent\Relation\HasOne          hasOne(string $related, string $foreignKey = null)    Define a one-to-one relationship.
 * @method  static  bool                                                   hasSetMutator(string $key)    Determine if a set mutator exists for an attribute.
 * @method  static  bool                                                   isFillable(string $key)    Determine if the given attribute may be mass assigned.
 * @method  static  string                                                 joiningTable(string $related)    Get the joining table name for a many-to-many relation.
 * @method  static  \Illuminate\Database\Eloquent\Relation\MorphMany       morphMany(string $related, string $name, string $type = null, string $id = null)    Define a polymorphic one-to-many relationship.
 * @method  static  \Illuminate\Database\Eloquent\Relation\MorphOne        morphOne(string $related, string $name, string $type = null, string $id = null)    Define a polymorphic one-to-one relationship.
 * @method  static  \Illuminate\Database\Eloquent\Relations\BelongsTo      morphTo(string $name = null, string $type = null, string $id = null)    Define an polymorphic, inverse one-to-one or many relationship.
 * @method  static  \Illuminate\Database\Eloquent\Collection               newCollection(array $models = array())    Create a new Eloquent Collection instance.
 * @method  static  \Illuminate\Database\Eloquent\Model                    newFromBuilder(array $attributes = array())    Create a new model instance that is existing.
 * @method  static  \Illuminate\Database\Eloquent\Model                    newInstance(array $attributes = array(), bool $exists = false)    Create a new instance of the given model.
 * @method  static  \Illuminate\Database\Eloquent\Builder                  newQuery()    Get a new query builder for the model's table.
 * @method  static  bool                                                   offsetExists(mixed $offset)    Determine if the given attribute exists.
 * @method  static  mixed                                                  offsetGet(mixed $offset)    Get the value for a given offset.
 * @method  static  void                                                   offsetSet(mixed $offset, mixed $value)    Set the value for a given offset.
 * @method  static  void                                                   offsetUnset(mixed $offset)    Unset the value for a given offset.
 * @method  static  \Illuminate\Database\Eloquent\Builder                  on(string $connection)    Begin querying the model on a given connection.
 * @method  static  array                                                  relationsToArray()    Get the model's relationships in array form.
 * @method  static  \Illuminate\Database\Connection                        resolveConnection(string $connection)    Resolve a connection instance by name.
 * @method  static  bool                                                   save()    Save the model to the database.
 * @method  static  void                                                   setAttribute(string $key, mixed $value)    Set a given attribute on the model.
 * @method  static  void                                                   setConnection(string $name)    Set the connection associated with the model.
 * @method  static  void                                                   setConnectionResolver(\Illuminate\Database\ConnectionResolverInterface $resolver)    Set the connection resolver instance.
 * @method  static  void                                                   setCreatedAt(mixed $value)    Set the value of the "created at" attribute.
 * @method  static  void                                                   setEventDispatcher(Illuminate\Events\Dispatcher $dispatcher)    Set the event dispatcher instance.
 * @method  static  void                                                   setHidden(array $hidden)    Set the hidden attributes for the model.
 * @method  static  void                                                   setIncrementing(bool $value)    Set whether IDs are incrementing.
 * @method  static  void                                                   setPerPage(int $perPage)    Set the number of models ot return per page.
 * @method  static  void                                                   setRawAttributes(array $attributes, bool $sync = false)    Set the array of model attributes.
 * @method  static  void                                                   setRelation(string $relation, mixed $value)    Set the specific relationship in the model.
 * @method  static  void                                                   setTable(string $table)    Set the table associated with the model.
 * @method  static  void                                                   setUpdatedAt(mixed $value)    Set the value of the "updated at" attribute.
 * @method  static  \Illuminate\Database\Eloquent\Model                    syncOriginal()    Sync the original attributes with the current.
 * @method  static  array                                                  toArray()    Convert the model instance to an array.
 * @method  static  string                                                 toJson(int $options = "0")    Convert the model instance to JSON.
 * @method  static  bool                                                   touch()    Update the model's update timestamp.
 * @method  static  void                                                   unsetEventDispatcher()    Unset the event dispatcher for models.
 * @method  static  void                                                   updated(\Closure $callback)    Register an updated model event with the dispatcher.
 * @method  static  void                                                   updating(\Closure $callback)    Register an updating model event with the dispatcher.
 * @method  static  bool                                                   usesTimestamps()    Determine if the model uses timestamps.
 * @method  static  \Illuminate\Database\Eloquent\Builder                  with(array $relations)    Being querying a model with eager loading.
*/
class Eloquent extends Illuminate\Database\Eloquent\Model {}

/** 'Event::' aliases a factory that provides 'Illuminate\Events\Event'
 * @method  static  \EventDispatcherInterface  getDispatcher()    Returns the EventDispatcher that dispatches this Event
 * @method  static  string                     getName()    Gets the event's name.
 * @method  static  Boolean                    isPropagationStopped()    Returns whether further event listeners should be triggered.
 * @method  static  bool                       isStopped()    Determine if the event has been stopped from propagating.
 * @method  static                             setDispatcher(\EventDispatcherInterface $dispatcher)    Stores the EventDispatcher that dispatches this Event
 * @method  static                             setName(string $name)    Sets the event's name property.
 * @method  static  void                       stop()    Stop the propagation of the event to other listeners.
 * @method  static                             stopPropagation()    Stops the propagation of the event to further event listeners.
*/
class Event extends Illuminate\Support\Facades\Event {}

/** 'File::' aliases a facade that provides 'Illuminate\Filesystem\Filesystem'
 * @method  static  int     append(string $path, string $data)    Append to a file.
 * @method  static  void    cleanDirectory(string $directory)    Empty the specified directory of all files and folders.
 * @method  static  void    copy(string $path, string $target)    Copy a file to a new location.
 * @method  static  void    copyDirectory(string $directory, string $destination, int $options = null)    Copy a directory from one location to another.
 * @method  static  bool    delete(string $path)    Delete the file at a given path.
 * @method  static  void    deleteDirectory(string $directory, bool $preserve = false)    Recursively delete a directory.
 * @method  static  bool    exists(string $path)    Determine if a file exists.
 * @method  static  string  extension(string $path)    Extract the file extension from a file path.
 * @method  static  array   files(string $directory)    Get an array of all files in a directory.
 * @method  static  string  get(string $path)    Get the contents of a file.
 * @method  static  string  getRemote(string $path)    Get the contents of a remote file.
 * @method  static  mixed   getRequire(string $path)    Get the returned value of a file.
 * @method  static  array   glob(string $pattern, int $flags = "0")    Find path names matching a given pattern.
 * @method  static  bool    isDirectory(string $directory)    Determine if the given path is a directory.
 * @method  static  int     lastModified(string $path)    Get the file's last modification time.
 * @method  static  bool    makeDirectory(string $path, int $mode = "511", bool $recursive = false)    Create a directory.
 * @method  static  void    move(string $path, string $target)    Move a file to a new location.
 * @method  static  int     put(string $path, string $contents)    Write the contents of a file.
 * @method  static  void    requireOnce(string $file)    Require the given file once.
 * @method  static  int     size(string $path)    Get the file size of a given file.
 * @method  static  string  type(string $path)    Get the file type of a given file.
*/
class File extends Illuminate\Support\Facades\File {}

/** 'Form::' aliases a facade that provides 'Illuminate\Html\FormBuilder'
 * @method  static  string  button(string $value = null, array $options = array())    Create a button element.
 * @method  static  string  checkbox(string $name, mixed $value = "1", bool $checked = null, array $options = array())    Create a checkbox input field.
 * @method  static  string  close()    Close the current form.
 * @method  static  string  email(string $name, string $value = null, array $options = array())    Create an e-mail input field.
 * @method  static  string  file(string $name, array $options = array())    Create a file input field.
 * @method  static  void    getSessionStore(\Illuminate\Session\Store $session)    Get the session store implementation.
 * @method  static  string  hidden(string $name, string $value = null, array $options = array())    Create a hidden input field.
 * @method  static  string  input(string $type, string $name, string $value = null, array $options = array())    Create a form input field.
 * @method  static  string  label(string $name, string $value, array $options = array())    Create a form label element.
 * @method  static  void    macro(string $name, callable $macro)    Register a custom form macro.
 * @method  static  string  model(mixed $model, array $options = array())    Create a new model based form builder.
 * @method  static  string  open(array $options = array())    Open up a new HTML form.
 * @method  static  string  password(string $name, array $options = array())    Create a password input field.
 * @method  static  string  radio(string $name, mixed $value = null, bool $checked = null, array $options = array())    Create a radio button input field.
 * @method  static  string  select(string $name, array $list = array(), string $selected = null, array $options = array())    Create a select box field.
 * @method  static  void    setSessionStore(\Illuminate\Session\Store $session)    Set the session store implementation.
 * @method  static  string  submit(string $value = null, array $options = array())    Create a submit button element.
 * @method  static  string  text(string $name, string $value = null, array $options = array())    Create a text input field.
 * @method  static  string  textarea(string $name, string $value = null, array $options = array())    Create a textarea input field.
 * @method  static  string  token()    Generate a hidden field with the current CSRF token.
*/
class Form extends Illuminate\Support\Facades\Form {}

/** 'Hash::' aliases a facade that provides 'Illuminate\Hashing\BcryptHasher'
 * @method  static  bool   check(string $value, string $hashedValue, array $options = array())    Check the given plain value against a hash.
 * @method  static  array  make(string $value,  $options = array())    Hash the given value.
*/
class Hash extends Illuminate\Support\Facades\Hash {}

/** 'Html::' aliases 'Illuminate\Html\HtmlBuilder'
 * @method  static  string  attributes(array $attributes)    Build an HTML attribute string from an array.
 * @method  static  string  decode(string $value)    Convert entities to HTML characters.
 * @method  static  string  entities(string $value)    Convert an HTML string to entities.
 * @method  static  string  ol(array $list, array $attributes = array())    Generate an ordered list of items.
 * @method  static  string  ul(array $list, array $attributes = array())    Generate an un-ordered list of items.
*/
class Html extends Illuminate\Html\HtmlBuilder {}

/** 'Input::' aliases a facade that provides 'Illuminate\Http\Request'
 * @var  \Symfony\Component\HttpFoundation\ParameterBag  $attributes = null    
 * @var  \Symfony\Component\HttpFoundation\ParameterBag  $cookies = null    
 * @var  \Symfony\Component\HttpFoundation\FileBag  $files = null    
 * @var  \Symfony\Component\HttpFoundation\HeaderBag  $headers = null    
 * @var  \Symfony\Component\HttpFoundation\ParameterBag  $query = null    
 * @var  \Symfony\Component\HttpFoundation\ParameterBag  $request = null    
 * @var  \Symfony\Component\HttpFoundation\ServerBag  $server = null    
 * @method  static  bool                                                 ajax()    Determine if the request is the result of an AJAX call.
 * @method  static  array                                                all()    Get all of the input and files for the request.
 * @method  static  string                                               cookie(string $key = null, mixed $default = null)    Retrieve a cookie from the request.
 * @method  static  \Request                                             create(string $uri, string $method = "GET", array $parameters = array(), array $cookies = array(), array $files = array(), array $server = array(), string $content = null)    Creates a Request based on a given URI and configuration.
 * @method  static  \Request                                             createFromGlobals()    Creates a new request with values from PHP's super globals.
 * @method  static  \Request                                             duplicate(array $query = null, array $request = null, array $attributes = null, array $cookies = null, array $files = null, array $server = null)    Clones a request and overrides some of its parameters.
 * @method  static                                                       enableHttpMethodParameterOverride()    Enables support for the _method request parameter to determine the intended HTTP method.
 * @method  static  array                                                except(array $keys)    Get all of the input except for a specified array of items.
 * @method  static  \Symfony\Component\HttpFoundation\File\UploadedFile  file(string $key = null, mixed $default = null)    Retrieve a file from the request.
 * @method  static  void                                                 flash(string $filter = null, array $keys = array())    Flash the input for the current request to the session.
 * @method  static  void                                                 flashExcept( $keys)    Flash only some of the input to the session.
 * @method  static  void                                                 flashOnly( $keys)    Flash only some of the input to the session.
 * @method  static  void                                                 flush()    Flush all of the old input from the session.
 * @method  static  string                                               fullUrl()    Get the full URL for the request.
 * @method  static  mixed                                                get(string $key, mixed $default = null, Boolean $deep = false)    Gets a "parameter" value.
 * @method  static  array                                                getAcceptableContentTypes()    Gets a list of content types acceptable by the client browser
 * @method  static  string                                               getBasePath()    Returns the root path from which this request is executed.
 * @method  static  string                                               getBaseUrl()    Returns the root url from which this request is executed.
 * @method  static  array                                                getCharsets()    Gets a list of charsets acceptable by the client browser.
 * @method  static  string                                               getClientIp()    Returns the client IP address.
 * @method  static  string|resource                                      getContent(Boolean $asResource = false)    Returns the request body content.
 * @method  static  string|null                                          getContentType()    Gets the format associated with the request.
 * @method  static  array                                                getETags()    Gets the Etags.
 * @method  static  string|null                                          getFormat(string $mimeType)    Gets the format associated with the mime type.
 * @method  static  string                                               getHost()    Returns the host name.
 * @method  static  string                                               getHttpHost()    Returns the HTTP host being requested.
 * @method  static  Boolean                                              getHttpMethodParameterOverride()    Checks whether support for the _method request parameter is enabled.
 * @method  static  array                                                getLanguages()    Gets a list of languages acceptable by the client browser.
 * @method  static  string                                               getLocale()    Get the locale.
 * @method  static  string                                               getMethod()    Gets the request "intended" method.
 * @method  static  string                                               getMimeType(string $format)    Gets the mime type associated with the format.
 * @method  static  string|null                                          getPassword()    Returns the password.
 * @method  static  string                                               getPathInfo()    Returns the path being requested relative to the executed script.
 * @method  static  string                                               getPort()    Returns the port on which the request is made.
 * @method  static  string|null                                          getPreferredLanguage(array $locales = null)    Returns the preferred language.
 * @method  static  string|null                                          getQueryString()    Generates the normalized query string for the Request.
 * @method  static  string                                               getRealMethod()    Gets the "real" request method.
 * @method  static  string                                               getRequestFormat(string $default = "html")    Gets the request format.
 * @method  static  string                                               getRequestUri()    Returns the requested URI.
 * @method  static  string                                               getScheme()    Gets the request's scheme.
 * @method  static  string                                               getSchemeAndHttpHost()    Gets the scheme and HTTP host.
 * @method  static  string                                               getScriptName()    Returns current script name.
 * @method  static  \SessionInterface|null                               getSession()    Gets the Session.
 * @method  static  \Illuminate\Session\Store                            getSessionStore()    Get the Illuminate session store implementation.
 * @method  static  array                                                getTrustedProxies()    Gets the list of trusted proxies.
 * @method  static  string                                               getUri()    Generates a normalized URI for the Request.
 * @method  static  string                                               getUriForPath(string $path)    Generates a normalized URI for the given path.
 * @method  static  string|null                                          getUser()    Returns the user.
 * @method  static  string                                               getUserInfo()    Gets the user info.
 * @method  static  bool                                                 has(string $key)    Determine if the request contains a given input item.
 * @method  static  bool                                                 hasFile(string $key)    Determine if the uploaded data contains a file.
 * @method  static  Boolean                                              hasPreviousSession()    Whether the request contains a Session which was started in one of the previous requests.
 * @method  static  Boolean                                              hasSession()    Whether the request contains a Session object.
 * @method  static  bool                                                 hasSessionStore()    Determine if the session store has been set.
 * @method  static  string                                               header(string $key = null, mixed $default = null)    Retrieve a header from the request.
 * @method  static                                                       initialize(array $query = array(), array $request = array(), array $attributes = array(), array $cookies = array(), array $files = array(), array $server = array(), string $content = null)    Sets the parameters for this request.
 * @method  static  string                                               input(string $key = null, mixed $default = null)    Retrieve an input item from the request.
 * @method  static  \Illuminate\Http\Request                             instance()    Return the Request instance.
 * @method  static  bool                                                 is(string $pattern)    Determine if the current request URI matches a pattern.
 * @method  static  Boolean                                              isMethod(string $method)    Checks if the request method is of specified type.
 * @method  static  Boolean                                              isMethodSafe()    Checks whether the method is safe or not.
 * @method  static  Boolean                                              isNoCache()    
 * @method  static  boolean                                              isProxyTrusted()    Returns true if $_SERVER entries coming from proxies are trusted, false otherwise.
 * @method  static  Boolean                                              isSecure()    Checks whether the request is secure or not.
 * @method  static  Boolean                                              isXmlHttpRequest()    Returns true if the request is a XMLHttpRequest.
 * @method  static  mixed                                                json(string $key = null, mixed $default = null)    Get the JSON payload for the request.
 * @method  static  void                                                 merge(array $input)    Merge new input into the current request's input array.
 * @method  static  string                                               normalizeQueryString(string $qs)    Normalizes a query string.
 * @method  static  string                                               old(string $key = null, mixed $default = null)    Retrieve an old input item.
 * @method  static  array                                                only(array $keys)    Get a subset of the items from the input data.
 * @method  static                                                       overrideGlobals()    Overrides the PHP global variables according to this request instance.
 * @method  static  string                                               path()    Get the current path info for the request.
 * @method  static  string                                               query(string $key = null, mixed $default = null)    Retrieve a query string item from the request.
 * @method  static  void                                                 replace(array $input)    Replace the input for the current request.
 * @method  static  string                                               root()    Get the root URL for the application.
 * @method  static  bool                                                 secure()    Determine if the request is over HTTPS.
 * @method  static  string                                               segment(string $index, mixed $default = null)    Get a segment from the URI (1 based index).
 * @method  static  array                                                segments()    Get all of the segments for the request path.
 * @method  static  string                                               server(string $key = null, mixed $default = null)    Retrieve a server variable from the request.
 * @method  static                                                       setDefaultLocale(string $locale)    Sets the default locale.
 * @method  static                                                       setFormat(string $format, string $mimeTypes)    Associates a format with mime types.
 * @method  static                                                       setLocale(string $locale)    Sets the locale.
 * @method  static                                                       setMethod(string $method)    Sets the request method.
 * @method  static                                                       setRequestFormat(string $format)    Sets the request format.
 * @method  static                                                       setSession(\SessionInterface $session)    Sets the Session.
 * @method  static  void                                                 setSessionStore(\Illuminate\Session\Store $session)    Set the Illuminate session store implementation.
 * @method  static                                                       setTrustedHeaderName(string $key, string $value)    Sets the name for trusted headers.
 * @method  static                                                       setTrustedProxies(array $proxies)    Sets a list of trusted proxies.
 * @method  static  array                                                splitHttpAcceptHeader(string $header)    Splits an Accept-* HTTP header.
 * @method  static                                                       trustProxyData()    Trusts $_SERVER entries coming from proxies.
 * @method  static  string                                               url()    Get the URL (no query string) for the request.
*/
class Input extends Illuminate\Support\Facades\Input {}

/** 'Lang::' aliases a facade that provides 'Illuminate\Translation\Translator'
 * @method  static  void                                            addNamespace(string $namespace, string $hint)    Add a new namespace to the loader.
 * @method  static  string                                          choice( $key, int $number, array $replace = array(), string $locale = null, string $id)    Get a translation according to an integer value.
 * @method  static  string                                          get(string $key, array $replace = array(), string $locale = null)    Get the translation for the given key.
 * @method  static  \Illuminate\Translation\LoaderInterface         getLoader()    Get the language line loader implementation.
 * @method  static  string                                          getLocale()    Get the default locale being used.
 * @method  static  \Symfony\Component\Translation\MessageSelector  getSelector()    Get the message selector instance.
 * @method  static  bool                                            has(string $key, string $locale = null)    Determine if a translation exists.
 * @method  static  string                                          load(string $namespace, string $group, string $locale)    Load the specified language group.
 * @method  static  array                                           parseKey(string $key)    Parse a key into namespace, group, and item.
 * @method  static  void                                            setLocale(string $locale)    Set the default locale.
 * @method  static  void                                            setParsedKey(string $key, array $parsed)    Set the parsed value of a key.
 * @method  static  void                                            setSelector(\Symfony\Component\Translation\MessageSelector $selector)    Set the message selector instance.
 * @method  static  string                                          trans(string $id, array $parameters = array(), string $domain = "messages", string $locale = null)    Get the translation for a given key.
 * @method  static  string                                          transChoice(string $id, int $number, array $parameters = array(), string $domain = "messages", string $locale = null)    Get a translation according to an integer value.
*/
class Lang extends Illuminate\Support\Facades\Lang {}

/** 'Log::' aliases a facade that provides 'Illuminate\Log\Writer'
 * @method  static  \Illuminate\Events\Dispatcher  getEventDispatcher()    Get the event dispatcher instance.
 * @method  static  \Monolog\Logger                getMonolog()    Get the underlying Monolog instance.
 * @method  static  void                           listen(\Closure $callback)    Register a new callback handler for when a log event is triggered.
 * @method  static  void                           setEventDispatcher(Illuminate\Events\Dispatcher $dispatcher)    Set the event dispatcher instance.
 * @method  static  void                           useDailyFiles(string $path, int $days = "0", string $level = "debug")    Register a daily file log handler.
 * @method  static  void                           useFiles(string $path, string $level = "debug")    Register a file log handler.
*/
class Log extends Illuminate\Support\Facades\Log {}

/** 'Mail::' aliases a facade that provides 'Illuminate\Mail\Mailer'
 * @method  static  void                          alwaysFrom(string $address, string $name = null)    Set the global from address and name.
 * @method  static  \Swift_Mailer                 getSwiftMailer()    Get the Swift Mailer instance.
 * @method  static  \Illuminate\View\Environment  getViewEnvironment()    Get the view environment instance.
 * @method  static  void                          plain(string $view, array $data, mixed $callback)    Send a new message when only a plain part.
 * @method  static  void                          pretend(bool $value = true)    Tell the mailer to not really send messages.
 * @method  static  void                          send(string $view, array $data, \Closure $callback)    Send a new message using a view.
 * @method  static  void                          setContainer(\Illuminate\Container $container)    Set the IoC container instance.
 * @method  static  void                          setLogger(\Illuminate\Log\Writer $logger)    Set the log writer instance.
 * @method  static  void                          setSwiftMailer(\Swift_Mailer $swift)    Set the Swift Mailer instance.
*/
class Mail extends Illuminate\Support\Facades\Mail {}

/** 'Paginator::' aliases a facade that provides 'Illuminate\Pagination\Environment'
 * @method  static  int                                                 getCurrentPage()    Get the number of the current page.
 * @method  static  string                                              getCurrentUrl()    Get the root URL for the request.
 * @method  static  string                                              getLocale()    Get the locale of the paginator.
 * @method  static  \Illuminate\View\View                               getPaginationView(\Illuminate\Pagination\Paginator $paginator)    Get the pagination view.
 * @method  static  \Symfony\Component\HttpFoundation\Request           getRequest()    Get the active request instance.
 * @method  static  \Symfony\Component\Translation\TranslatorInterface  getTranslator()    Get the translator instance.
 * @method  static  \Illuminate\View\Environment                        getViewDriver()    Get the current view driver.
 * @method  static  string                                              getViewName()    Get the name of the pagination view.
 * @method  static  \Illuminate\Pagination\Paginator                    make(array $items, int $total, int $perPage)    Get a new paginator instance.
 * @method  static  void                                                setBaseUrl(string $baseUrl)    Set the base URL in use by the paginator.
 * @method  static  void                                                setCurrentPage(int $number)    Set the number of the current page.
 * @method  static  void                                                setLocale(string $locale)    Set the locale of the paginator.
 * @method  static  void                                                setRequest(\Symfony\Component\HttpFoundation\Request $request)    Set the active request instance.
 * @method  static  void                                                setViewDriver(\Illuminate\View\Environment $view)    Set the current view driver.
 * @method  static  void                                                setViewName(string $viewName)    Set the name of the pagination view.
*/
class Paginator extends Illuminate\Support\Facades\Paginator {}

/** 'Password::' aliases a facade that provides 'Illuminate\Auth\Reminders\PasswordBroker'
 * @method  static  \Illuminate\Auth\RemindableInterface  getUser(array $credentials)    Get the user for the given credentials.
 * @method  static  \Illuminate\Http\RedirectResponse     remind(array $credentials, \Closure $callback = null)    Send a password reminder to a user.
 * @method  static  mixed                                 reset( $credentials, \Closure $callback, string $token, string $newPassword)    Reset the password for the given token.
 * @method  static  void                                  sendReminder(\Illuminate\Auth\RemindableInterface $user, string $token, \Closure $callback = null)    Send the password reminder e-mail.
*/
class Password extends Illuminate\Support\Facades\Password {}

/** 'Queue::' aliases a factory that provides 'Illuminate\Queue\Queue'
 * @method  static  void  setContainer(\Illuminate\Container $container)    Set the IoC container instance.
*/
class Queue extends Illuminate\Support\Facades\Queue {}

/** 'Redirect::' aliases a facade that provides 'Illuminate\Routing\Redirector'
 * @method  static  \Illuminate\Http\RedirectResponse  action(string $action, array $parameters = array(), int $status = "302", array $headers = array())    Create a new redirect response to a controller action.
 * @method  static  \Illuminate\Http\RedirectResponse  back(int $status = "302", array $headers = array())    Create a new redirect response to the previous location.
 * @method  static  \Illuminate\Routing\UrlGenerator   getUrlGenerator()    Get the URL generator instance.
 * @method  static  \Illuminate\Http\RedirectResponse  refresh(int $status = "302", array $headers = array())    Create a new redirect response to the current URI.
 * @method  static  \Illuminate\Http\RedirectResponse  route(string $route, array $parameters = array(), int $status = "302", array $headers = array())    Create a new redirect response to a named route.
 * @method  static  \Illuminate\Http\RedirectResponse  secure(string $path, int $status = "302", array $headers = array())    Create a new redirect response to the given HTTPS path.
 * @method  static  void                               setSession(\Illuminate\Session\Store $session)    Set the active session store.
 * @method  static  \Illuminate\Http\RedirectResponse  to(string $path, int $status = "302", array $headers = array(), bool $secure = null)    Create a new redirect response to the given path.
*/
class Redirect extends Illuminate\Support\Facades\Redirect {}

/** 'Redis::' aliases a factory that provides 'Illuminate\Redis\Database'
 * @method  static  string    buildCommand(string $method, array $parameters)    Build the Redis command syntax.
 * @method  static  mixed     command(string $method, array $parameters = array())    Run a command against the Redis database.
 * @method  static  void      connect()    Connect to the Redis database.
 * @method  static  string    fileGet(int $bytes)    Get the specified number of bytes from a file line.
 * @method  static  string    fileRead(int $bytes)    Read the specified number of bytes from the file resource.
 * @method  static  void      fileWrite(string $command)    Write the given command to the file resource.
 * @method  static  resource  getConnection()    Get the Redis socket connection.
 * @method  static  mixed     parseResponse(string $response)    Parse the Redis database response.
*/
class Redis extends Illuminate\Support\Facades\Redis {}

/** 'Request::' aliases a facade that provides 'Illuminate\Http\Request'
 * @var  \Symfony\Component\HttpFoundation\ParameterBag  $attributes = null    
 * @var  \Symfony\Component\HttpFoundation\ParameterBag  $cookies = null    
 * @var  \Symfony\Component\HttpFoundation\FileBag  $files = null    
 * @var  \Symfony\Component\HttpFoundation\HeaderBag  $headers = null    
 * @var  \Symfony\Component\HttpFoundation\ParameterBag  $query = null    
 * @var  \Symfony\Component\HttpFoundation\ParameterBag  $request = null    
 * @var  \Symfony\Component\HttpFoundation\ServerBag  $server = null    
 * @method  static  bool                                                 ajax()    Determine if the request is the result of an AJAX call.
 * @method  static  array                                                all()    Get all of the input and files for the request.
 * @method  static  string                                               cookie(string $key = null, mixed $default = null)    Retrieve a cookie from the request.
 * @method  static  \Request                                             create(string $uri, string $method = "GET", array $parameters = array(), array $cookies = array(), array $files = array(), array $server = array(), string $content = null)    Creates a Request based on a given URI and configuration.
 * @method  static  \Request                                             createFromGlobals()    Creates a new request with values from PHP's super globals.
 * @method  static  \Request                                             duplicate(array $query = null, array $request = null, array $attributes = null, array $cookies = null, array $files = null, array $server = null)    Clones a request and overrides some of its parameters.
 * @method  static                                                       enableHttpMethodParameterOverride()    Enables support for the _method request parameter to determine the intended HTTP method.
 * @method  static  array                                                except(array $keys)    Get all of the input except for a specified array of items.
 * @method  static  \Symfony\Component\HttpFoundation\File\UploadedFile  file(string $key = null, mixed $default = null)    Retrieve a file from the request.
 * @method  static  void                                                 flash(string $filter = null, array $keys = array())    Flash the input for the current request to the session.
 * @method  static  void                                                 flashExcept( $keys)    Flash only some of the input to the session.
 * @method  static  void                                                 flashOnly( $keys)    Flash only some of the input to the session.
 * @method  static  void                                                 flush()    Flush all of the old input from the session.
 * @method  static  string                                               fullUrl()    Get the full URL for the request.
 * @method  static  mixed                                                get(string $key, mixed $default = null, Boolean $deep = false)    Gets a "parameter" value.
 * @method  static  array                                                getAcceptableContentTypes()    Gets a list of content types acceptable by the client browser
 * @method  static  string                                               getBasePath()    Returns the root path from which this request is executed.
 * @method  static  string                                               getBaseUrl()    Returns the root url from which this request is executed.
 * @method  static  array                                                getCharsets()    Gets a list of charsets acceptable by the client browser.
 * @method  static  string                                               getClientIp()    Returns the client IP address.
 * @method  static  string|resource                                      getContent(Boolean $asResource = false)    Returns the request body content.
 * @method  static  string|null                                          getContentType()    Gets the format associated with the request.
 * @method  static  array                                                getETags()    Gets the Etags.
 * @method  static  string|null                                          getFormat(string $mimeType)    Gets the format associated with the mime type.
 * @method  static  string                                               getHost()    Returns the host name.
 * @method  static  string                                               getHttpHost()    Returns the HTTP host being requested.
 * @method  static  Boolean                                              getHttpMethodParameterOverride()    Checks whether support for the _method request parameter is enabled.
 * @method  static  array                                                getLanguages()    Gets a list of languages acceptable by the client browser.
 * @method  static  string                                               getLocale()    Get the locale.
 * @method  static  string                                               getMethod()    Gets the request "intended" method.
 * @method  static  string                                               getMimeType(string $format)    Gets the mime type associated with the format.
 * @method  static  string|null                                          getPassword()    Returns the password.
 * @method  static  string                                               getPathInfo()    Returns the path being requested relative to the executed script.
 * @method  static  string                                               getPort()    Returns the port on which the request is made.
 * @method  static  string|null                                          getPreferredLanguage(array $locales = null)    Returns the preferred language.
 * @method  static  string|null                                          getQueryString()    Generates the normalized query string for the Request.
 * @method  static  string                                               getRealMethod()    Gets the "real" request method.
 * @method  static  string                                               getRequestFormat(string $default = "html")    Gets the request format.
 * @method  static  string                                               getRequestUri()    Returns the requested URI.
 * @method  static  string                                               getScheme()    Gets the request's scheme.
 * @method  static  string                                               getSchemeAndHttpHost()    Gets the scheme and HTTP host.
 * @method  static  string                                               getScriptName()    Returns current script name.
 * @method  static  \SessionInterface|null                               getSession()    Gets the Session.
 * @method  static  \Illuminate\Session\Store                            getSessionStore()    Get the Illuminate session store implementation.
 * @method  static  array                                                getTrustedProxies()    Gets the list of trusted proxies.
 * @method  static  string                                               getUri()    Generates a normalized URI for the Request.
 * @method  static  string                                               getUriForPath(string $path)    Generates a normalized URI for the given path.
 * @method  static  string|null                                          getUser()    Returns the user.
 * @method  static  string                                               getUserInfo()    Gets the user info.
 * @method  static  bool                                                 has(string $key)    Determine if the request contains a given input item.
 * @method  static  bool                                                 hasFile(string $key)    Determine if the uploaded data contains a file.
 * @method  static  Boolean                                              hasPreviousSession()    Whether the request contains a Session which was started in one of the previous requests.
 * @method  static  Boolean                                              hasSession()    Whether the request contains a Session object.
 * @method  static  bool                                                 hasSessionStore()    Determine if the session store has been set.
 * @method  static  string                                               header(string $key = null, mixed $default = null)    Retrieve a header from the request.
 * @method  static                                                       initialize(array $query = array(), array $request = array(), array $attributes = array(), array $cookies = array(), array $files = array(), array $server = array(), string $content = null)    Sets the parameters for this request.
 * @method  static  string                                               input(string $key = null, mixed $default = null)    Retrieve an input item from the request.
 * @method  static  \Illuminate\Http\Request                             instance()    Return the Request instance.
 * @method  static  bool                                                 is(string $pattern)    Determine if the current request URI matches a pattern.
 * @method  static  Boolean                                              isMethod(string $method)    Checks if the request method is of specified type.
 * @method  static  Boolean                                              isMethodSafe()    Checks whether the method is safe or not.
 * @method  static  Boolean                                              isNoCache()    
 * @method  static  boolean                                              isProxyTrusted()    Returns true if $_SERVER entries coming from proxies are trusted, false otherwise.
 * @method  static  Boolean                                              isSecure()    Checks whether the request is secure or not.
 * @method  static  Boolean                                              isXmlHttpRequest()    Returns true if the request is a XMLHttpRequest.
 * @method  static  mixed                                                json(string $key = null, mixed $default = null)    Get the JSON payload for the request.
 * @method  static  void                                                 merge(array $input)    Merge new input into the current request's input array.
 * @method  static  string                                               normalizeQueryString(string $qs)    Normalizes a query string.
 * @method  static  string                                               old(string $key = null, mixed $default = null)    Retrieve an old input item.
 * @method  static  array                                                only(array $keys)    Get a subset of the items from the input data.
 * @method  static                                                       overrideGlobals()    Overrides the PHP global variables according to this request instance.
 * @method  static  string                                               path()    Get the current path info for the request.
 * @method  static  string                                               query(string $key = null, mixed $default = null)    Retrieve a query string item from the request.
 * @method  static  void                                                 replace(array $input)    Replace the input for the current request.
 * @method  static  string                                               root()    Get the root URL for the application.
 * @method  static  bool                                                 secure()    Determine if the request is over HTTPS.
 * @method  static  string                                               segment(string $index, mixed $default = null)    Get a segment from the URI (1 based index).
 * @method  static  array                                                segments()    Get all of the segments for the request path.
 * @method  static  string                                               server(string $key = null, mixed $default = null)    Retrieve a server variable from the request.
 * @method  static                                                       setDefaultLocale(string $locale)    Sets the default locale.
 * @method  static                                                       setFormat(string $format, string $mimeTypes)    Associates a format with mime types.
 * @method  static                                                       setLocale(string $locale)    Sets the locale.
 * @method  static                                                       setMethod(string $method)    Sets the request method.
 * @method  static                                                       setRequestFormat(string $format)    Sets the request format.
 * @method  static                                                       setSession(\SessionInterface $session)    Sets the Session.
 * @method  static  void                                                 setSessionStore(\Illuminate\Session\Store $session)    Set the Illuminate session store implementation.
 * @method  static                                                       setTrustedHeaderName(string $key, string $value)    Sets the name for trusted headers.
 * @method  static                                                       setTrustedProxies(array $proxies)    Sets a list of trusted proxies.
 * @method  static  array                                                splitHttpAcceptHeader(string $header)    Splits an Accept-* HTTP header.
 * @method  static                                                       trustProxyData()    Trusts $_SERVER entries coming from proxies.
 * @method  static  string                                               url()    Get the URL (no query string) for the request.
*/
class Request extends Illuminate\Support\Facades\Request {}

/** 'Response::' aliases 'Illuminate\Support\Facades\Response'
 * @method  static  \Symfony\Component\HttpFoundation\BinaryFileResponse  download(\SplFileInfo $file,  $name = null, array $headers = array(), int $status)    Create a new file download response.
 * @method  static  \Symfony\Component\HttpFoundation\JsonResponse        json( $data = array(), int $status = "200", array $headers = array(), string $content)    Return a new JSON response from the application.
 * @method  static  \Symfony\Component\HttpFoundation\Response            make(string $content = "", int $status = "200", array $headers = array())    Return a new response from the application.
 * @method  static  \Symfony\Component\HttpFoundation\StreamedResponse    stream(\Closure $callback, int $status = "200", array $headers = array())    Return a new streamed response from the application.
*/
class Response extends Illuminate\Support\Facades\Response {}

/** 'Route::' aliases a facade that provides 'Illuminate\Routing\Router'
 * @method  static  void                                        addFilter(string $name, \Closure $callback)    Register a new filter with the application.
 * @method  static  void                                        after(\Closure $callback)    Register an "after" routing filter.
 * @method  static  \Illuminate\Routing\Route                   any(string $pattern, mixed $action)    Add a new route to the collection.
 * @method  static  void                                        before(\Closure $callback)    Register a "before" routing filter.
 * @method  static                                              bind(string $key, mixed $binder)    Register a custom parameter binder.
 * @method  static  mixed                                       callFinishFilter(\Symfony\Component\HttpFoundation\Request $request, \Symfony\Component\HttpFoundation\Response $response)    Call the "finish" global filter.
 * @method  static  void                                        close(\Closure $callback)    Register a "close" routing filter.
 * @method  static  \Illuminate\Routing\Route                   controller(string $uri, string $controller)    Route a controller to a URI with wildcard routing.
 * @method  static  void                                        controllers(array $controllers)    Register an array of controllers with wildcard routing.
 * @method  static  bool                                        currentRouteNamed(string $name)    Determine if the current route has a given name.
 * @method  static  bool                                        currentRouteUses(string $action)    Determine if the current route uses a given controller action.
 * @method  static  \Illuminate\Routing\Route                   delete(string $pattern, mixed $action)    Add a new route to the collection.
 * @method  static  void                                        disableFilters()    Disable the running of all filters.
 * @method  static  \Symfony\Component\HttpFoundation\Response  dispatch(\Symfony\Component\HttpFoundation\Request $request)    Get the response for a given request.
 * @method  static  void                                        enableFilters()    Enable the running of filters.
 * @method  static  bool                                        filtersEnabled()    Determine if route filters are enabled.
 * @method  static  array                                       findPatternFilters(\Illuminate\Foundation\Request $request)    Find the patterned filters matching a request.
 * @method  static  void                                        finish(\Closure $callback)    Register a "finish" routing filters.
 * @method  static  \Illuminate\Routing\Route                   get(string $pattern, mixed $action)    Add a new route to the collection.
 * @method  static  \Illuminate\Container\Container             getContainer()    Get the container used by the router.
 * @method  static  \Illuminate\Routing\Route                   getCurrentRoute()    Get the current route being executed.
 * @method  static  \Closure                                    getFilter(string $name)    Get a registered filter callback.
 * @method  static  array                                       getFilters()    Get the filters defined on the router.
 * @method  static  array                                       getGlobalFilters()    Get the global filters defined on the router.
 * @method  static  \Illuminate\Routing\Controllers\Inspector   getInspector()    Get the controller inspector instance.
 * @method  static  \Symfony\Component\HttpFoundation\Request   getRequest()    Get the current request being dispatched.
 * @method  static  string                                      getResourceUri(string $resource)    Get the base resource URI for a given resource.
 * @method  static  \Symfony\Component\Routing\RouteCollection  getRoutes()    Retrieve the entire route collection.
 * @method  static  void                                        group(array $attributes, \Closure $callback)    Create a route group with shared attributes.
 * @method  static  bool                                        hasBinder(string $key)    Determine if a given key has a registered binder.
 * @method  static  \Illuminate\Routing\Route                   match(string $method, string $pattern, mixed $action)    Add a new route to the collection.
 * @method  static  void                                        matchFilter(string $pattern, string $names)    Tie a registered filter to a URI pattern.
 * @method  static  void                                        model(string $key, string $class)    Register a model binder for a wildcard.
 * @method  static  \Illuminate\Routing\Route                   options(string $pattern, mixed $action)    Add a new route to the collection.
 * @method  static  \Illuminate\Routing\Route                   patch(string $pattern, mixed $action)    Add a new route to the collection.
 * @method  static  void                                        pattern(string $key, string $pattern)    Set a global where pattern on all routes
 * @method  static  mixed                                       performBinding(string $key, mixed $value, \Illuminate\Routing\Route $route)    Call a binder for a given wildcard.
 * @method  static  \Illuminate\Routing\Route                   post(string $pattern, mixed $action)    Add a new route to the collection.
 * @method  static  \Symfony\Component\HttpFoundation\Response  prepare(mixed $value, \Illuminate\Foundation\Request $request)    Prepare the given value as a Response object.
 * @method  static  \Illuminate\Routing\Route                   put(string $pattern, mixed $action)    Add a new route to the collection.
 * @method  static  void                                        resource(string $resource, string $controller, array $options = array())    Route a resource to a controller.
 * @method  static  void                                        setContainer(\Illuminate\Container\Container $container)    Set the container instance on the router.
 * @method  static  void                                        setCurrentRoute(\Illuminate\Routing\Route $route)    Set the current route on the router.
 * @method  static  void                                        setInspector(\Illuminate\Routing\Controllers\Inspector $inspector)    Set the controller inspector instance.
*/
class Route extends Illuminate\Support\Facades\Route {}

/** 'Schema::' aliases a facade that provides 'Illuminate\Database\Schema\MySqlBuilder'
 * @method  static  \Illuminate\Database\Schema\Blueprint  create(string $table, \Closure $callback)    Create a new table on the schema.
 * @method  static  \Illuminate\Database\Schema\Blueprint  drop(string $table)    Drop a table from the schema.
 * @method  static  \Illuminate\Database\Schema\Blueprint  dropIfExists(string $table)    Drop a table from the schema if it exists.
 * @method  static  \Illuminate\Database\Connection        getConnection()    Get the database connection instance.
 * @method  static  bool                                   hasTable(string $table)    Determine if the given table exists.
 * @method  static  \Illuminate\Database\Schema\Blueprint  rename(string $from, string $to)    Rename a table on the schema.
 * @method  static  \Illuminate\Database\Schema            setConnection(Illuminate\Database\Connection $connection)    Set the database connection instance.
 * @method  static  \Illuminate\Database\Schema\Blueprint  table(string $table, \Closure $callback)    Modify a table on the schema.
*/
class Schema extends Illuminate\Support\Facades\Schema {}

/** 'Seeder::' aliases 'Illuminate\Database\Seeder'
 * @method  static  void  call(string $class)    Seed the given connection from the given path.
 * @method  static  void  run()    Run the database seeds.
 * @method  static  void  setContainer(\Illuminate\Container\Container $container)    Set the IoC container instance.
*/
class Seeder extends Illuminate\Database\Seeder {}

/** 'Session::' aliases a facade that provides 'Illuminate\Session\CookieStore'
 * @method  static  array                  all()    Get the full array of session data, including flash data.
 * @method  static  void                   createSession(string $id, array $session, \Symfony\Component\HttpFoundation\Response $response)    Create a new session in storage.
 * @method  static  void                   finish(\Symfony\Component\HttpFoundation\Response $response, int $lifetime)    Finish the session handling for the request.
 * @method  static  void                   flash(string $key, mixed $value)    Flash a key / value pair to the session.
 * @method  static  void                   flashInput(array $value)    Flash an input array to the session.
 * @method  static  void                   flush()    Remove all of the items from the session.
 * @method  static  void                   forget(string $key)    Remove an item from the session.
 * @method  static  mixed                  get(string $key, mixed $default = null)    Get the requested item from the session.
 * @method  static  void                   getCookie(\Illuminate\Cookie\CookieJar $cookie, string $name, int $lifetime, string $path, string $domain)    Write the session cookie to the response.
 * @method  static  \Illuminate\CookieJar  getCookieJar()    Get the cookie jar instance.
 * @method  static  mixed                  getCookieOption(string $option)    Get the given cookie option.
 * @method  static  mixed                  getFlash(string $key, mixed $default = null)    Get the request item from the flash data.
 * @method  static  int                    getLastActivity()    Get the session's last activity UNIX timestamp.
 * @method  static  mixed                  getOldInput(string $key = null, mixed $default = null)    Get the requested item from the flashed input array.
 * @method  static                         getSession()    Get the session payload.
 * @method  static  string                 getSessionID()    Get the current session ID.
 * @method  static  string                 getToken()    Get the CSRF token value.
 * @method  static  bool                   has(string $key)    Determine if the session contains a given item.
 * @method  static  bool                   hasOldInput(string $key)    Determine if the old input contains an item.
 * @method  static  bool                   hitsLottery()    Determine if the request hits the sweeper lottery.
 * @method  static  void                   keep(string $keys)    Keep a session flash item from expiring.
 * @method  static  bool                   offsetExists(string $key)    Determine if the given offset exists.
 * @method  static  mixed                  offsetGet(string $key)    Get the value at a given offset.
 * @method  static  void                   offsetSet(string $key, mixed $value)    Store a value at the given offset.
 * @method  static  void                   offsetUnset(string $key)    Remove the value at a given offset.
 * @method  static  void                   put(string $key, mixed $value)    Put a key / value pair in the session.
 * @method  static  void                   reflash()    Keep all of the session flash data from expiring.
 * @method  static  string                 regenerate()    Generate a new session identifier.
 * @method  static  array|null             retrieveSession(string $id)    Retrieve a session payload from storage.
 * @method  static  bool                   sessionExists()    Determine if the session exists in storage.
 * @method  static  void                   setCookieName(string $name)    Set the session cookie name.
 * @method  static  void                   setCookieOption(string $option, mixed $value)    Set the given cookie option.
 * @method  static  void                   setExists(bool $value)    Set the existence of the session.
 * @method  static  void                   setLifetime(int $minutes)    Set the session lifetime.
 * @method  static  void                   setPayloadName(string $name)    Set the name of the session payload cookie.
 * @method  static  void                   setSession(array $session)    Set the entire session payload.
 * @method  static  void                   setSweepLottery(array $values)    Set the chances of hitting the Sweeper lottery.
 * @method  static  void                   start(\Illuminate\CookieJar $cookies, string $name)    Load the session for the request.
 * @method  static  void                   updateSession(string $id, array $session, \Symfony\Component\HttpFoundation\Response $response)    Update an existing session in storage.
*/
class Session extends Illuminate\Support\Facades\Session {}

/** 'Str::' aliases 'Illuminate\Support\Str'
 * @method  static  string  ascii(string $value)    Transliterate a UTF-8 value to ASCII.
 * @method  static  string  camel(string $value)    Convert a value to camel case.
 * @method  static  bool    contains(string $haystack, string $needle)    Determine if a given string contains a given sub-string.
 * @method  static  bool    endsWith(string $haystack, string $needle)    Determine if a given string ends with a given needle.
 * @method  static  string  finish(string $value, string $cap)    Cap a string with a single instance of a given value.
 * @method  static  bool    is(string $pattern, string $value)    Determine if a given string matches a given pattern.
 * @method  static  string  limit(string $value, int $limit = "100", string $end = "...")    Limit the number of characters in a string.
 * @method  static  string  plural(string $value, int $count = "2")    Get the plural form of an English word.
 * @method  static  string  quickRandom(int $length = "16")    Generate a "random" alpha-numeric string.
 * @method  static  string  random(int $length = "16")    Generate a more truly "random" alpha-numeric string.
 * @method  static  string  singular(string $value)    Get the singular form of an English word.
 * @method  static  string  slug(string $title, string $separator = "-")    Generate a URL friendly "slug" from a given string.
 * @method  static  string  snake(string $value, string $delimiter = "_")    Convert a string to snake case.
 * @method  static  bool    startsWith(string $haystack,  $needles, string $needle)    Determine if a string starts with a given needle.
 * @method  static  string  studly(string $value)    Convert a value to studly caps case.
 * @method  static  string  words(string $value, int $words = "100", string $end = "...")    Limit the number of words in a string.
*/
class Str extends Illuminate\Support\Str {}

/** 'URL::' aliases a facade that provides 'Illuminate\Routing\UrlGenerator'
 * @method  static  string                                             action(string $action, mixed $parameters = array(), bool $absolute = true)    Get the URL to a controller action.
 * @method  static  string                                             asset(string $path, bool $secure = null)    Generate a URL to an application asset.
 * @method  static  string                                             current()    Get the current URL for the request.
 * @method  static  \Symfony\Component\Routing\Generator\UrlGenerator  getGenerator()    Get the Symfony URL generator instance.
 * @method  static  \Symfony\Component\HttpFoundation\Request          getRequest()    Get the request instance.
 * @method  static  bool                                               isValidUrl(string $path)    Determine if the given path is a valid URL.
 * @method  static  string                                             previous()    Get the URL for the previous request.
 * @method  static  string                                             route(string $name, mixed $parameters = array(), bool $absolute = true)    Get the URL to a named route.
 * @method  static  string                                             secure(string $path,  $parameters = array())    Generate a secure, absolute URL to the given path.
 * @method  static  string                                             secureAsset(string $path)    Generate a URL to a secure asset.
 * @method  static  void                                               setGenerator(\Symfony\Component\Routing\Generator\UrlGenerator $generator)    Get the Symfony URL generator instance.
 * @method  static  void                                               setRequest(\Symfony\Component\HttpFoundation\Request $request)    Set the current request instance.
 * @method  static  string                                             to(string $path, mixed $parameters = array(), bool $secure = null)    Generate a absolute URL to the given path.
*/
class URL extends Illuminate\Support\Facades\URL {}

/** 'Validator::' aliases a factory that provides 'Illuminate\Validation\Validator'
 * @method  static  void                                                addExtension(string $rule, \Closure $extension)    Register a custom validator extension.
 * @method  static  void                                                addExtensions(array $extensions)    Register an array of custom validator extensions.
 * @method  static  void                                                addImplicitExtension(string $rule, \Closure $extension)    Register a custom implicit validator extension.
 * @method  static  void                                                addImplicitExtensions(array $extensions)    Register an array of custom implicit validator extensions.
 * @method  static  \Illuminate\Support\MessageBag                      errors()    An alternative more semantic shortcut to the message container.
 * @method  static  bool                                                fails()    Determine if the data fails the validation rules.
 * @method  static  array                                               getData()    Get the data under validation.
 * @method  static  array                                               getExtensions()    Get the array of custom validator extensions.
 * @method  static  array                                               getFiles()    Get the files under validation.
 * @method  static  \Illuminate\Support\MessageBag                      getMessageBag()    Get the messages for the instance.
 * @method  static  \Illuminate\Validation\PresenceVerifierInterface    getPresenceVerifier()    Get the Presence Verifier implementation.
 * @method  static  array                                               getRules()    Get the validation rules.
 * @method  static  \Symfony\Component\Translation\TranslatorInterface  getTranslator()    Get the Translator implementation.
 * @method  static  \Illuminate\Support\MessageBag                      messages()    Get the message container for the validator.
 * @method  static  bool                                                passes()    Determine if the data passes the validation rules.
 * @method  static  void                                                setData(array $data)    Set the data under validation.
 * @method  static  \Illuminate\Validation\Validator                    setFiles(array $files)    Set the files under validation.
 * @method  static  void                                                setPresenceVerifier(\Illuminate\Validation\PresenceVerifierInterface $presenceVerifier)    Set the Presence Verifier implementation.
 * @method  static  void                                                setTranslator(\Symfony\Component\Translation\TranslatorInterface $translator)    Set the Translator implementation.
*/
class Validator extends Illuminate\Support\Facades\Validator {}

/** 'View::' aliases a facade that provides 'Illuminate\View\Environment'
 * @method  static  void                                     addExtension(string $extension, string $engine, \Closure $resolver = null)    Register a valid view extension and its engine.
 * @method  static  void                                     addLocation(string $location)    Add a location to the array of view locations.
 * @method  static  void                                     addNamespace(string $namespace, string $hints)    Add a new namespace to the loader.
 * @method  static  void                                     callComposer(\Illuminate\View\View $view)    Call the composer for a given view.
 * @method  static  \Closure                                 composer(array $views, \Closure $callback)    Register a view composer event.
 * @method  static  void                                     decrementRender()    Decrement the rendering counter.
 * @method  static  bool                                     doneRendering()    Check if there are no active render operations.
 * @method  static  bool                                     exists(string $view)    Determine if a given view exists.
 * @method  static  void                                     flushSections()    Flush all of the section contents.
 * @method  static  \Illuminate\Container                    getContainer()    Get the IoC container instance.
 * @method  static  \Illuminate\Events\Dispatcher            getDispatcher()    Get the event dispatcher instance.
 * @method  static  \Illuminate\View\Engines\EngineResolver  getEngineResolver()    Get the engine resolver instance.
 * @method  static  array                                    getExtensions()    Get the extension to engine bindings.
 * @method  static  \Illuminate\View\ViewFinder              getFinder()    Get the view finder instance.
 * @method  static  array                                    getSections()    Get the entire array of sections.
 * @method  static  array                                    getShared()    Get all of the shared data for the environment.
 * @method  static  void                                     incrementRender()    Increment the rendering counter.
 * @method  static  void                                     inject(string $section, string $content)    Inject inline content into a section.
 * @method  static  \Illuminate\View\View                    make(string $view, array $data = array())    Get a evaluated view contents for the given view.
 * @method  static  string                                   renderEach(string $view, array $data, string $iterator, string $empty = "raw|")    Get the rendered contents of a partial from a loop.
 * @method  static  void                                     setContainer(\Illuminate\Container $container)    Set the IoC container instance.
 * @method  static  void                                     share(string $key, mixed $value)    Add a piece of shared data to the environment.
 * @method  static  void                                     startSection(string $section, string $content = "")    Start injecting content into a section.
 * @method  static  string                                   stopSection()    Stop injecting content into a section.
 * @method  static  string                                   yieldContent(string $section)    Get the string contents of a section.
 * @method  static  string                                   yieldSection()    Stop injecting content into a section and return its contents.
*/
class View extends Illuminate\Support\Facades\View {}

