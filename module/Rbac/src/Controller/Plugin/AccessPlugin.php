<?php
namespace Rbac\Controller\Plugin;

use Laminas\Mvc\Controller\Plugin\AbstractPlugin;

/**
 * This controller plugin is used for role-based access control (RBAC).
 */
class AccessPlugin extends AbstractPlugin
{

    public function __construct()
    {
    }

    /**
     * Checks whether the currently logged in user has the given permission.
     * @param string $permission Permission name.
     * @param array $params Optional params (used only if an assertion is associated with permission).
     */

    /**
     * @param $permission
     * @param array $params
     */
    public function __invoke($permission, $params = [])
    {
        return ;    
    }
}


