<?php

/**
 * Default Decorators Set
 *
 * This is used to style subforms. These defaults will allow decorators to be applied
 * to subforms that are within current forms.
 *
 * General usage:
 * Trb_Form_Decorator::setFormDecorator($form, 'div', 'submit', 'cancel');
 * Trb_Form_Decorator::setFormDecorator(
 *   Instance of form,
 *   Decorator Mode - 3 different options:
 *      - Trb_Form_Decorator::TABLE     (html table style)
 *      - Trb_Form_Decorator::DIV       (div style)
 *      - Trb_Form_Decorator::BOOTSTRAP (twitter bootstrap style)
 *   Name of submit button,
 *   Name of cancel button
 * );
 *
 * @category Trb
 * @package  Trb_Form
 * @version  Release: @package_version@
 */
class Trb_Form_SubForm_Decorator extends Trb_Form_Decorator
{
    /**
     * Form Element Decorator
     *
     * @staticvar array
     */
    protected static $_FormDecorator = array(
        'table' => array(
            'FormElements',
        ),
        'div' => array(
            'FormElements',
        ),
        'bootstrap' => array(
            'FormElements',
        ),
        'bootstrap_group' => array(
            'FormElements',
        )
    );
}
