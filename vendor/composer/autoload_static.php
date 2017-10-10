<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit50f0e8a95e7148ca3350173d94c36131
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Core\\' => 5,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Core',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/App',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit50f0e8a95e7148ca3350173d94c36131::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit50f0e8a95e7148ca3350173d94c36131::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
