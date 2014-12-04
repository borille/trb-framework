<?php

require_once 'Trb/View/Helper/HtmlElement.php';

/**
 * Class Trb_View_Helper_Div
 */
class Trb_View_Helper_Div extends Trb_View_Helper_HtmlElement
{

    /**
     * @var string
     */
    protected $_html = '';

    /**
     * @param string $html
     * @param array $attributes
     * @return $this
     */
    public function Div( $html = 'Div', $attributes = array() )
    {
        $this->setHtml( $html );
        $this->setAttributes( $attributes );
        return $this;
    }

    /**
     * @return string
     */
    public function render()
    {
        $output = '<div' . $this->attributesToHtml() . '>' . $this->_html . '</div>';
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
     * @param string $html
     * @return $this
     */
    public function setHtml( $html )
    {
        $this->_html = $html;
        return $this;
    }

}