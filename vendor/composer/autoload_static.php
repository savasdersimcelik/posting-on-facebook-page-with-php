<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5985be39b6affcd567045ccfd8ee0ebf
{
    public static $files = array (
        'c65d09b6820da036953a371c8c73a9b1' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/polyfills.php',
    );

    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Facebook\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Facebook\\' => 
        array (
            0 => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5985be39b6affcd567045ccfd8ee0ebf::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5985be39b6affcd567045ccfd8ee0ebf::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
