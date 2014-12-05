<?php

/**
 * @package Trb_Acl
 * @version 1.0
 *
 * Interface que deve ser implementada pela classe que deseja fazer o controle de acesso utilizando a Zend_Acl
 */
interface Trb_Acl_Interface
{

    /**
     * definir os Controllers da aplica��o
     */
    public function setupControllers();

    /**
     * definir os perfis de usu�rios que o sistema possui
     */
    public function setupRoles();

    /**
     * Adicionar os controllers as regras de acesso (ACL)
     */
    public function setupResources();

    /**
     * Liberar(allow) ou negar(deny) acesso conforme perfis dos usu�rios
     * pode ser controlado acesso para as actions, individualmente
     */
    public function setupPrivileges();

    /**
     * salvar as Regras de acesso no Zend_Registry, pare serem utilizadas posteriormente
     */
    public function saveAcl();
}