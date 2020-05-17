<?php

/**
 * @see       https://github.com/laminas/laminas-mvc-skeleton for the canonical source repository
 * @copyright https://github.com/laminas/laminas-mvc-skeleton/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas/laminas-mvc-skeleton/blob/master/LICENSE.md New BSD License
 */

declare(strict_types=1);

namespace Application;

use Application\Controller\ReferenceController;
use Laminas\Router\Http\Literal;
use Laminas\Router\Http\Segment;
use Laminas\ServiceManager\Factory\InvokableFactory;
use Doctrine\ORM\Mapping\Driver\AnnotationDriver;


return [
    'router' => [
        'routes' => [
            'home' => [
                'type'    => Literal::class,
                'options' => [
                    'route'    => '/',
                    'defaults' => [
                        'controller' => Controller\IndexController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
            'application' => [
                'type'    => Segment::class,
                'options' => [
                    'route'    => '/application[/:action]',
                    'defaults' => [
                        'controller' => Controller\IndexController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
            'dupak' => [
                'type'    => Segment::class,
                'options' => [
                    'route'    => '/dupak[/:action[/:a[/:b[/:c]]]]',
                    'defaults' => [
                        'controller' => Controller\DupakController::class,
                        'action'     => 'riwayat',
                    ],
                ],
            ],
            'pak' => [
                'type'    => Segment::class,
                'options' => [
                    'route'    => '/pak[/:action[/:a[/:b[/:c]]]]',
                    'defaults' => [
                        'controller' => Controller\PakController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
            'reference' => [
                'type'    => Segment::class,
                'options' => [
                    'route'    => '/reference[/:action[/:a[/:b[/:c]]]]',
                    'defaults' => [
                        'controller' => Controller\ReferenceController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
        ],
    ],
    'controllers' => [
        'factories' => [
          Controller\IndexController::class => InvokableFactory::class,
          Controller\DupakController::class => InvokableFactory::class,
          Controller\PakController::class => InvokableFactory::class,
          Controller\ReferenceController::class => Factory\ReferenceControllerFactory::class,
        ],
    ],
    'view_manager' => [
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map' => [
            'layout/layout'           => __DIR__ . '/../view/layout/adminlte.phtml',
            'application/index/index' => __DIR__ . '/../view/application/index/index.phtml',
            'error/404'               => __DIR__ . '/../view/error/404.phtml',
            'error/index'             => __DIR__ . '/../view/error/index.phtml',
        ],
        'template_path_stack' => [
            __DIR__ . '/../view',
        ],
    ],
    'doctrine' => [
        'driver' => [
            __NAMESPACE__ . '_driver' => [
                'class' => AnnotationDriver::class,
                'cache' => 'array',
                'paths' => [__DIR__ . '/../src/Entity']
            ],
            'orm_default' => [
                'drivers' => [
                    __NAMESPACE__ . '\Entity' => __NAMESPACE__ . '_driver'
                ]
            ]
        ]
    ] 
];
