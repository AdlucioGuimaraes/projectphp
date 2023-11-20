<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit391be0ea3dfa47cd03f136912acdbefb
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
        'L' => 
        array (
            'League\\Plates\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
        'League\\Plates\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/plates/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit391be0ea3dfa47cd03f136912acdbefb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit391be0ea3dfa47cd03f136912acdbefb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit391be0ea3dfa47cd03f136912acdbefb::$classMap;

        }, null, ClassLoader::class);
    }
}
