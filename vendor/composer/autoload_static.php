<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit125b8cdb424c35156711b797942b6503
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Captcha\\Classes\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Captcha\\Classes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit125b8cdb424c35156711b797942b6503::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit125b8cdb424c35156711b797942b6503::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
