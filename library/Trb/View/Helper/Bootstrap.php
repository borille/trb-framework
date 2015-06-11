<?php

require_once 'Zend/View/Helper/HtmlElement.php';

/**
 * Class Trb_View_Helper_Bootstrap
 */
class Trb_View_Helper_Bootstrap extends Zend_View_Helper_HtmlElement
{

    public function Bootstrap()
    {
        return $this;
    }

    public function __call( $method, $args )
    {
        echo 'funcionou';
    }

}