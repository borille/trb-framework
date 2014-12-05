<?php

class Trb_Controller_Plugin_Auth extends Zend_Controller_Plugin_Abstract
{

    /**
     * @var Zend_Auth
     */
    protected $_auth = null;

    /**
     * @var Zend_Acl
     */
    protected $_acl = null;

    /**
     * @var array
     */
    protected $_notLoggedRoute = array(
        'module' => 'default',
        'controller' => 'user',
        'action' => 'login'
    );

    /**
     * @var array
     */
    protected $_forbiddenRoute = array(
        'module' => 'default',
        'controller' => 'error',
        'action' => 'forbidden'
    );

    public function __construct()
    {
        $this->_auth = Zend_Auth::getInstance();
        $this->_acl = Zend_Registry::get( 'acl' );
    }

    public function preDispatch( Zend_Controller_Request_Abstract $request )
    {
        $controller = $request->getControllerName();
        $action = $request->getActionName();
        $module = $request->getModuleName();

        //verificações de segurança e redirecionamento
        if ( !$this->_auth->hasIdentity() ) {
            //usuario ainda nao fez o login
            $module = $this->_notLoggedRoute['module'];
            $controller = $this->_notLoggedRoute['controller'];
            $action = $this->_notLoggedRoute['action'];
        } else {
            //verifica se esta direcionando para module/user/login para verificar a nova permissão
            if ( !( ( $module != 'default' ) && ( $controller == 'user' ) && ( $action == 'login' ) ) ) {
                if ( !$this->_isAuthorized( $module, $controller, $action ) ) {
                    //usuario fez o login mas nao tem acesso ao controller em questao
                    $module = $this->_forbiddenRoute['module'];
                    $controller = $this->_forbiddenRoute['controller'];
                    $action = $this->_forbiddenRoute['action'];
                }
            }
        }
        //redireciona para o module/controller/action correto
        $request->setModuleName( $module );
        $request->setControllerName( $controller );
        $request->setActionName( $action );
    }

    protected function _isAuthorized( $module, $controller, $action )
    {
        $resource = $module . ':' . $controller;

        //verifica se o sistema possui o controller e se usuario tem acesso ao mesmo (controller/action)
        if ( !$this->_acl->has( $resource ) || !$this->_acl->isAllowed( $this->_auth->getIdentity(), $resource, $action ) ) {
            return false;
        }
        return true;
    }

}