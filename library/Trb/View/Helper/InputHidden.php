<?php

class Trb_View_Helper_InputHidden extends Trb_View_Helper_Input
{

    /**
     * Helper para criar um campo input Hidden (html)
     * @author TRB@2014
     * @param string $name Nome e Id do Campo
     * @param string $value Valor do campo
     * @param array $attributes Array com os parametros opcionais do campo
     * @return string Campo formatado
     */
    public function InputHidden( $name, $value = null, $attributes = array() )
    {
        parent::input( 'hidden', $name, $attributes );
        $this->setValue( $value );
        return $this;
    }

}