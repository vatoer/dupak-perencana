<?php
/**
 * Created by PhpStorm.
 * User: fathur
 * Date: 19/04/2018
 * Time: 9:26
 */
namespace Rbac;

use Laminas\Router\Http\Literal;
use Laminas\Router\Http\Segment;
use Laminas\Authentication\AuthenticationService;
use Laminas\ServiceManager\Factory\InvokableFactory;
use Doctrine\ORM\Mapping\Driver\AnnotationDriver;

use Laminas\Session\Storage\SessionArrayStorage;
use Laminas\Session\Validator\RemoteAddr;
use Laminas\Session\Validator\HttpUserAgent;


return [
    'session_config' => [
        'cookie_lifetime'     => 60*60*1, // Session cookie will expire in 1 hour.
        'gc_maxlifetime'      => 60*60*24*30, // How long to store session data on server (for 1 month).        
    ],
    'session_containers' => [
        'ContainerNamespace'
    ],
    // Session storage configuration.
    'session_storage' => [
        'type' => SessionArrayStorage::class
    ],

    'session_containers' => [
        'ContainerNamespace'
    ],
    'route_exclude_from_authentication'=>['login'],
    'service_manager'=>[
        'aliases'=>[
          // Model\BeritaRepositoryInterface::class => Model\BeritaRepository::class,

        ],
        'factories'=>[
            
            Service\AuthAdapter::class => Service\Factory\AuthAdapterFactory::class,
            Service\UserManager::class=>Service\Factory\UserManagerFactory::class,
            Service\AuthManager::class=>Service\Factory\AuthManagerFactory::class,
            AuthenticationService::class => Service\Factory\AuthenticationServiceFactory::class,
        ],
    ],
    'controllers' => [
        'factories' => [
            Controller\IndexController::class => Factory\IndexControllerFactory::class,
            Controller\UserController::class => Factory\UserControllerFactory::class,

        ],
        'aliases'=>[
            'user' => Controller\UserController::class ,
            'index'=> Controller\IndexController::class ,
        ],
    ],
    // We register module-provided controller plugins under this key.
    'controller_plugins' => [
        'factories' => [
            Controller\Plugin\AccessPlugin::class => Controller\Plugin\Factory\AccessPluginFactory::class,
            Controller\Plugin\CurrentUserPlugin::class => Controller\Plugin\Factory\CurrentUserPluginFactory::class,
        ],
        'aliases' => [
            'access' => Controller\Plugin\AccessPlugin::class,
            'currentUser' => Controller\Plugin\CurrentUserPlugin::class,
        ],
    ],
    'router' => [
        'routes' => [
            'auth' => [
                'type'    => Segment::class,
                'options' => [
                    'route'    => '/auth[/:controller[/:action]]',
                    'defaults' => [
                        'controller' => Controller\UserController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
            'heartbeat' => [
                'type'    => Literal::class,
                'options' => [
                    'route'    => '/heartbeat',
                    'defaults' => [
                        'controller' => Controller\IndexController::class,
                        'action'     => 'heartBeat',
                    ],
                ],
            ],

            'login' => [
                'type'    => Segment::class,
                'options' => [
                    'route'    => '/login[/:action]',
                    'defaults' => [
                        'controller' => Controller\IndexController::class,
                        'action'     => 'login',
                    ],
                ],
            ],
            'logout'=>[
                'type'    => Segment::class,
                'options' => [
                    'route' => '/logout',
                    'defaults' => [
                        'controller' => Controller\IndexController::class,
                        'action'     => 'logout',
                    ],
                ]
            ],
            'rbac1' => [
                'type'    => Segment::class,
                'options' => [
                    'route' => '/setting[/:controller[/:action[/:a[/:b]]]]',
                    'constraints' => [
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[a-zA-Z0-9_-]*',
                    ],
                    'defaults' => [
                        'controller' => Controller\IndexController::class,
                        'action'     => 'index',
                        'isAuthorizationRequired' => false // set true if this api Required JWT Authorization.
                    ],
                ],
                'may_terminate' => true,
                'child_routes' => [
                    'akses'=>[
                        'type'    => Segment::class,
                        'options' => [
                            'route' => '/akses[/:action[/:id]]',
                            'constraints' => [
                                'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'id'     => '[a-zA-Z0-9_-]*',
                            ],
                            'defaults' => [
                                'controller' => Controller\IndexController::class,
                                'action'     => 'index',
                                'isAuthorizationRequired' => false // set true if this api Required JWT Authorization.
                            ],
                        ]
                    ],
                ],
            ],
            'rbac' => [
                'type'    => Segment::class,
                'options' => [
                    'route' => '/rbac[/:controller[/:action[/:a[/:b]]]]',
                    'constraints' => [
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[a-zA-Z0-9_-]*',
                    ],
                    'defaults' => [
                        'controller' => Controller\IndexController::class,
                        'action'     => 'index',
                        'isAuthorizationRequired' => false // set true if this api Required JWT Authorization.
                    ],
                ],
                'may_terminate' => true,
                'child_routes' => [
                    'akses'=>[
                        'type'    => Segment::class,
                        'options' => [
                            'route' => '/akses[/:action[/:id]]',
                            'constraints' => [
                                'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'id'     => '[a-zA-Z0-9_-]*',
                            ],
                            'defaults' => [
                                'controller' => Controller\IndexController::class,
                                'action'     => 'index',
                                'isAuthorizationRequired' => false // set true if this api Required JWT Authorization.
                            ],
                        ]
                    ],
                ],
            ],
        ],
    ],

    'view_manager' => [
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map' => [
            'layout/rbac'           => __DIR__ . '/../view/layout/layout_rbac.phtml',
            'layout/login'           => __DIR__ . '/../view/layout/layout-login.phtml',
            //'application/index/index' => __DIR__ . '/../view/application/index/index.phtml',
            //'error/404'               => __DIR__ . '/../view/error/404.phtml',
            //'error/index'             => __DIR__ . '/../view/error/index.phtml',
        ],
        'template_path_stack' => [
            __DIR__ . '/../view',
        ],
    ],
    'view_helpers' => [
        'factories' =>[
            View\Helper\UserInfo::class => View\Helper\Factory\UserInfoFactory::class,
            View\Helper\DrawTable::class => InvokableFactory::class,
        ],
        'aliases'=> [
            'myuser'=> View\Helper\UserInfo::class,
            'drawTable'=> View\Helper\DrawTable::class,
        ],'invokables'=> [

        ],

    ],

    // The 'access_filter' key is used by the User module to restrict or permit
    // access to certain controller actions for unauthorized visitors.
    'access_filter' => [
    'controllers' => [
        Controller\UserController::class => [
            // Give access to "resetPassword", "message" and "setPassword" actions
            // to anyone.
            ['actions' => ['resetPassword', 'message', 'setPassword'], 'allow' => '*'],
            // Give access to "index", "add", "edit", "view", "changePassword" actions to users having the "user.manage" permission.
            ['actions' => ['index', 'add', 'edit', 'view', 'changePassword'], 'allow' => '+user.manage']
        ],
    ]
    ],
    //ini untuk doctrine blm kita pake dl
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