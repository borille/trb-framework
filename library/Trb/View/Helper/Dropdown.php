<?php

require_once 'Trb/View/Helper/HtmlElement.php';

/**
 * Class Trb_View_Helper_Dropdown
 */
class Trb_View_Helper_Dropdown extends Trb_View_Helper_HtmlElement
{

    /**
     * @var array
     */
    protected $_itens = array();

    /**
     * @var string
     */
    protected $_label = '';

    protected $_alignment = '';

    /**
     * Helper para criar um campo Button (html)
     * @author TRB@2014
     * @param array $attributes Array com os parametros opcionais do campo
     * @return string Campo formatado
     */
    public function Dropdown( $label, $attributes = array() )
    {
        $attributes['class'] = 'btn btn-default dropdown-toggle';
        $attributes['data-toggle'] = 'dropdown';
        $attributes['aria-expanded'] = 'true';
        $this->setAttributes( $attributes );
        $this->setLabel( $label );
        return $this;
    }

    /**
     * @return string
     */
    public function render()
    {
        $output = '<div class="dropdown">';
        $output .= '<button type="button"' . $this->attributesToHtml() . '>' . $this->_label . ' <span class="caret"></span></button>';

        if ( $this->_itens != array() ) {
            $output .= '<ul class="dropdown-menu' . $this->_alignment . '" role="menu" aria-labelledby="' . $this->getAttribute( 'id' ) . '">';
            foreach ( $this->_itens as $item ) {
                $output .= $item;
            }
            $output .= '</ul>';
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
     * @param $label
     * @return $this
     */
    public function setLabel( $label )
    {
        $this->_label = $label;
        return $this;
    }

    /**
     * Adiciona um item ao dropdown
     *
     * @param $item
     * @return $this
     */
    public function addItem( $item )
    {
        $this->_itens[] = $item;
        return $this;
    }

    /**
     * Adiciona um divisor
     *
     * @return $this
     */
    public function addDivider()
    {
        $this->_itens[] = '<li role="presentation" class="divider"></li>';
        return $this;
    }

    /**
     * Adicionar um header
     *
     * @param $header
     * @return $this
     */
    public function addHeader( $header )
    {
        $this->_itens[] = '<li role="presentation" class="dropdown-header">' . $header . '</li>';
        return $this;
    }

    /**
     * Adicionar um elemento <a>
     *
     * @param $anchor
     * @param bool $disabled
     * @return $this
     */
    public function addAnchor( $anchor, $disabled = false )
    {
        if ( $disabled ) {
            $this->_itens[] = '<li role="presentation" class="disabled">' . $anchor . '</li>';
        } else {
            $this->_itens[] = '<li role="presentation">' . $anchor . '</li>';
        }
        return $this;
    }

    /**
     * Alinha o menu a direita do button
     *
     * @return $this
     */
    public function setAlignRight()
    {
        $this->_alignment = ' dropdown-menu-right';
        return $this;
    }

}