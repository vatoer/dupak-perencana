<?php
/**
 * @link https://docs.laminas.dev/
 * 
 * 
 */

namespace Rbac;

use Rbac\Controller\IndexController;
use Rbac\Service\AuthManager;
use Laminas\Authentication\AuthenticationService;
use Laminas\Mvc\MvcEvent;
use Laminas\Session\SessionManager;
class Module
{
    const VERSION = '3.0.3-dev';

    public function getConfig()
    {
        return include __DIR__ . '/../config/module.config.php';
    }

    /**
     * @param MvcEvent $event
     */
    public function onBootstrap(MvcEvent $event)
    {
        $application = $event->getApplication();
        $serviceManager = $application->getServiceManager();

        // Get event manager.
        $eventManager = $application->getEventManager();
        $sharedEventManager = $eventManager->getSharedManager();
        // Register the event listener method.
        /*$sharedEventManager->attach(AbstractActionController::class,
            MvcEvent::EVENT_DISPATCH, [$this, 'onDispatch'], 100);*/

        //$eventManager->attach(MvcEvent::EVENT_ROUTE, array($this, 'onDispatch'));
        $eventManager->attach(MvcEvent::EVENT_ROUTE, array($this, 'onRoute'));

        //$eventManager->attach(MvcEvent::EVENT_ROUTE, array($this, 'setLayout'));

        // The following line instantiates the SessionManager and automatically
        // makes the SessionManager the 'default' one.
        // konfigurasi SessionManager ditulis di  APP_DIR/config/autoload/global.php
        //$sessionManager = $serviceManager->get(SessionManager::class);
        //$this->forgetInvalidSession($sessionManager);
    }

    protected function forgetInvalidSession(SessionManager $sessionManager)
    {
        try {
            $sessionManager->start();
            return;
        } catch (\Exception $e) {
        }
        /**
         * Session validation failed: toast it and carry on.
         */
        // @codeCoverageIgnoreStart
        session_unset();
        // @codeCoverageIgnoreEnd
    }

    /**
     * Event listener method for the 'Dispatch' event. We listen to the Dispatch
     * event to call the access filter. The access filter allows to determine if
     * the current visitor is allowed to see the page or not. If he/she
     * is not authorized and is not allowed to see the page, we redirect the user
     * to the login page.
     * @param MvcEvent $event
     */

    public function onDispatch(MvcEvent $event){
        // Get controller and action to which the HTTP request was dispatched.
        $controller = $event->getTarget();
        $controllerName = $event->getRouteMatch()->getParam('controller', null);
        $actionName = $event->getRouteMatch()->getParam('action', null);

        // Convert dash-style action name to camel-case.
        $actionName = str_replace('-', '', lcfirst(ucwords($actionName, '-')));

        // Get the instance of AuthManager service.
        $authManager = $event->getApplication()->getServiceManager()->get(AuthManager::class);

        if ($controllerName!=IndexController::class)
        {
            $result = $authManager->filterAccess($controllerName, $actionName);

            if ($result==AuthManager::AUTH_REQUIRED) {
                // Remember the URL of the page the user tried to access. We will
                // redirect the user to that URL after successful login.
                $uri = $event->getApplication()->getRequest()->getUri();
                // Make the URL relative (remove scheme, user info, host name and port)
                // to avoid redirecting to other domain by a malicious user.
                $uri->setScheme(null)
                    ->setHost(null)
                    ->setPort(null)
                    ->setUserInfo(null);
                $redirectUrl = $uri->toString();

                // Redirect the user to the "Login" page.
                return $controller->redirect()->toRoute('login', [],
                //return $controller->redirect()->toRoute('home', [],
                    ['query'=>['redirectUrl'=>$redirectUrl]]);
            }
            else if ($result==AuthManager::ACCESS_DENIED) {
                // Redirect the user to the "Not Authorized" page.
                return $controller->redirect()->toRoute('not-authorized');
            }

        }else{
            echo "sini bos";exit();
        }

    }


//http://stackoverflow.com/questions/29251978/zf2-redirect-to-login-page-on-every-page-if-user-is-not-logged-in
//bagaimana nanti untuk yang stateless ?
    public function onRoute(MvcEvent $e){

        $match = $e->getRouteMatch();
        $authService = $e->getApplication()
            ->getServiceManager()
            ->get(AuthenticationService::class);

        $response = $e->getResponse();
        //$hasIdentity  = $authService->hasIdentity();
        //$sessionContainer = $authService->getStorage();
        $sessionContainer = $e->getApplication()
            ->getServiceManager()
            ->get('ContainerNamespace');


        $hasIdentity = $authService->hasIdentity();
        $cekRoute = false;
        if( ($match->getMatchedRouteName() == 'login' ) ){
            $cekRoute = true;
        }
        if(!$hasIdentity && !$cekRoute){

            $response->setReasonPhrase('Unauthorized access attempt');
            //klo request json
            $request = $e->getRequest();
            $headers = $request->getHeaders();
            $accept = $headers->get('Accept');
            $matchJson  = $accept->match('application/json');

            $headersResponse = $response->getHeaders();
            if ( ($matchJson && $matchJson->getTypeString() !== '*/*') ) {
                // This is (almost certainly!) an api-problem
                $headersResponse->addHeaderLine('Content-Type', 'application/api-problem+json');
                $a = array(
                    //"httpStatus" => $response->getStatusCode(),
                    "title" => $response->getReasonPhrase(),
                    'data'=>array(),
                    'msg'=>'Unauthorized, Please Signin!',
                    'error'=>true
                );
                $response->setContent(json_encode($a));
                $response->setStatusCode(401); // << PENTING STATUS INI
            }else{
                $response->getHeaders()->addHeaderLine(
                    'Location',
                    $e->getRouter()->assemble(
                        array(),
                        array('name' => 'login')
                    )
                );
                $response->setStatusCode(302); // << PENTING STATUS INI
            }
            return $response;
        }
        return true;
    }


    /**
     * @param  \Laminas\Mvc\MvcEvent $e The MvcEvent instance
     * @return void
     */
    public function setLayout(MvcEvent $e)
    {
        $matches    = $e->getRouteMatch();
        $controller = $matches->getParam('controller');
        if (false === strpos($controller, __NAMESPACE__)) {
            // not a controller from this module
            return;
        }

        // Set the layout template
        $viewModel = $e->getViewModel();
        $viewModel->setTemplate('layout/rbac');
    }

}
