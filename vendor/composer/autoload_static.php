<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit739e421c396d1120abb945e6e52663b2
{
    public static $files = array (
        '1d0b95986bb0683990566780dfceace2' => __DIR__ . '/../..' . '/src/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'O' => 
        array (
            'Onbiponi\\Message\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Onbiponi\\Message\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit739e421c396d1120abb945e6e52663b2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit739e421c396d1120abb945e6e52663b2::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
