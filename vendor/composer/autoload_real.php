<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit4be662f3bf8a9d4e9f300338dc62ed3f
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

        spl_autoload_register(array('ComposerAutoloaderInit4be662f3bf8a9d4e9f300338dc62ed3f', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit4be662f3bf8a9d4e9f300338dc62ed3f', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit4be662f3bf8a9d4e9f300338dc62ed3f::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
