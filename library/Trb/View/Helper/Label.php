<?php

require_once 'Trb/View/Helper/HtmlElement.php';

/**
 * Class Trb_View_Helper_Label
 */
class Trb_View_Helper_Label extends Trb_View_Helper_Span
{

    /**
     * @var string
     */
    protected $_html = '';

    /**
     * @param string $label
     * @param array $attributes
     * @return $this
     */
    public function Label( $html = 'Label', $type = 'label-default', $attributes = array() )
    {
        $this->Span( $html, $attributes );
        $this->setType( $type );
        return $this;
    }

    /**
     * @param $name
     * @return $this
     */
    public function setType( $type )
    {
        if ( strpos( $type, 'label-' ) === false && $type !== '' ) {
            $type = 'label label-' . $type;
        } else {
            $type = 'label ' . $type;
        }

        $this->setAttribute( 'class', $type );
        return $this;
    }

}