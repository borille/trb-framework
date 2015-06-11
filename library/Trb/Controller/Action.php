<?php

/**
 * @see Zend_Controller_Action
 */
require_once 'Zend/Controller/Action.php';

/**
 * Classe com o CRUD básico
 *
 * @category    Trb
 * @package     Trb_Controller
 * @subpackage  Action
 * @name        Trb_Controller_Action
 * @copyright   Copyright (c) 2014
 * @author      TRB
 * @version     1.0
 */
abstract class Trb_Controller_Action extends Zend_Controller_Action
{

    /**
     * @var string
     */
    protected $_controllerClass = '';

    /**
     * @var Trb_Db_Table_Abstract
     */
    protected $_dbTable = null;

    /**
     * @var string
     */
    protected $_dbTableClass = '';

    /**
     * @var Zend_Form
     */
    protected $_form = null;

    /**
     * @var string
     */
    protected $_formClass = '';

    /**
     * @var string
     */
    protected $_modelClass = '';

    /**
     * @var string
     */
    protected $_primaryKeyParams = 'id';

    /**
     * @var string
     */
    protected $_pageParamName = 'page';

    /**
     * Inicia as configs
     */
    public function preDispatch()
    {
        //evita exceção do autoloader caso as classes não existão ao checar com class_exists
        Zend_Loader_Autoloader::getInstance()->suppressNotFoundWarnings( true );

        //seta a nome do controller
        $this->_controllerClass = str_replace( 'Controller', '', get_class( $this ) );
    }

    /**
     * @param Trb_Db_Table_Abstract $dbTable
     * @return $this
     */
    public function setDbTable( Trb_Db_Table_Abstract $dbTable )
    {
        $this->_dbTable = $dbTable;
        return $this;
    }

    /**
     * @return null|Trb_Db_Table_Abstract
     */
    public function getDbTable()
    {
        if ( !$this->_dbTable && ( null !== ( $dbTableClass = $this->getDbTableClass() ) ) ) {
            $this->_dbTable = new $dbTableClass();
        }

        return $this->_dbTable;
    }

    /**
     * @param string $dbTable
     * @return $this
     */
    public function setDbTableClass( $dbTableClass )
    {
        if ( class_exists( $dbTableClass ) ) {
            $this->_dbTableClass = $dbTableClass;
        }
        return $this;
    }

    /**
     * @return string
     */
    public function getDbTableClass()
    {
        if ( !$this->_dbTableClass ) {
            $this->setDbTableClass( 'Application_Model_DbTable_' . $this->_controllerClass );
        }
        return $this->_dbTableClass;
    }

    /**
     * @param Zend_Form $form
     * @return $this
     */
    public function setForm( Zend_Form $form )
    {
        $this->_form = $form;
        return $this;
    }

    /**
     * @return null|Zend_Form
     */
    public function getForm()
    {
        if ( !$this->_form && ( null !== ( $formClass = $this->getFormClass() ) ) ) {
            $this->_form = new $formClass();
        }
        return $this->_form;
    }

    /**
     * @param $formClass
     * @return $this
     */
    public function setFormClass( $formClass )
    {
        if ( class_exists( $formClass ) ) {
            $this->_formClass = $formClass;
        }
        return $this;
    }

    /**
     * @return string
     */
    public function getFormClass()
    {
        if ( !$this->_formClass ) {
            $this->setFormClass( 'Application_Form_' . $this->_controllerClass );
        }
        return $this->_formClass;
    }

    /**
     * @param $modelClass
     * @return $this
     */
    public function setModelClass( $modelClass )
    {
        if ( class_exists( $modelClass ) ) {
            $this->_modelClass = $modelClass;
        }
        return $this;
    }

    /**
     * @return string
     */
    public function getModelClass()
    {
        if ( !$this->_modelClass ) {
            $this->setModelClass( 'Application_Model_' . $this->_controllerClass );
        }
        return $this->_modelClass;
    }

    /**
     * Seta os parametros da URL que são PK
     * @param $primaryKeyParams
     * @return $this
     */
    public function setPrimaryKeyParams( $primaryKeyParams )
    {
        $this->_primaryKeyParams = $primaryKeyParams;
        return $this;
    }

    /**
     * Retorna os parametros da url que são PK
     * @return array|mixed
     */
    protected function getPkParams()
    {
        $params = null;

        if ( is_array( $this->_primaryKeyParams ) ) {
            $params = array();
            foreach ( $this->_primaryKeyParams as $param ) {
                $params[] = $this->getRequest()->getParam( $param );
            }
        } else {
            $params = $this->getRequest()->getParam( $this->_primaryKeyParams );
        }

        return $params;
    }

    /**
     * Lista os dados da dbTable
     * @param string $callbackFunction Nome da função que deve ser chamada
     * @param mixed|array $parameters Parametros da Função de Callback
     */
    public function indexAction( $callbackFunction = 'getSelect', $parameters = null )
    {
        $this->view->paginator = Trb_Action_Helper::paginator(
            call_user_func( array( $this->getDbTable(), $callbackFunction ), $parameters ),
            $this->getRequest()->getParam( $this->_pageParamName )
        );
    }

    /**
     * Adicionar os dados
     */
    public function addAction()
    {
        $this->view->form = $this->getForm();
        $this->view->subtitle = 'Adicionar';

        if ( $this->getRequest()->isPost() ) {
            if ( $this->view->form->isValid( $this->getRequest()->getParams() ) ) {
                if ( $this->getDbTable()->insert( $this->view->form->getValues() ) ) {
                    Trb_Action_Helper::showMessage( 'Salvo com Sucesso!' );
                } else {
                    Trb_Action_Helper::showMessage( 'Erro ao Salvar!', 'danger' );
                }
                Trb_Action_Helper::redirect( $this->getRequest()->getControllerName() );
            }
        }
    }

    /**
     * Editar os dados
     */
    public function editAction()
    {
        $form = $this->getForm();
        $this->view->subtitle = 'Editar';

        if ( $this->getRequest()->isPost() ) {
            if ( $form->isValid( $this->getRequest()->getParams() ) ) {
                if ( $this->getDbTable()->update( $form->getValues() ) ) {
                    Trb_Action_Helper::showMessage( 'Salvo com Sucesso!' );
                } else {
                    Trb_Action_Helper::showMessage( 'Erro ao Salvar!', 'danger' );
                }
                Trb_Action_Helper::redirect( $this->getRequest()->getControllerName() );
            }
        } else {
            $form->populate( $this->getDbTable()->getId( $this->getPkParams() ) );
        }

        $this->view->form = $form;
    }

    /**
     * Excluir dados
     */
    public function deleteAction()
    {
        if ( $this->getDbTable()->delete( $this->getPkParams() ) ) {
            Trb_Action_Helper::showMessage( 'Excluído com Sucesso!' );
        } else {
            Trb_Action_Helper::showMessage( 'Erro ao Excluir!', 'danger' );
        }
        Trb_Action_Helper::redirect( $this->getRequest()->getControllerName() );
    }

    /**
     * Helper para busca
     *
     * @param $searchName
     * @param null $sessionName
     * @return mixed|void
     */
    public function searchHelper( $searchName, $sessionName = null )
    {
        $busca = new Zend_Session_Namespace( ( $sessionName ) ? $sessionName : Zend_Session::getOptions( 'name' ) );

        if ( $this->getRequest()->isPost() ) {
            if ( $this->getRequest()->getParam( 'btn-action' ) == 'clear' ) {
                $busca->unsetAll();
            } else {
                $busca->$searchName = strtoupper( $this->getRequest()->getParam( 'txt-search' ) );
            }
            return Trb_Action_Helper::redirect( $this->view->controller, $this->view->action );
        }
        return $busca->$searchName;
    }

    /**
     * Define o titulo da view
     * @param $title string
     * @return $this
     */
    public function setViewTitle( $title )
    {
        $this->view->title = $title;
        return $this;
    }

}