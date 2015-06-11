<?php

/**
 * Class Trb_View_Helper_FlashMessenger
 */
class Trb_View_Helper_FlashMessenger extends Zend_View_Helper_Abstract
{

    public function FlashMessenger()
    {
        $flashMessenger = Zend_Controller_Action_HelperBroker::getStaticHelper( 'FlashMessenger' );
        $output = '';

        if ( !empty( $flashMessenger ) ) {

            if ( $flashMessenger->setNamespace( 'success' )->hasMessages() ) {
                foreach ( $flashMessenger->getMessages() as $msg ) {
                    $output .= $this->view->Alert( $msg, 'success' );
                }
            }

            if ( $flashMessenger->setNamespace( 'danger' )->hasMessages() ) {
                foreach ( $flashMessenger->getMessages() as $msg ) {
                    $output .= $this->view->Alert( $msg, 'danger' );
                }
            }

            if ( $flashMessenger->setNamespace( 'warning' )->hasMessages() ) {
                foreach ( $flashMessenger->getMessages() as $msg ) {
                    $output .= $this->view->Alert( $msg, 'warning' );
                }
            }

            if ( $flashMessenger->setNamespace( 'info' )->hasMessages() ) {
                foreach ( $flashMessenger->getMessages() as $msg ) {
                    $output .= $this->view->Alert( $msg, 'info' );
                }
            }
        }

        return $output;
    }

}

?>
