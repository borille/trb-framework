<?php

require_once 'Trb/View/Helper/HtmlElement.php';

/**
 * Class Trb_View_Helper_ListGroup
 */
class Trb_View_Helper_ListGroup extends Trb_View_Helper_HtmlElement
{

    /**
     * @var array
     */
    protected $_itens = array();

    /**
     * @var string
     */
    protected $_type = 'ul';

    /**
     * Helper para criar um ListGroup (html)
     * @author TRB@2014
     * @param array $attributes Array com os parametros opcionais
     * @return string Campo formatado
     */
    public function ListGroup( $attributes = array() )
    {
        $this->setAttributes( $attributes );
        $this->setAttribute( 'class', 'list-group' );
        return $this;
    }

    /**
     * @return string
     */
    public function render()
    {
        $output = '<' . $this->_type . $this->attributesToHtml() . '>';

        if ( $this->_itens != array() ) {
            foreach ( $this->_itens as $item ) {
                $output .= $item;
            }
        }

        $output .= '</' . $this->_type . '>';

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
     * Adiciona um item
     *
     * @param $html
     * @param string $type
     * @param string $class
     * @return $this
     */
    public function addItem( $html, $type = 'li', $class = '' )
    {
        $this->_itens[] = "<$type class='list-group-item $class'>$html</$type>";
        return $this;
    }

    /**
     * Seta os itens
     *
     * @param $itens
     * @return $this
     */
    public function setItens( $itens )
    {
        if ( is_array( $itens ) ) {
            foreach ( $itens as $item ) {
                $this->addItem( $item );
            }
        }
        return $this;
    }

}