<?php

require_once 'Trb/View/Helper/HtmlElement.php';

/**
 * Class Trb_View_Helper_Icon
 */
class Trb_View_Helper_Icon extends Trb_View_Helper_HtmlElement
{
    /**
     * View Helper para
     *
     * @param $name
     * @param array $attributes
     * @return string
     */
    public function icon( $icon = '', $attributes = array() )
    {
        $this->setAttributes( $attributes );
        $this->setAttribute( 'aria-hidden', 'true' );
        $this->setIcon( $icon );
        return $this;
    }

    /**
     * @return string
     */
    public function render()
    {
        $params = $this->attributesToHtml();
        return "<span $params></span>";
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
    public function setIcon( $icon )
    {
        if ( strpos( $icon, 'glyphicon-' ) === false && $icon !== '' ) {
            $icon = 'glyphicon glyphicon-' . $icon;
        } else {
            $icon = 'glyphicon ' . $icon;
        }

        if ( ( $class = $this->getAttribute( 'class' ) ) ) {
            $this->setAttribute( 'class', $icon . ' ' . $class );
        } else {
            $this->setAttribute( 'class', $icon );
        }
        return $this;
    }

}