<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit837c0447e439eebaff8792a8515eb2f8
{
    public static $files = array (
        'd0a3c70c48648e79ee179821ff47ac30' => __DIR__ . '/../..' . '/src/config.php',
        '48483d6c44b015b6d6d681c009d084a7' => __DIR__ . '/../..' . '/src/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'DiDom\\' => 6,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'DiDom\\' => 
        array (
            0 => __DIR__ . '/..' . '/imangazaliev/didom/src/DiDom',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit837c0447e439eebaff8792a8515eb2f8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit837c0447e439eebaff8792a8515eb2f8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit837c0447e439eebaff8792a8515eb2f8::$classMap;

        }, null, ClassLoader::class);
    }
}
