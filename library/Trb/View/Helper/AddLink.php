<?php

/**
 * Retorna uma tag HTML <a href> de acordo com os parametros passados
 * @author TRB@2014
 * @version 1.0
 */
class Trb_View_Helper_AddLink extends Trb_View_Helper_IconLink
{

    /**
     * @param string $html Conteúdo da tag
     * @param array $params Parametros da URL
     * @param array $attributes Atributos HTML da tag <a>
     * @return string               Tag HTML <a>
     */
    public function AddLink( $html = 'Adicionar', $params = array(), $attributes = array() )
    {
        if ( !isset( $params['action'] ) ) {
            $params['action'] = 'add';
        }

        parent::IconLink( $html, 'plus', $params, $attributes );
        return $this;
    }

}

?>