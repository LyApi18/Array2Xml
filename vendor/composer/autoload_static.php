<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7380564f5df2625ca246202dbcf41fef
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Whoops\\' => 7,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
            'Predis\\' => 7,
        ),
        'M' => 
        array (
            'Medoo\\' => 6,
        ),
        'L' => 
        array (
            'LyApi\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Whoops\\' => 
        array (
            0 => __DIR__ . '/..' . '/filp/whoops/src/Whoops',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Predis\\' => 
        array (
            0 => __DIR__ . '/..' . '/predis/predis/src',
        ),
        'Medoo\\' => 
        array (
            0 => __DIR__ . '/..' . '/catfan/medoo/src',
        ),
        'LyApi\\' => 
        array (
            0 => __DIR__ . '/..' . '/lyapi/lyapi-core/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'V' => 
        array (
            'Verdant\\' => 
            array (
                0 => __DIR__ . '/..' . '/verdant/xml2array',
            ),
        ),
        'U' => 
        array (
            'Unirest\\' => 
            array (
                0 => __DIR__ . '/..' . '/mashape/unirest-php/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7380564f5df2625ca246202dbcf41fef::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7380564f5df2625ca246202dbcf41fef::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit7380564f5df2625ca246202dbcf41fef::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}