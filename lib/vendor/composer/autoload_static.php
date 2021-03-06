<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3c394d9083cbfe3b646ce76c049c5728
{
    public static $prefixLengthsPsr4 = array (
        'Z' => 
        array (
            'ZxcvbnPhp\\' => 10,
        ),
        'T' => 
        array (
            'Traits\\' => 7,
        ),
        'M' => 
        array (
            'Models\\' => 7,
        ),
        'C' => 
        array (
            'Classes\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ZxcvbnPhp\\' => 
        array (
            0 => __DIR__ . '/..' . '/bjeavons/zxcvbn-php/src',
        ),
        'Traits\\' => 
        array (
            0 => __DIR__ . '/../..' . '/../traits',
        ),
        'Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/../models',
        ),
        'Classes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/../classes',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3c394d9083cbfe3b646ce76c049c5728::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3c394d9083cbfe3b646ce76c049c5728::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
