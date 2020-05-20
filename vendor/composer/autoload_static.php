<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit394f9015a7602cf439aeeaec8bf323b2
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stripe\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/stripe/stripe-php/lib',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit394f9015a7602cf439aeeaec8bf323b2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit394f9015a7602cf439aeeaec8bf323b2::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
