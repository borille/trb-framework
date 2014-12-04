<?php

require_once 'Trb/View/Helper/Span.php';

/**
 * Class Trb_View_Helper_Alert
 */
class Trb_View_Helper_Alert extends Trb_View_Helper_Div
{

    protected $_dismissible = true;

    /**
     * @param string $html
     * @param array $attributes
     * @return $this
     */
    public function Alert( $html = 'Alert', $type = 'success', $dismissible = true, $attributes = array() )
    {
        if ( $dismissible ) {
            $html = $this->getCloseButton() . $html;
        }

        $this->_dismissible = $dismissible;
        $this->Div( $html, $attributes );
        $this->setAttribute( 'role', 'alert' );
        $this->setType( $type );
        return $this;
    }

    /**
     * @param $name
     * @return $this
     */
    public function setType( $type )
    {
        if ( strpos( $type, 'alert-' ) === false && $type !== '' ) {
            $type = 'alert alert-' . $type;
        } else {
            $type = 'alert ' . $type;
        }

        if ( $this->_dismissible ) {
            $type .= ' alert-dismissible';
        }

        $this->setAttribute( 'class', $type );
        return $this;
    }

    /**
     * @return string
     */
    public function getCloseButton()
    {
        return '<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>';
    }

}