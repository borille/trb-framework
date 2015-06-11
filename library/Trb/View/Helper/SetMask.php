<?php

class Trb_View_Helper_SetMask extends Zend_View_Helper_Abstract
{

    /**
     * Helper para setar a mascara de um campo (html)
     * @author TRB@2014
     * @param string $id Id do Campo
     * @param string $mask Máscara do campo
     */
    public function SetMask( $id, $mask = null )
    {
        $this->view->headScript()->appendScript( "$('#$id').mask('$mask');" );
    }
}

?>