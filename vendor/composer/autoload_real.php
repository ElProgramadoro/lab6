<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitcadcbd8e1c1b8bcbfb0b6ff7b5456404
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInitcadcbd8e1c1b8bcbfb0b6ff7b5456404', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitcadcbd8e1c1b8bcbfb0b6ff7b5456404', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitcadcbd8e1c1b8bcbfb0b6ff7b5456404::getInitializer($loader));

        $loader->register(true);

        $includeFiles = \Composer\Autoload\ComposerStaticInitcadcbd8e1c1b8bcbfb0b6ff7b5456404::$files;
        foreach ($includeFiles as $fileIdentifier => $file) {
            composerRequirecadcbd8e1c1b8bcbfb0b6ff7b5456404($fileIdentifier, $file);
        }

        return $loader;
    }
}

/**
 * @param string $fileIdentifier
 * @param string $file
 * @return void
 */
function composerRequirecadcbd8e1c1b8bcbfb0b6ff7b5456404($fileIdentifier, $file)
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;

        require $file;
    }
}
