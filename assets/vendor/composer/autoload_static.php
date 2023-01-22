<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3feecd9a97a0226f53d5d2fec7eb0ccb
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

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3feecd9a97a0226f53d5d2fec7eb0ccb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3feecd9a97a0226f53d5d2fec7eb0ccb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3feecd9a97a0226f53d5d2fec7eb0ccb::$classMap;

        }, null, ClassLoader::class);
    }
}
