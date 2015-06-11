<?php

/**
 * Retorna uma tag HTML <a href> de acordo com os parametros passados
 * @author TRB@2014
 * @version 1.0
 */
class Trb_View_Helper_IconLink extends Trb_View_Helper_Link
{

    /**
     * @param string $html Conteúdo da tag
     * @param string $icon icon
     * @param array $params Parametros da URL
     * @param array $attributes Atributos HTML da tag <a>
     * @return string               Tag HTML <a>
     */
    public function IconLink( $html = 'Link', $icon = '', $params = array(), $attributes = array() )
    {
        $request = Zend_Controller_Front::getInstance()->getRequest();

        if ( !isset( $params['module'] ) ) {
            $params['module'] = $request->getModuleName();
        }

        if ( !isset( $params['controller'] ) ) {
            $params['controller'] = $request->getControllerName();
        }

        if ( !isset( $params['action'] ) ) {
            $params['action'] = $request->getActionName();
        }

        $this->setAttributes( $attributes );
        $this->setParams( $params );
        $this->setHtml( $html );
        $this->setIcon( $icon );

        return $this;
    }

    public function setIcon( $icon )
    {
        $html = $this->getHtml();
        $this->setHtml( $this->view->Icon( $icon ) . ( ( $html ) ? ' ' . $html : '' ) );
        return $this;
    }

}

?>