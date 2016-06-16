<?php

// autoload_real.php @generated by Composer

<<<<<<< HEAD
class ComposerAutoloaderInit61548fa31d5bc76015ea3f2b162f9651
=======
class ComposerAutoloaderInit63f7dd5a8862085c85b6ee1913428f74
>>>>>>> 088104e6c7e52009ea9984ba698e2d110fdde1ab
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

<<<<<<< HEAD
        spl_autoload_register(array('ComposerAutoloaderInit61548fa31d5bc76015ea3f2b162f9651', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader();
        spl_autoload_unregister(array('ComposerAutoloaderInit61548fa31d5bc76015ea3f2b162f9651', 'loadClassLoader'));
=======
        spl_autoload_register(array('ComposerAutoloaderInit63f7dd5a8862085c85b6ee1913428f74', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader();
        spl_autoload_unregister(array('ComposerAutoloaderInit63f7dd5a8862085c85b6ee1913428f74', 'loadClassLoader'));
>>>>>>> 088104e6c7e52009ea9984ba698e2d110fdde1ab

        $useStaticLoader = PHP_VERSION_ID >= 50600 && !defined('HHVM_VERSION');
        if ($useStaticLoader) {
            require_once __DIR__ . '/autoload_static.php';

<<<<<<< HEAD
            call_user_func(\Composer\Autoload\ComposerStaticInit61548fa31d5bc76015ea3f2b162f9651::getInitializer($loader));
=======
            call_user_func(\Composer\Autoload\ComposerStaticInit63f7dd5a8862085c85b6ee1913428f74::getInitializer($loader));
>>>>>>> 088104e6c7e52009ea9984ba698e2d110fdde1ab
        } else {
            $map = require __DIR__ . '/autoload_namespaces.php';
            foreach ($map as $namespace => $path) {
                $loader->set($namespace, $path);
            }

            $map = require __DIR__ . '/autoload_psr4.php';
            foreach ($map as $namespace => $path) {
                $loader->setPsr4($namespace, $path);
            }

            $classMap = require __DIR__ . '/autoload_classmap.php';
            if ($classMap) {
                $loader->addClassMap($classMap);
            }
        }

        $loader->register(true);

        if ($useStaticLoader) {
<<<<<<< HEAD
            $includeFiles = Composer\Autoload\ComposerStaticInit61548fa31d5bc76015ea3f2b162f9651::$files;
=======
            $includeFiles = Composer\Autoload\ComposerStaticInit63f7dd5a8862085c85b6ee1913428f74::$files;
>>>>>>> 088104e6c7e52009ea9984ba698e2d110fdde1ab
        } else {
            $includeFiles = require __DIR__ . '/autoload_files.php';
        }
        foreach ($includeFiles as $fileIdentifier => $file) {
<<<<<<< HEAD
            composerRequire61548fa31d5bc76015ea3f2b162f9651($fileIdentifier, $file);
=======
            composerRequire63f7dd5a8862085c85b6ee1913428f74($fileIdentifier, $file);
>>>>>>> 088104e6c7e52009ea9984ba698e2d110fdde1ab
        }

        return $loader;
    }
}

<<<<<<< HEAD
function composerRequire61548fa31d5bc76015ea3f2b162f9651($fileIdentifier, $file)
=======
function composerRequire63f7dd5a8862085c85b6ee1913428f74($fileIdentifier, $file)
>>>>>>> 088104e6c7e52009ea9984ba698e2d110fdde1ab
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        require $file;

        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;
    }
}
