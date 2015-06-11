<?php

class Trb_View_Helper_SetValue extends Zend_View_Helper_Abstract
{

    /**
     * Helper para setar o valor de um campo (html)
     * @author TRB@2014
     * @param string $id Id do Campo
     * @param string $value Valor do campo
     * @param boolean $html Se é para alterar o valor do HTML do campo
     */
    public function SetValue( $id, $value = null, $html = false )
    {
        if ( $html ) {
            $this->view->headScript()->appendScript( "$('#$id').html('$value');" );
        } else {
            $this->view->headScript()->appendScript( "$('#$id').val('$value');" );
        }
    }

}

?>