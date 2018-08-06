<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2fcbd125b6f592a83eda87654f04b224
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Colors\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Colors\\' => 
        array (
            0 => __DIR__ . '/..' . '/mistic100/randomcolor/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2fcbd125b6f592a83eda87654f04b224::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2fcbd125b6f592a83eda87654f04b224::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
