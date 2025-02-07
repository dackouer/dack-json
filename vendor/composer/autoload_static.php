<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticIniteb92f4187ef42a329aec7735ac895255
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Dackou\\' => 7,
            'Dack\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Dackou\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Dack\\' => 
        array (
            0 => __DIR__ . '/..' . '/dackou/lang/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticIniteb92f4187ef42a329aec7735ac895255::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticIniteb92f4187ef42a329aec7735ac895255::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticIniteb92f4187ef42a329aec7735ac895255::$classMap;

        }, null, ClassLoader::class);
    }
}
