<?php

/**
 * Classe que inicia as configurações da View do sistema
 *
 * @category Urbs
 * @package Urbs_Controller
 * @subpackage Urbs_Controller_Plugin
 * @author TRB
 * @copyright Urbs@2014
 */
class Trb_Controller_Plugin_ViewSetup extends Zend_Controller_Plugin_Abstract
{

    public function routeShutdown( Zend_Controller_Request_Abstract $request )
    {
        $view = Zend_Controller_Front::getInstance()->getParam( 'bootstrap' )->bootstrap( 'view' )->getResource( 'view' );

        $view->doctype( 'XHTML1_STRICT' );
        $view->setEncoding( 'ISO-8859-1' );
        $view->headMeta()->appendHttpEquiv( 'X-UA-Compatible', 'IE=edge' );
        $view->headMeta()->appendName( 'viewport', 'width=device-width, initial-scale=1.0' );
        $view->CssHelper( $view->baseUrl() );
        $view->JavascriptHelper( $view->baseUrl() );
        //----------------------------------------------------------------------
        //variaveis para a view
        $view->env = APPLICATION_ENV;
        $view->module = $request->getModuleName();
        $view->controller = $request->getControllerName();
        $view->action = $request->getActionName();
    }

}
