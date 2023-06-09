<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit636c9ad98ce5e53752b7c63f39c2dd89
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

        spl_autoload_register(array('ComposerAutoloaderInit636c9ad98ce5e53752b7c63f39c2dd89', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit636c9ad98ce5e53752b7c63f39c2dd89', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit636c9ad98ce5e53752b7c63f39c2dd89::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
