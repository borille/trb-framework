<?php

/**
 * Retorna uma tag HTML <a href> de acordo com os parametros passados
 * @author TRB@2014
 * @version 1.0
 */
class Trb_View_Helper_EditLink extends Trb_View_Helper_IconLink
{

    /**
     * @param string $html Conteúdo da tag
     * @param array $params Parametros da URL
     * @param array $attributes Atributos HTML da tag <a>
     * @return string               Tag HTML <a>
     */
    public function EditLink( $params = array(), $attributes = array(), $html = '' )
    {
        if ( !isset( $params['action'] ) ) {
            $params['action'] = 'edit';
        }

        parent::IconLink( $html, 'pencil', $params, $attributes );
        return $this;
    }

}

?>