<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite5033e6cc060650a9ab4905c3fc6e496
{
    public static $fallbackDirsPsr0 = array (
        0 => __DIR__ . '/../..' . '/src',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->fallbackDirsPsr0 = ComposerStaticInite5033e6cc060650a9ab4905c3fc6e496::$fallbackDirsPsr0;

        }, null, ClassLoader::class);
    }
}
