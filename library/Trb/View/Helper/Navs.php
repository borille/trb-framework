<?php

require_once 'Trb/View/Helper/HtmlElement.php';

/**
 * Class Trb_View_Helper_Navs
 */
class Trb_View_Helper_Navs extends Trb_View_Helper_HtmlElement
{
    /**
     * @var array
     */
    protected $_itens = array();

    /**
     * @var string
     */
    protected $_class = 'nav-tabs';

    /**
     * @var bool
     */
    protected $_reset = false;

    /**
     * View Helper para criar um nav
     */
    public function Navs( $itens )
    {
        $this->setItens( $itens );
        return $this;
    }

    /**
     * @return string
     */
    public function render()
    {
        $request = Zend_Controller_Front::getInstance()->getRequest();
        $module = $currentModule = $request->getModuleName();
        $controller = $currentController = $request->getControllerName();
        $action = $currentAction = $request->getActionName();
        $reset = false;

        $output = '<ul class="nav ' . $this->_class . '">';

        foreach ( $this->_itens as $key => $value ) {
            if ( is_array( $value ) ) {
                $url = Zend_View_Helper_Url::url( $value, null, $this->_reset );
                $module = ( isset( $value['module'] ) ) ? $value['module'] : $currentModule;
                $controller = ( isset( $value['controller'] ) ) ? $value['controller'] : $currentController;
                $action = ( isset( $value['action'] ) ) ? $value['action'] : $currentAction;
            } else {
                if ( is_string( $value ) ) {
                    if ( strpos( $value, '/' ) !== false ) {
                        $url = $value;
                    } else {
                        $action = $value;
                        $url = Zend_View_Helper_Url::url( array( 'module' => $currentModule, 'controller' => $currentController, 'action' => $action ), null, $this->_reset );
                    }
                } else {
                    throw new Exception( 'Tipo de Url não suportada!' );
                }
            }

            if ( $currentModule === $module && $currentController === $controller && $currentAction === $action ) {
                $output .= '<li role="presentation" class="active">';
            } else {
                $output .= '<li role="presentation">';
            }

            $output .= "<a href=\"$url\">$key</a>";
            $output .= '</li>';
        }

        $output .= '</ul>';

        return $output;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->render();
    }

    /**
     * Adiciona um item ao nav
     *
     * @param $label
     * @param $url
     * @return $this
     */
    public function addItem( $label, $url )
    {
        $this->_itens[$label] = $url;
        return $this;
    }

    /**
     * Seta os itens do nav
     *
     * @param $itens
     * @return $this
     */
    public function setItens( $itens )
    {
        if ( is_array( $itens ) ) {
            $this->_itens = $itens;
        }
        return $this;
    }

    /**
     * Seta estilo do nav
     *
     * @param $class nav-tabs|nav-pills|nav-pills nav-stacked
     * @return $this
     */
    public function setClass( $class )
    {
        $this->_class = $class;
        return $this;
    }

    /**
     * Para resetar os parametros da URL
     *
     * @param $reset
     * @return $this
     */
    public function setReset( $reset )
    {
        $this->_reset = $reset;
        return $this;
    }

}

?>