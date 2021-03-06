<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf109d2ba87ff7a54c939a60aedc1560b
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Deadman\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Deadman\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf109d2ba87ff7a54c939a60aedc1560b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf109d2ba87ff7a54c939a60aedc1560b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
