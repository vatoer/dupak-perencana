<?php

/**
 * Global Configuration Override
 *
 * You can use this file for overriding configuration values from modules, etc.
 * You would place values in here that are agnostic to the environment and not
 * sensitive to security.
 *
 * NOTE: In practice, this file will typically be INCLUDED in your source
 * control, so do not include passwords or other sensitive information in this
 * file.
 */

use Laminas\Cache\Storage\Adapter\Filesystem;
use Laminas\Session\Storage\SessionArrayStorage;
use Laminas\Session\Validator\RemoteAddr;
use Laminas\Session\Validator\HttpUserAgent;


return [
    'db' => [
    'driver' => 'Pdo',
    'dsn' => 'mysql:dbname=organisasi;host=localhost',
    'driver_options' => [
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''
      ],
        'adapters' => [
            'Application\Db\OrganisasiAdapter' => [
                'driver' => 'Pdo',
                'dsn'    => 'mysql:dbname=organisasi;host=127.0.0.1;charset=utf8',
            ]
        ],
    ],

    //untuk RBAC
    // Session configuration.
    'session_config' => [
        // Session cookie will expire in 12 hour.
        'cookie_lifetime' => 60 * 60 * 12,
        // Session data will be stored on server maximum for 30 days.
        'gc_maxlifetime' => 60 * 60 * 24 * 30,
    ],
    // Session manager configuration.
    'session_manager' => [
        // Session validators (used for security).
        'validators' => [
            RemoteAddr::class,
            HttpUserAgent::class,
        ]
    ],
    // Session storage configuration.
    'session_storage' => [
        'type' => SessionArrayStorage::class,
    ],
    // Cache configuration.
    'caches' => [
        'FilesystemCache' => [
            'adapter' => [
                'name'    => Filesystem::class,
                'options' => [
                    // Store cached data in this directory.
                    'cache_dir' => './data/cache',
                    // Store cached data for 12 hour.
                    'ttl' => 60*60*12
                ],
            ],
            'plugins' => [
                [
                    'name' => 'serializer',
                    'options' => [
                    ],
                ],
            ],
        ],
    ],

];