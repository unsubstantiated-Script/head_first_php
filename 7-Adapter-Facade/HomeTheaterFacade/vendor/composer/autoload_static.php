<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit93af51f00360ed8833a85dfbde795807
{
    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/../..' . '/',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->fallbackDirsPsr4 = ComposerStaticInit93af51f00360ed8833a85dfbde795807::$fallbackDirsPsr4;
            $loader->classMap = ComposerStaticInit93af51f00360ed8833a85dfbde795807::$classMap;

        }, null, ClassLoader::class);
    }
}
