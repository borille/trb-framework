<?php

require_once 'Trb/View/Helper/HtmlElement.php';

/**
 * Class Trb_View_Helper_ButtonGroup
 */
class Trb_View_Helper_ButtonGroup extends Trb_View_Helper_HtmlElement
{

    protected $_buttons = array();

    /**
     * Helper para criar um campo ButtonGroup (html)
     * @author TRB@2014
     * @param array $attributes Array com os parametros opcionais do campo
     * @return string Campo formatado
     */
    public function ButtonGroup( $attributes = array() )
    {
        $this->setAttributes( $attributes );
        $this->setAttribute( 'class', 'btn-group' );
        $this->setAttribute( 'role', 'group' );
        return $this;
    }

    /**
     * @return string
     */
    public function render()
    {


        $output = '<div' . $this->attributesToHtml() . '>';

        if ( $this->_buttons != array() ) {
            foreach ( $this->_buttons as $button ) {
                $output .= $button;
            }
        }

        $output .= '</div>';

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
     * Adiciona um botão
     *
     * @param $button
     * @return $this
     */
    public function addButton( $button )
    {
        if ( is_a( $button, 'Trb_View_Helper_Button' ) ) {
            $this->_buttons[] = $button->render();
        } else {
            $this->_buttons[] = $button;
        }
        return $this;
    }

    /**
     * Seta os botões
     *
     * @param $buttons
     * @return $this
     */
    public function setButtons( $buttons )
    {
        $this->_buttons = $buttons;
        return $this;
    }

}