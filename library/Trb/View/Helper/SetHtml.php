<?php

class Trb_View_Helper_SetHtml extends Zend_View_Helper_Abstract
{

    /**
     * Helper para setar o valor de um campo (html)
     * @author TRB@2014
     * @param string $id Id do Campo
     * @param $html $value Valor do campo
     */
    public function SetHtml( $id, $html = null )
    {
        $this->view->headScript()->appendScript( "$('#$id').html('$html');" );
    }

}

?>