<?php

require_once 'Trb/View/Helper/HtmlElement.php';

/**
 * Class Trb_View_Helper_Span
 */
class Trb_View_Helper_Span extends Trb_View_Helper_HtmlElement
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
    public function Span( $html = 'Span', $attributes = array() )
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
        $output = '<span' . $this->attributesToHtml() . '>' . $this->_html . '</span>';
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