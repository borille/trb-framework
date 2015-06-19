<?php

/**
 * Classe que inicia as configurações da View do sistema
 *
 * @category Trb
 * @package Trb_Controller
 * @subpackage Trb_Controller_Plugin
 * @author TRB
 * @copyright Trb@2015
 */
class Trb_Controller_Plugin_ViewSetup extends Zend_Controller_Plugin_Abstract
{

    public function routeShutdown( Zend_Controller_Request_Abstract $request )
    {
        $view = Zend_Controller_Front::getInstance()->getParam( 'bootstrap' )->bootstrap( 'view' )->getResource( 'view' );

        $view->doctype( 'XHTML1_STRICT' );
        $view->setEncoding( 'UTF-8' );
        $view->headMeta()->appendHttpEquiv('Content-Type', 'text/html; charset=UTF-8')
            ->appendHttpEquiv( 'X-UA-Compatible', 'IE=edge' )
            ->appendName( 'viewport', 'width=device-width, initial-scale=1.0' );
        $view->CssHelper( $view->baseUrl() );
        $view->JavascriptHelper( $view->baseUrl() );
        //----------------------------------------------------------------------
        //variaveis para a view
        $view->module = $request->getModuleName();
        $view->controller = $request->getControllerName();
        $view->action = $request->getActionName();
    }

}
