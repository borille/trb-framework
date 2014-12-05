<?php

/**
 * Trb_Form
 *
 * Extends Zend_Form
 * - provides model support
 * - provides buildBootstrapErrorDecorators method
 *   for adding css error classes to form if not valid
 *
 * @category Trb
 * @package  Form
 * @version  Release: @package_version@
 */
class Trb_Form extends Zend_Form
{
    /**
     * @var mixed
     */
    protected $model;

    /**
     * Return the model.
     *
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set the model.
     *
     * @param mixed $model
     *
     * @return $this
     */
    public function setModel( $model )
    {
        $this->model = $model;
        return $this;
    }

    /**
     * Proxy to {@link Zend_Form::isValid()}.
     *
     * Calls {@link self::buildBootstrapErrorDecorators()} for
     * {@link parent::isValid()} returning false.
     *
     * @param array $data
     *
     * @return boolean
     */
    public function isValid( $values )
    {
        $validCheck = parent::isValid( $values );
        if ( $validCheck === false ) {
            $this->buildBootstrapErrorDecorators();
        }
        return $validCheck;
    }

    /**
     * Build Bootstrap Error Decorators
     *
     * @return void
     * @todo   Why call {@link parent::getSubForms()} twice?
     */
    public function buildBootstrapErrorDecorators()
    {
        $subForms = $this->getSubForms();
        $styleClass = 'has-error';

        $messages = array_merge( $this->getErrors(), $this->getMessages() );
        foreach ( $messages as $key => $errors ) {
            if ( empty( $errors ) ) {
                continue;
            }
            if ( true === array_key_exists( $key, $subForms ) ) {
                $subForm = $this->getSubForm( $key ); // why not re-use the $subForms?

                foreach ( $errors as $subKey => $subErrors ) {
                    if ( empty( $subErrors ) ) {
                        continue;
                    }
                    $this->setClassToAnElement(
                        $subForm->getElement( $subKey ),
                        $styleClass
                    );
                }
                continue;
            }
            $this->setClassToAnElement( $this->getElement( $key ), $styleClass );
        }
    }

    /**
     * Set an error class into element HtmlTag decorator
     *
     * @param Zend_Form_Element $element Element to 'decorate' for the error.
     * @param string $styleClass CSS class name.
     *
     * @return void
     */
    protected function setClassToAnElement( Zend_Form_Element $element, $styleClass )
    {
        $htmlTagDecorator = method_exists( $element, 'getDecorator' )
            ? $element->getDecorator( 'HtmlTag' )
            : null;

        if ( !empty( $htmlTagDecorator ) ) {
            $class = $htmlTagDecorator->getOption( 'class' );
            $htmlTagDecorator->setOption( 'class', $class . ' ' . $styleClass );
        }
    }
}