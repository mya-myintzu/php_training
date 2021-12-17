<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit54e2b9c8e220b64cce36196f7098d2a1
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'SimpleXLSX' => __DIR__ . '/..' . '/shuchkin/simplexlsx/src/SimpleXLSX.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit54e2b9c8e220b64cce36196f7098d2a1::$classMap;

        }, null, ClassLoader::class);
    }
}
