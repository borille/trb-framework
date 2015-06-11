<?php

/**
 * Retorna uma tag HTML <a href> de acordo com os parametros passados
 * @author TRB@2014
 * @version 1.0
 */
class Trb_View_Helper_ConfirmDeleteLink extends Trb_View_Helper_Link
{

    /**
     * @param string $html Conteúdo da tag
     * @param array $params Parametros da URL
     * @param array $attributes Atributos HTML da tag <a>
     * @return string               Tag HTML <a>
     */
    public function ConfirmDeleteLink( $params = array(), $attributes = array(), $html = '' )
    {
        $request = Zend_Controller_Front::getInstance()->getRequest();

        if ( !isset( $params['module'] ) ) {
            $params['module'] = $request->getModuleName();
        }

        if ( !isset( $params['controller'] ) ) {
            $params['controller'] = $request->getControllerName();
        }

        if ( !isset( $params['action'] ) ) {
            $params['action'] = 'delete';
        }

        $this->setUrl( '#' );
        $this->setHtml( $this->view->Icon( 'trash' ) );
        $this->setAttribute( 'onclick', 'confirmDeleteBs(\'' . $this->view->Url( array_merge( $params ), null, TRUE ) . '\')' );
        return $this;
    }

}

?>