<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcb1ca25ba995abc527a276d555862559
{
    public static $prefixLengthsPsr4 = array (
        'p' => 
        array (
            'phpspider\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'phpspider\\' => 
        array (
            0 => __DIR__ . '/..' . '/owner888/phpspider',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcb1ca25ba995abc527a276d555862559::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcb1ca25ba995abc527a276d555862559::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
