<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc3e8cd66130b0b1c9d2f2ebed1071664
{
    public static $prefixesPsr0 = array (
        'B' => 
        array (
            'Bramus' => 
            array (
                0 => __DIR__ . '/..' . '/bramus/router/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInitc3e8cd66130b0b1c9d2f2ebed1071664::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitc3e8cd66130b0b1c9d2f2ebed1071664::$classMap;

        }, null, ClassLoader::class);
    }
}
