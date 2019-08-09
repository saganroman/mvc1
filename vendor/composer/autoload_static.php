<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb9ea73ee494a19c671708817068e7b03
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb9ea73ee494a19c671708817068e7b03::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb9ea73ee494a19c671708817068e7b03::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}