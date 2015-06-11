<?php

require_once 'Trb/View/Helper/Div.php';

/**
 * Class Trb_View_Helper_Panel
 */
class Trb_View_Helper_Panel extends Trb_View_Helper_HtmlElement
{

    /**
     * @var string
     */
    private $_body = '';

    /**
     * @var string
     */
    private $_title = '';

    /**
     * @var string
     */
    private $_footer = '';

    /**
     * @var string
     */
    private $_html = '';

    /**
     * @param string $body
     * @param string $title
     * @param string $footer
     * @param string $type
     * @param array $attributes
     * @return $this
     */
    public function Panel( $body = '', $title = '', $footer = '', $type = 'primary', $attributes = array() )
    {
        $this->setBody( $body );
        $this->setTitle( $title );
        $this->setFooter( $footer );
        $this->setType( $type );
        return $this;
    }

    /**
     * @return string
     */
    public function render()
    {
        $html = '';

        if ( $this->_title ) {
            $html .= '<div class="panel-heading"><h3 class="panel-title">' . $this->_title . '</h3></div>';
        }

        if ( $this->_body ) {
            $html .= '<div class="panel-body">' . $this->_body . '</div>';
        }

        if ( $this->_html ) {
            $html .= $this->_html;
        }

        if ( $this->_footer ) {
            $html .= '<div class="panel-footer">' . $this->_footer . '</div>';
        }

        $output = '<div' . $this->attributesToHtml() . '>' . $html . '</div>';
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
     * @param $name
     * @return $this
     */
    public function setType( $type )
    {
        if ( strpos( $type, 'panel-' ) === false && $type !== '' ) {
            $type = 'panel panel-' . $type;
        } else {
            $type = 'panel ' . $type;
        }

        $this->setAttribute( 'class', $type );
        return $this;
    }

    /**
     * @param string $body
     * @return $this
     */
    public function setBody( $body )
    {
        $this->_body = $body;
        return $this;
    }

    /**
     * @param string $footer
     * @return $this
     */
    public function setFooter( $footer )
    {
        $this->_footer = $footer;
        return $this;
    }

    /**
     * @param string $title
     * @return $this
     */
    public function setTitle( $title )
    {
        $this->_title = $title;
        return $this;
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