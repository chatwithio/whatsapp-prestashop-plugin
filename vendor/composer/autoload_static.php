<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4d3d68027d9a78c245f0d8a0ccd6e543
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PrestaShop\\Module\\TochatWhatsapp\\' => 33,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PrestaShop\\Module\\TochatWhatsapp\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'PrestaShop\\Module\\TochatWhatsapp\\Api' => __DIR__ . '/../..' . '/src/Api.php',
        'Tochatwhatsapp' => __DIR__ . '/../..' . '/tochatwhatsapp.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4d3d68027d9a78c245f0d8a0ccd6e543::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4d3d68027d9a78c245f0d8a0ccd6e543::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4d3d68027d9a78c245f0d8a0ccd6e543::$classMap;

        }, null, ClassLoader::class);
    }
}