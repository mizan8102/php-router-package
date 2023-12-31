<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit954584f953d890ce72e61f5aaedd34fa
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

        spl_autoload_register(array('ComposerAutoloaderInit954584f953d890ce72e61f5aaedd34fa', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit954584f953d890ce72e61f5aaedd34fa', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit954584f953d890ce72e61f5aaedd34fa::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
