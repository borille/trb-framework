<?php

class Trb_View_Helper_InputText extends Trb_View_Helper_Input
{

    /**
     * Helper para criar um campo input Text (html)
     * @author TRB@2014
     * @param string $name Nome e Id do Campo
     * @param string $value Valor do campo
     * @param array $attributes Array com os parametros opcionais do campo
     * @return string Campo formatado
     */
    public function InputText( $name, $value = null, $attributes = array() )
    {
        parent::input( 'text', $name, $attributes );
        $this->setValue( $value );
        return $this;
    }

    /**
     * @param $mask
     * @return $this
     */
    public function setMask( $mask )
    {
        if ( !$this->getAttribute( 'id' ) ) {
            $this->setId( $this->getAttribute( 'name' ) );
        }

        $this->view->setMask( $this->getAttribute( 'id' ), $mask );
        return $this;
    }

}