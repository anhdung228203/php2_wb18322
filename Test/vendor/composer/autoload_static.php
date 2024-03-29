<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0ea206ba30a4320bf0461d375ea6bd75
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Anhdung\\Test\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Anhdung\\Test\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit0ea206ba30a4320bf0461d375ea6bd75::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0ea206ba30a4320bf0461d375ea6bd75::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0ea206ba30a4320bf0461d375ea6bd75::$classMap;

        }, null, ClassLoader::class);
    }
}
