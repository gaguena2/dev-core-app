<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitca212390f17dcd9ed378fac2b18ed5be
{
    public static $files = array (
        'e8aa6e4b5a1db2f56ae794f1505391a8' => __DIR__ . '/..' . '/amphp/amp/lib/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'A' => 
        array (
            'AppCore\\' => 8,
            'Amp\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'AppCore\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Amp\\' => 
        array (
            0 => __DIR__ . '/..' . '/amphp/amp/lib',
        ),
    );

    public static $prefixesPsr0 = array (
        'K' => 
        array (
            'Kafka\\' => 
            array (
                0 => __DIR__ . '/..' . '/nmred/kafka-php/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitca212390f17dcd9ed378fac2b18ed5be::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitca212390f17dcd9ed378fac2b18ed5be::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitca212390f17dcd9ed378fac2b18ed5be::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitca212390f17dcd9ed378fac2b18ed5be::$classMap;

        }, null, ClassLoader::class);
    }
}
