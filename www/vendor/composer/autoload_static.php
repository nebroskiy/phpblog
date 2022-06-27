<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita8780a905dbbf8ed18aa4e11259a5708
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'TplHandler\\' => 11,
        ),
        'R' => 
        array (
            'Routing\\' => 8,
        ),
        'E' => 
        array (
            'Exceptions\\' => 11,
        ),
        'D' => 
        array (
            'DataTopicDisplay\\' => 17,
            'DataInsert\\' => 11,
            'DataDetailTopic\\' => 16,
            'DataConnection\\' => 15,
        ),
        'C' => 
        array (
            'CreateTopic\\' => 12,
            'ControllerManager\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'TplHandler\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Model/TemplateHandler',
        ),
        'Routing\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Model/Routing',
        ),
        'Exceptions\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Model/Exceptions',
        ),
        'DataTopicDisplay\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Model/DataTopicDisplay',
        ),
        'DataInsert\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Model/DataInsert',
        ),
        'DataDetailTopic\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Model/DataDetailTopic',
        ),
        'DataConnection\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Model/DataConnection',
        ),
        'CreateTopic\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Model/CreateTopic',
        ),
        'ControllerManager\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Model/ControllerManager',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita8780a905dbbf8ed18aa4e11259a5708::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita8780a905dbbf8ed18aa4e11259a5708::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita8780a905dbbf8ed18aa4e11259a5708::$classMap;

        }, null, ClassLoader::class);
    }
}
