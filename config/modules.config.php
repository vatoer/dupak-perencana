<?php

/**
 * @see       https://github.com/laminas/laminas-mvc-skeleton for the canonical source repository
 * @copyright https://github.com/laminas/laminas-mvc-skeleton/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas/laminas-mvc-skeleton/blob/master/LICENSE.md New BSD License
 */

/**
 * List of enabled modules for this application.
 *
 * This should be an array of module namespaces used in the application.
 */
return [
    'Laminas\Mvc\Plugin\Identity',
    'Laminas\I18n',
    'Laminas\Mvc\Plugin\FlashMessenger',
    'Laminas\Session',
    'Laminas\Mail',
    'Laminas\Di',
    'Laminas\Db',
    'Laminas\Cache',
    'Laminas\Form',
    'Laminas\InputFilter',
    'Laminas\Filter',
    'Laminas\Hydrator',
    'Laminas\Paginator',
    'Laminas\Router',
    'Laminas\Validator',
    'Laminas\DeveloperTools',
    'DoctrineModule',
    'DoctrineORMModule',
    'Application',
    'Rbac',
    'SanSessionToolbar', // put at the end of modules list!
];
