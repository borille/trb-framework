<?php

/**
 * Ez_Form_Decorator_BootstrapHorizontalErrors
 *
 * Wraps errors in span with class help-inline
 *
 * @category   Trb
 * @package    Trb_Form
 * @subpackage Decorator
 * @version    Release: @package_version@
 */
class Trb_Form_Decorator_BootstrapHorizontalErrors extends Zend_Form_Decorator_HtmlTag
{
    /**
     * Render content wrapped in an HTML tag
     *
     * @param string $content
     *
     * @return string
     */
    public function render($content)
    {
        $element = $this->getElement();
        $view    = $element->getView();
        if (null === $view) {
            return $content;
        }

        $errors = $element->getMessages();
        if (empty($errors)) {
            return $content;
        }

        $separator = $this->getSeparator();
        $placement = $this->getPlacement();

        $formErrorHelper = $view->getHelper('formErrors');
        $formErrorHelper->setElementStart('<div class="col-sm-offset-2"><p%s>')
            ->setElementSeparator(' | ')
            ->setElementEnd('</p></div>');

        $errors = $formErrorHelper->formErrors(
            $errors, array('class' => 'text-danger margin-left-15')
        );

        switch ($placement) {
        case 'PREPEND':
            return $errors . $separator . $content;
        case 'APPEND':
        default:
            return $content . $separator . $errors;
        }
    }
}
