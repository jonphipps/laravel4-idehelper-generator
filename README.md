laravel4-idehelper-generator
============================
It may be obvious from the lack of commits, but I'm not maintaining this at the moment. I would suggest that you use [barryvdh/laravel-ide-helper](https://github.com/barryvdh/laravel-ide-helper) instead, since it basically does the same thing, although with slightly different results. 

Generates a helper file to assist IDEs with code completion for Laravel 4 in PHPStorm, SublimeText 2, NetBeans (not tested), and maybe other dynamic codeintel IDEs.

It has the desirable side-effect of taking a snapshot of the Laravel 4 API every time it's run and I'm finding it useful to be able to keep up with the day-to-day changes as Laravel 4 matures. I have it under source control and GIT gives me a nice diff showing what's changed.

There's an example in the examples folder.

## Installation

Add it to the ```require-dev``` section using Composer from the command line:

	composer require jonphipps/idehelper:dev-master --dev

I'm also running it as a post-update command (it's _very_ fast), so the helper file gets updated every time I run ```composer update``` and this keeps the IDE always in sync with the latest Laravel API.
```json
   "scripts":{
        "post-update-cmd":[
            "php artisan idehelper:generate"
        ]
    }
```    

Edit `app/config/app.php` and add the service provider to the ```providers``` array.

    'JonPhipps\IdeHelper\IdeHelperServiceProvider'

And finally, update Composer (if you're running the latest Composer --dev is the default):
```bash
    composer update --dev
```

## Usage

Install it as a post-update command as above and let it do its thing. Or run `php artisan idehelper:generate` from the command line in Terminal:

    php artisan idehelper:generate

It takes about 2 seconds to run on my machine.

If you get a PDO error:
```bash
[PDOException]
  SQLSTATE[HY000] [1045] Access denied for user 'root'@'localhost' (using password: NO)
```
...it's because it can't connect to the database when it instantiates the database class and you just need to supply valid credentials. This has only been tested with a MySQL database so there may be issues with other configurations.

A file named `_ide_helper.php` will be written to the root of the `app` folder of your Laravel project. You can move this file anywhere that suits you.

Every time the generator is run it will simply overwrite this file, so if you make corrections make sure the file is in source control or moved elsewhere.

The file _will_ contain errors that reflect any errors in the Laravel documentation blocks. If you're using PHPStorm, these will be especially dramatically formatted in the display. As of this writing (early March 2013) there are quite a few errors in namespaced hints.

This has not been fully tested, so issues and pull requests are welcome.

## How it works

If you're curious, it reads the Laravel config file to get a list of the aliases -- it will process all of the aliases listed there, including any you may have added. It then uses the alias to resolve the façade and return the class represented by the façade. The class is passed to both the PHP ReflectionClass and PHP Documentor's Reflection class.

These two methods of reflection get the method parameters as represented in the code as well as the documentation for the method, using both to build a more complete picture of the methods, parameters, and their defaults.

Comments, Pull Requests, and Issues are more than welcome -- I'm not at all sure I'm doing this right.

You should also check out: https://github.com/barryvdh/laravel-ide-helper -- he takes a similar approach using reflection but generates a very different file, which also works very well, along with some other options.
