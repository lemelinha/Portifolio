<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9d2e3cb9e6034da185ff40b504b02d78
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'Lemelinha\\Portifolio\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Lemelinha\\Portifolio\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9d2e3cb9e6034da185ff40b504b02d78::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9d2e3cb9e6034da185ff40b504b02d78::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9d2e3cb9e6034da185ff40b504b02d78::$classMap;

        }, null, ClassLoader::class);
    }
}
