<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit030b7763a087a2c23eb28a2d85ad01fa
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'LINE\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'LINE\\' => 
        array (
            0 => __DIR__ . '/..' . '/linecorp/line-bot-sdk/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit030b7763a087a2c23eb28a2d85ad01fa::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit030b7763a087a2c23eb28a2d85ad01fa::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
