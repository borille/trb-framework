<?php

/**
 * Classe para iniciar o cache
 * para uso dentro do sistema
 *
 * @category Trb
 * @package Trb_Application
 * @subpackage Trb_Application_Resource
 * @author TRB
 * @copyright Urbs@2015
 */
class Trb_Application_Resource_Cache extends Zend_Application_Resource_ResourceAbstract
{

	public function init()
	{
		$options = $this->getOptions();

		$cache = Zend_Cache::factory( $options['frontEnd'], $options['backEnd'], $options['frontEndOptions'], $options['backEndOptions'] );

		//salva no registro para ser utilizado posteriormente
		Zend_Registry::set( 'cache', $cache );
		return $cache;
	}

}