<?php

require_once 'Trb/View/Helper/Div.php';

/**
 * Class Trb_View_Helper_Callout
 */
class Trb_View_Helper_Callout extends Trb_View_Helper_Div
{

    /**
     * @param string $html
     * @param array $attributes
     * @return $this
     */
    public function Callout( $body = 'Callout body', $title = 'Callout title', $type = 'success', $attributes = array() )
    {
        $this->Div( "<h4>$title</h4><p>$body</p>", $attributes );
        $this->setType( $type );
        return $this;
    }

    /**
     * @param $name
     * @return $this
     */
    public function setType( $type )
    {
        if ( strpos( $type, 'bs-callout-' ) === false && $type !== '' ) {
            $type = 'bs-callout bs-callout-' . $type;
        } else {
            $type = 'bs-callout ' . $type;
        }

        $this->setAttribute( 'class', $type );
        return $this;
    }

}