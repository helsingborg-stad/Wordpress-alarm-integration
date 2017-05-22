<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdfa641d067885d4950d1af8e61a8c1c0
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'AcfExportManager\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'AcfExportManager\\' => 
        array (
            0 => __DIR__ . '/..' . '/helsingborg-stad/acf-export-manager/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdfa641d067885d4950d1af8e61a8c1c0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdfa641d067885d4950d1af8e61a8c1c0::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}