<?php

class Trb_View_Helper_SetFocus extends Zend_View_Helper_Abstract
{

    /**
     * Helper para setar o foco no campo
     * @author TRB@2014
     * @param string $id Id do elemento
     */
    public function SetFocus( $id )
    {
        $this->view->headScript()->appendScript( "$('#$id').focus();" );
    }

}

?>