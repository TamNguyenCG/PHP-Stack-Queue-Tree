<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit204a93183d5e426e58300e6510165f30
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symmetry\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symmetry\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit204a93183d5e426e58300e6510165f30::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit204a93183d5e426e58300e6510165f30::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}