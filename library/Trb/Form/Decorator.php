<?php

/**
 * Default Decorators Set
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
class Trb_Form_Decorator
{
	/**
	 * Constants Definition for Decorator
	 */
	const TABLE = 'table';

	const DIV = 'div';

	const BOOTSTRAP = 'bootstrap';

	const BOOTSTRAP_HORIZONTAL = 'bootstrap_horizontal';

	const BOOTSTRAP_GROUP = 'bootstrap_group';

	const BOOTSTRAP_INLINE = 'bootstrap_inline';

	/**
	 * Element Decorator
	 *
	 * @staticvar array
	 */
	protected static $_ElementDecorator = array(
		'table' => array(
			'ViewHelper',
			array(
				'Description',
				array(
					'tag' => ''
				)
			),
			'Errors',
			array(
				array(
					'data' => 'HtmlTag'
				),
				array(
					'tag' => 'td'
				)
			),
			array(
				'Label',
				array(
					'tag' => 'td'
				)
			),
			array(
				array(
					'row' => 'HtmlTag'
				),
				array(
					'tag' => 'tr'
				)
			)
		),
		'div' => array(
			array(
				'ViewHelper'
			),
			array(
				'Description',
				array(
					'tag' => 'span',
					'class' => 'hint'
				)
			),
			array(
				'Errors'
			),
			array(
				'Label'
			),
			array(
				'HtmlTag',
				array(
					'tag' => 'div'
				)
			)
		),
		'bootstrap' => array(
			array(
				'ViewHelper'
			),
			array(
				'BootstrapErrors'
			),
			array(
				'Description',
				array(
					'tag' => 'p',
					'class' => 'help-block'
				)
			),
			array(
				'Label'
			),
			array(
				'HtmlTag',
				array(
					'tag' => 'div',
					'class' => 'form-group'
				)
			)
		),
		'bootstrap_horizontal' => array(
			array(
				'ViewHelper'
			),
			array(
				'BootstrapErrors'
			),
			array(
				'Description',
				array(
					'tag' => 'p',
					'class' => 'help-block'
				)
			),
			array(
				'BootstrapTag',
				array(
					'class' => 'col-sm-10'
				)
			),
			array(
				'Label',
				array(
					'class' => 'control-label col-sm-2'
				)
			),
			array(
				'HtmlTag',
				array(
					'tag' => 'div',
					'class' => 'form-group'
				)
			)
		),
		'bootstrap_group' => array(
			array(
				'ViewHelper'
			),
			array(
				'BootstrapErrors'
			),
			array(
				'Description',
				array(
					'tag' => 'p',
					'class' => 'help-block'
				)
			),
			array(
				'BootstrapTag',
				array(//'class' => 'col-sm-10'
				)
			),
			array(
				'Label',
				array(//'class' => 'control-label col-sm-2'
				)
			),
			array(
				'HtmlTag',
				array(
					'tag' => 'div',
					'class' => 'form-group'
				)
			)
		),
		'bootstrap_inline' => array(
			array(
				'ViewHelper'
			),
			array(
				'BootstrapErrors'
			),
			array(
				'Description',
				array(
					'tag' => 'p',
					'class' => 'help-block'
				)
			),
			array(
				'Label'
			),
			array(
				'HtmlTag',
				array(
					'tag' => 'div',
					'class' => 'form-group'
				)
			)
		)
	);

	/**
	 * Text Date Decorator
	 *
	 * @staticvar array
	 */
	protected static $_TextDateDecorator = array(
		'table' => array(
			'ViewHelper',
			array(
				'Description',
				array(
					'tag' => ''
				)
			),
			'Errors',
			array(
				array(
					'data' => 'HtmlTag'
				),
				array(
					'tag' => 'td'
				)
			),
			array(
				'Label',
				array(
					'tag' => 'td'
				)
			),
			array(
				array(
					'row' => 'HtmlTag'
				),
				array(
					'tag' => 'tr'
				)
			)
		),
		'div' => array(
			array(
				'ViewHelper'
			),
			array(
				'Description',
				array(
					'tag' => 'span',
					'class' => 'hint'
				)
			),
			array(
				'Errors'
			),
			array(
				'Label'
			),
			array(
				'HtmlTag',
				array(
					'tag' => 'div'
				)
			)
		),
		'bootstrap' => array(
			array(
				'ViewHelper'
			),
			array(
				'Description',
				array(
					'escape' => false,
					'tag' => 'span',
					'class' => 'input-group-addon cursor-hover'
				)
			),
			array(
				'BootstrapTag',
				array(
					'class' => 'input-group'
				)
			),
			array(
				'Label'
			),
			'BootstrapErrors',
			array(
				'HtmlTag',
				array(
					'tag' => 'div',
					'class' => 'form-group'
				)
			)
		),
		'bootstrap_horizontal' => array(
			array(
				'ViewHelper'
			),
			array(
				'Description',
				array(
					'escape' => false,
					'tag' => 'div',
					'class' => 'input-group-addon cursor-hover'
				)
			),
			array(
				'BootstrapTag',
				array(
					'class' => 'col-sm-10 input-group',
					'style' => 'padding-left: 15px; padding-right: 15px'
				)
			),
			array(
				'Label',
				array(
					'class' => 'control-label col-sm-2'
				)
			),
			'BootstrapHorizontalErrors',
			array(
				'HtmlTag',
				array(
					'tag' => 'div',
					'class' => 'form-group'
				)
			)
		),
		'bootstrap_group' => array(
			array(
				'ViewHelper'
			),
			array(
				'Description',
				array(
					'escape' => false,
					'tag' => 'div',
					'class' => 'input-group-addon cursor-hover'
				)
			),
			array(
				'BootstrapTag',
				array(
					'class' => 'input-group'
				)
			),
			array(
				'Label'
			),
			'BootstrapErrors',
			array(
				'HtmlTag',
				array(
					'tag' => 'div',
					'class' => 'form-group'
				)
			)
		),
		'bootstrap_inline' => array(
			array(
				'ViewHelper'
			),
			array(
				'Description',
				array(
					'escape' => false,
					'tag' => 'div',
					'class' => 'input-group-addon cursor-hover',
				)
			),
			array(
				'BootstrapTag',
				array(
					'class' => 'input-group'
				)
			),
			array(
				'Label'
			),
			'BootstrapErrors',
			array(
				'HtmlTag',
				array(
					'tag' => 'div',
					'class' => 'form-group'
				)
			)
		)
	);

	/**
	 * Checkbox Decorator
	 *
	 * @staticvar array
	 */
	protected static $_CheckboxDecorator = array(
		'table' => array(
			'ViewHelper',
			array(
				'Description',
				array(
					'tag' => ''
				)
			),
			'Errors',
			array(
				array(
					'data' => 'HtmlTag'
				),
				array(
					'tag' => 'td'
				)
			),
			array(
				'Label',
				array(
					'tag' => 'td'
				)
			),
			array(
				array(
					'row' => 'HtmlTag'
				),
				array(
					'tag' => 'tr'
				)
			)
		),
		'div' => array(
			array(
				'ViewHelper'
			),
			array(
				'Description',
				array(
					'tag' => 'span',
					'class' => 'hint'
				)
			),
			array(
				'Errors'
			),
			array(
				'Label'
			),
			array(
				'HtmlTag',
				array(
					'tag' => 'div'
				)
			)
		),
		'bootstrap' => array(
			array(
				'ViewHelper',
			),
			array(
				'BootstrapErrors'
			),
			array(
				'Description',
				array(
					'tag' => 'p',
					'class' => 'help-block'
				)
			),
			array(
				'Label',
				array(
					'placement' => 'IMPLICIT_APPEND'
				)
			),
			array(
				array(
					'elementDiv' => 'HtmlTag'
				),
				array(
					'tag' => 'div',
					'class' => 'checkbox'
				)
			),
		),
		'bootstrap_horizontal' => array(
			array(
				'ViewHelper',
			),
			array(
				'BootstrapErrors'
			),
			array(
				'Description',
				array(
					'tag' => 'p',
					'class' => 'help-block'
				)
			),
			array(
				'Label',
				array(
					'placement' => 'IMPLICIT_APPEND',
					'style' => 'font-weight: normal'
				)
			),
			array(
				'HtmlTag',
				array(
					'class' => 'col-sm-offset-2 col-sm-10'
				)
			),
			array(
				array(
					'elementDiv' => 'HtmlTag'
				),
				array(
					'tag' => 'div',
					'class' => 'form-group'
				)
			),
		),
		'bootstrap_group' => array(
			array(
				'ViewHelper',
			),
			array(
				'BootstrapErrors'
			),
			array(
				'Description',
				array(
					'tag' => 'p',
					'class' => 'help-block'
				)
			),
			array(
				'Label',
				array(
					'placement' => 'IMPLICIT_APPEND'
				)
			),
			array(
				array(
					'elementDiv' => 'HtmlTag'
				),
				array(
					'tag' => 'div',
					'class' => 'checkbox'
				)
			),
		),
		'bootstrap_inline' => array(
			array(
				'ViewHelper'
			),
			array(
				'BootstrapErrors'
			),
			array(
				'Description',
				array(
					'tag' => 'p',
					'class' => 'help-block'
				)
			),
			array(
				'Label',
				array(
					'placement' => 'IMPLICIT_APPEND'
				)
			),
		)
	);

	/**
	 * Captcha Decorator
	 *
	 * @staticvar array
	 */
	protected static $_CaptchaDecorator = array(
		'table' => array(
			'Errors',
			array(
				array(
					'data' => 'HtmlTag'
				),
				array(
					'tag' => 'td'
				)
			),
			array(
				'Label',
				array(
					'tag' => 'td'
				)
			),
			array(
				array(
					'row' => 'HtmlTag'
				),
				array(
					'tag' => 'tr'
				)
			)
		),
		'div' => array(
			array(
				'Description',
				array(
					'tag' => 'span',
					'class' => 'hint'
				)
			),
			array(
				'Errors'
			),
			array(
				'Label'
			),
			array(
				'HtmlTag',
				array(
					'tag' => 'div'
				)
			)
		),
		'bootstrap' => array(
			array(
				'BootstrapErrors'
			),
			array(
				'Description',
				array(
					'tag' => 'p',
					'class' => 'help-block'
				)
			),
			array(
				'BootstrapTag',
				array(
					'class' => 'controls'
				)
			),
			array(
				'Label'
			),
			array(
				'HtmlTag',
				array(
					'tag' => 'div',
					'class' => 'form-group'
				)
			)
		),
		'bootstrap_horizontal' => array(
			array(
				'BootstrapErrors'
			),
			array(
				'Description',
				array(
					'tag' => 'p',
					'class' => 'help-block'
				)
			),
			array(
				'BootstrapTag',
				array(
					'class' => 'col-sm-10'
				)
			),
			array(
				'Label',
				array(
					'class' => 'control-label col-sm-2'
				)
			),
			array(
				'HtmlTag',
				array(
					'tag' => 'div',
					'class' => 'form-group'
				)
			)
		),
		'bootstrap_group' => array(
			array(
				'BootstrapErrors'
			),
			array(
				'Description',
				array(
					'tag' => 'p',
					'class' => 'help-block'
				)
			),
			array(
				'BootstrapTag',
				array(
					'class' => 'controls'
				)
			),
			array(
				'Label',
				array(//'class' => 'control-label'
				)
			),
			array(
				'HtmlTag',
				array(
					'tag' => 'div',
					'class' => 'form-group'
				)
			)
		),
		'bootstrap_inline' => array(
			array(
				'BootstrapErrors'
			),
			array(
				'Description',
				array(
					'tag' => 'p',
					'class' => 'help-block'
				)
			),
			array(
				'Label'
			)
		)
	);

	/**
	 * File Decorator
	 *
	 * @staticvar array
	 */
	protected static $_FileDecorator = array(
		'table' => array(
			'File',
			array(
				'Description',
				array(
					'tag' => ''
				)
			),
			'Errors',
			array(
				array(
					'data' => 'HtmlTag'
				),
				array(
					'tag' => 'td'
				)
			),
			array(
				'Label',
				array(
					'tag' => 'td'
				)
			),
			array(
				array(
					'row' => 'HtmlTag'
				),
				array(
					'tag' => 'tr'
				)
			)
		),
		'div' => array(
			array(
				'File'
			),
			array(
				'Description',
				array(
					'tag' => 'span',
					'class' => 'hint'
				)
			),
			array(
				'Errors'
			),
			array(
				'Label'
			),
			array(
				'HtmlTag',
				array(
					'tag' => 'div'
				)
			)
		),
		'bootstrap' => array(
			array(
				'File',
				array(
					'class' => 'input-file'
				)
			),
			array(
				'BootstrapErrors'
			),
			array(
				'Description',
				array(
					'tag' => 'p',
					'class' => 'help-block'
				)
			),
			array(
				'Label'
			),
			array(
				'HtmlTag',
				array(
					'tag' => 'div',
					'class' => 'form-group'
				)
			)
		),
		'bootstrap_horizontal' => array(
			array(
				'File',
				array(
					'class' => 'input-file'
				)
			),
			array(
				'BootstrapErrors'
			),
			array(
				'Description',
				array(
					'tag' => 'p',
					'class' => 'help-block'
				)
			),
			array(
				'BootstrapTag',
				array(
					'class' => 'col-sm-10'
				)
			),
			array(
				'Label',
				array(
					'class' => 'control-label col-sm-2'
				)
			),
			array(
				'HtmlTag',
				array(
					'tag' => 'div',
					'class' => 'form-group'
				)
			)
		),
		'bootstrap_group' => array(
			array(
				'File',
				array(
					'class' => 'input-file'
				)
			),
			array(
				'BootstrapErrors'
			),
			array(
				'Description',
				array(
					'tag' => 'p',
					'class' => 'help-block'
				)
			),
			array(
				'BootstrapTag',
				array(//'class' => 'col-sm-10'
				)
			),
			array(
				'Label',
				array(//'class' => 'control-label col-sm-2'
				)
			),
			array(
				'HtmlTag',
				array(
					'tag' => 'div',
					'class' => 'form-group'
				)
			)
		),
		'bootstrap_inline' => array(
			array(
				'File',
				array(
					'class' => 'input-file'
				)
			),
			array(
				'BootstrapErrors'
			),
			array(
				'Description',
				array(
					'tag' => 'p',
					'class' => 'help-block'
				)
			),
			array(
				'Label'
			)
		)
	);

	/**
	 * Multi Decorator
	 *
	 * @staticvar array
	 */
	protected static $_MultiDecorator = array(
		'table' => array(
			'ViewHelper',
			array(
				'Description',
				array(
					'tag' => '',
				)
			),
			'Errors',
			array(
				array(
					'data' => 'HtmlTag'
				),
				array(
					'tag' => 'td'
				)
			),
			array(
				'Label',
				array(
					'tag' => 'td'
				)
			),
			array(
				array(
					'row' => 'HtmlTag'
				),
				array(
					'tag' => 'tr'
				)
			)
		),
		'div' => array(
			array(
				'ViewHelper'
			),
			array(
				'Description',
				array(
					'tag' => 'span',
					'class' => 'hint'
				)
			),
			array(
				'Errors'
			),
			array(
				'Label'
			),
			array(
				'HtmlTag',
				array(
					'tag' => 'div'
				)
			)
		),
		'bootstrap' => array(
			array(
				'ViewHelper'
			),
			array(
				'BootstrapErrors'
			),
			array(
				'Description',
				array(
					'tag' => 'p',
					'class' => 'help-block',
				)
			),
			array(
				'BootstrapTag',
				array(
					'class' => 'checkbox'
				)
			),
			array(
				'Label',
				array(
					'class' => 'control-label'
				)
			),
			array(
				'HtmlTag',
				array(
					'tag' => 'div',
					'class' => 'form-group'
				)
			)
		),
		'bootstrap_horizontal' => array(
			array(
				'ViewHelper'
			),
			array(
				'BootstrapErrors'
			),
			array(
				'Description',
				array(
					'tag' => 'p',
					'class' => 'help-block',
				)
			),
			array(
				'BootstrapTag',
				array(
					'class' => 'checkbox col-sm-10'
				)
			),
			array(
				'Label',
				array(
					'class' => 'control-label col-sm-2'
				)
			),
			array(
				'HtmlTag',
				array(
					'tag' => 'div',
					'class' => 'form-group'
				)
			)
		),
		'bootstrap_group' => array(
			array(
				'ViewHelper'
			),
			array(
				'BootstrapErrors'
			),
			array(
				'Description',
				array(
					'tag' => 'p',
					'class' => 'help-block',
				)
			),
			array(
				'BootstrapTag',
				array(
					'class' => 'checkbox'
				)
			),
			array(
				'Label',
				array(//'class' => 'control-label'
				)
			),
			array(
				'HtmlTag',
				array(
					'tag' => 'div',
					'class' => 'form-group'
				)
			)
		),
		'bootstrap_inline' => array(
			array(
				'ViewHelper'
			),
			array(
				'BootstrapErrors'
			),
			array(
				'Description',
				array(
					'tag' => 'p',
					'class' => 'help-block',
				)
			),
			array(
				'Label'
			)
		)
	);

	/**
	 * Radio Decorator
	 *
	 * @staticvar array
	 */
	protected static $_RadioDecorator = array(
		'table' => array(
			'ViewHelper',
			array(
				'Description',
				array(
					'tag' => '',
				)
			),
			'Errors',
			array(
				array(
					'data' => 'HtmlTag'
				),
				array(
					'tag' => 'td'
				)
			),
			array(
				'Label',
				array(
					'tag' => 'td'
				)
			),
			array(
				array(
					'row' => 'HtmlTag'
				),
				array(
					'tag' => 'tr'
				)
			)
		),
		'div' => array(
			array(
				'ViewHelper'
			),
			array(
				'Description',
				array(
					'tag' => 'span',
					'class' => 'hint'
				)
			),
			array(
				'Errors'
			),
			array(
				'Label'
			),
			array(
				'HtmlTag',
				array(
					'tag' => 'div'
				)
			)
		),
		'bootstrap' => array(
			array(
				'ViewHelper'
			),
			array(
				'BootstrapErrors'
			),
			array(
				'Description',
				array(
					'tag' => 'p',
					'class' => 'help-block',
				)
			),
			array(
				'BootstrapTag',
				array(
					'class' => 'radio'
				)
			),
			array(
				'Label',
				array(
					'class' => 'control-label'
				)
			),
			array(
				'HtmlTag',
				array(
					'tag' => 'div',
					'class' => 'form-group'
				)
			)
		),
		'bootstrap_horizontal' => array(
			array(
				'ViewHelper'
			),
			array(
				'BootstrapErrors'
			),
			array(
				'Description',
				array(
					'tag' => 'p',
					'class' => 'help-block',
				)
			),
			array(
				'BootstrapTag',
				array(
					'class' => 'radio col-sm-10'
				)
			),
			array(
				'Label',
				array(
					'class' => 'control-label col-sm-2'
				)
			),
			array(
				'HtmlTag',
				array(
					'tag' => 'div',
					'class' => 'form-group'
				)
			)
		),
		'bootstrap_group' => array(
			array(
				'ViewHelper'
			),
			array(
				'BootstrapErrors'
			),
			array(
				'Description',
				array(
					'tag' => 'p',
					'class' => 'help-block',
				)
			),
			array(
				'BootstrapTag',
				array(
					'class' => 'radio'
				)
			),
			array(
				'Label',
				array(//'class' => 'control'
				)
			),
			array(
				'HtmlTag',
				array(
					'tag' => 'div',
					'class' => 'form-group'
				)
			)
		),
		'bootstrap_inline' => array(
			array(
				'ViewHelper'
			),
			array(
				'BootstrapErrors'
			),
			array(
				'Description',
				array(
					'tag' => 'p',
					'class' => 'help-block',
				)
			),
			array(
				'Label'
			)
		)
	);

	/**
	 * Submit Element Decorator
	 *
	 * @staticvar array
	 */
	protected static $_SubmitDecorator = array(
		'table' => array(
			'ViewHelper',
			array(
				array(
					'data' => 'HtmlTag'
				),
				array(
					'tag' => 'td'
				)
			),
			array(
				array(
					'row' => 'HtmlTag'
				),
				array(
					'tag' => 'tr',
					'class' => 'buttons'
				)
			)
		),
		'div' => array(
			'ViewHelper'
		),
		'bootstrap' => array(
			'ViewHelper',
			array(
				'HtmlTag',
				array(
					'tag' => 'div',
					'class' => 'form-group form-group-control'
				)
			),
		),
		'bootstrap_horizontal' => array(
			'ViewHelper',
			array(
				'BootstrapTag',
				array(
					'class' => 'col-sm-offset-2 col-sm-10'
				)
			),
			array(
				'HtmlTag',
				array(
					'tag' => 'div',
					'class' => 'form-group form-group-control'
				)
			),
		),
		'bootstrap_group' => array(
			'ViewHelper',
			array(
				'HtmlTag',
				array(
					'tag' => 'div', 'class' => 'form-group'
				)
			)
		),
		'bootstrap_inline' => array(
			'ViewHelper'
		)
	);

	/**
	 * Reset Element Decorator
	 *
	 * @staticvar array
	 */
	protected static $_ResetDecorator = array(
		'table' => array(
			'ViewHelper',
			array(
				array(
					'data' => 'HtmlTag'
				),
				array(
					'tag' => 'td'
				)
			),
			array(
				array(
					'row' => 'HtmlTag'
				),
				array(
					'tag' => 'tr'
				)
			)
		),
		'div' => array(
			'ViewHelper'
		),
		'bootstrap' => array(
			'ViewHelper',
			array(
				'HtmlTag',
				array(
					'closeOnly' => false
				)
			)
		),
		'bootstrap_horizontal' => array(
			'ViewHelper',
			array(
				'HtmlTag',
				array(
					'closeOnly' => false
				)
			),
			array(
				'BootstrapTag',
				array(
					'closeOnly' => false
				)
			)
		),
		'bootstrap_group' => array(
			'ViewHelper',
			array(
				'HtmlTag',
				array(
					'closeOnly' => false
				)
			)
		),
		'bootstrap_inline' => array(
			'ViewHelper'
		)
	);

	/**
	 * Hiden Element Decorator
	 *
	 * @staticvar array
	 */
	protected static $_HiddenDecorator = array(
		'table' => array(
			'ViewHelper'
		),
		'div' => array(
			'ViewHelper'
		),
		'bootstrap' => array(
			'ViewHelper'
		),
		'bootstrap_horizontal' => array(
			'ViewHelper'
		),
		'bootstrap_group' => array(
			'ViewHelper'
		),
		'bootstrap_inline' => array(
			'ViewHelper'
		)
	);

	/**
	 * Form Element Decorator
	 *
	 * @staticvar array
	 */
	protected static $_FormDecorator = array(
		'table' => array(
			'FormElements',
			'Form'
		),
		'div' => array(
			'FormElements',
			'Form'
		),
		'bootstrap' => array(
			'FormElements',
			'Form'
		),
		'bootstrap_horizontal' => array(
			'FormElements',
			'Form'
		),
		'bootstrap_group' => array(
			'FormElements',
			'Form'
		),
		'bootstrap_inline' => array(
			'FormElements',
			'Form'
		)
	);

	/**
	 * DisplayGroup Decorator
	 *
	 * @staticvar array
	 */
	protected static $_DisplayGroupDecorator = array(
		'table' => array(
			'FormElements',
			array(
				'HtmlTag',
				array(
					'tag' => 'table',
					'summary' => ''
				)
			),
			'Fieldset'
		),
		'div' => array(
			'FormElements',
			'Fieldset'
		),
		'bootstrap' => array(
			'FormElements',
			'Fieldset'
		),
		'bootstrap_horizontal' => array(
			'FormElements',
			'Fieldset'
		),
		'bootstrap_group' => array(
			'FormElements',
			'Fieldset'
		),
		'bootstrap_inline' => array(
			'FormElements',
			'Fieldset'
		)

	);

	/**
	 * ZendX_Jquery Decorator
	 *
	 * @staticvar array
	 */
	protected static $_JqueryElementDecorator = array(
		'table' => array(
			'UiWidgetElement',
			array(
				'Description',
				array(
					'tag' => '',
				)
			),
			'Errors',
			array(
				array(
					'data' => 'HtmlTag'
				),
				array(
					'tag' => 'td'
				)
			),
			array(
				'Label',
				array(
					'tag' => 'td'
				)
			),
			array(
				array(
					'row' => 'HtmlTag'
				),
				array(
					'tag' => 'tr'
				)
			)
		),
		'div' => array(
			array(
				'UiWidgetElement'
			),
			array(
				'Description',
				array(
					'tag' => 'span',
					'class' => 'hint'
				)
			),
			array(
				'Errors'
			),
			array(
				'Label'
			),
			array(
				'HtmlTag',
				array(
					'tag' => 'div'
				)
			)
		),
		'bootstrap' => array(
			array(
				'UiWidgetElement'
			),
			array(
				'Description',
				array(
					'tag' => 'span',
					'class' => 'help-block'
				)
			),
			array(
				'BootstrapErrors'
			),
			array(
				'BootstrapTag',
				array(
					'class' => 'controls'
				)
			),
			array(
				'Label',
				array(
					'class' => 'control-label'
				)
			),
			array(
				'HtmlTag',
				array(
					'tag' => 'div',
					'class' => 'control-group'
				)
			)
		),
		'bootstrap_horizontal' => array(
			array(
				'UiWidgetElement'
			),
			array(
				'Description',
				array(
					'tag' => 'span',
					'class' => 'help-block'
				)
			),
			array(
				'BootstrapErrors'
			),
			array(
				'BootstrapTag',
				array(
					'class' => 'controls'
				)
			),
			array(
				'Label',
				array(
					'class' => 'control-label'
				)
			),
			array(
				'HtmlTag',
				array(
					'tag' => 'div',
					'class' => 'control-group'
				)
			)
		),
		'bootstrap_group' => array(
			array(
				'UiWidgetElement'
			),
			array(
				'Description',
				array(
					'tag' => 'span',
					'class' => 'help-block'
				)
			),
			array(
				'BootstrapErrors'
			),
			array(
				'BootstrapTag',
				array(
					'class' => 'controls'
				)
			),
			array(
				'Label',
				array(
					'class' => 'control-label'
				)
			),
			array(
				'HtmlTag',
				array(
					'tag' => 'div',
					'class' => 'control-group'
				)
			)
		),
		'bootstrap_inline' => array(
			array(
				'UiWidgetElement'
			),
			array(
				'Description',
				array(
					'tag' => 'span',
					'class' => 'help-block'
				)
			),
			array(
				'BootstrapErrors'
			),
			array(
				'BootstrapTag',
				array(
					'class' => 'controls'
				)
			),
			array(
				'Label',
				array(
					'class' => 'control-label'
				)
			),
			array(
				'HtmlTag',
				array(
					'tag' => 'div',
					'class' => 'control-group'
				)
			)
		)
	);

	/**
	 * Set the form decorators by the given string format or by the default div style
	 *
	 * @param Zend_Form $form Zend_Form pointer-reference
	 * @param string $format Project_Plugin_FormDecoratorDefinition constants
	 * @param string $submit_str Element name. (TBD)
	 * @param string $cancel_str Element name. (TBD)
	 *
	 * @return void
	 */
	public static function setFormDecorator(
		Zend_Form $form,
		$format = self::BOOTSTRAP,
		$submit_str = 'submit',
		$cancel_str = 'cancel'
	)
	{

		self::setFormDefaults( $form, $format );

		self::setButtonDecorators( $form, $format, $submit_str, $cancel_str );

		// set hidden, captcha, multi input decorators, file
		/** @var $e Zend_Form_Element | Zend_Form_Element_Multi */
		foreach ( $form->getElements() as $e ) {
			if ( $e instanceof Zend_Form_Element_Hidden ) {
				$e->setDecorators( self::$_HiddenDecorator[$format] );
			}
			if ( is_subclass_of( $e, "ZendX_JQuery_Form_Element_UiWidget" ) ) {
				$e->setDecorators( self::$_JqueryElementDecorator[$format] );
			}
			if ( $e instanceof Zend_Form_Element_Captcha ) {
				$e->setDecorators( self::$_CaptchaDecorator[$format] );
			}
			if ( $e instanceof Zend_Form_Element_Checkbox ) {
				$e->setDecorators( self::$_CheckboxDecorator[$format] );
			}
			if ( $e instanceof Zend_Form_Element_MultiCheckbox ) {
				$e->setDecorators( self::$_MultiDecorator[$format] );
				$e->setSeparator( '' );
				//$e->setAttrib("escape", false);
			}
			if ( $e instanceof Zend_Form_Element_Radio ) {
				$e->setDecorators( self::$_RadioDecorator[$format] );
				$e->setSeparator( '' );
			}
			if ( $e instanceof Zend_Form_Element_File ) {
				$e->setDecorators( self::$_FileDecorator[$format] );
			}
			if ( $e instanceof Trb_Form_Element_Text_Date ) {
				$e->setDecorators( self::$_TextDateDecorator[$format] );
				$e->getDecorator( 'BootstrapTag' )->setOption( 'id', 'datetimepicker-' . $e->getName() );
			}

			if ( $e instanceof Zend_Form_Element_Text || $e instanceof Zend_Form_Element_Password || $e instanceof Zend_Form_Element_Select
				|| $e instanceof Zend_Form_Element_Textarea
			) {
				$e->setAttrib( 'class', 'form-control' );
			}
		}
	}

	/**
	 * Set Form defaults
	 * - disable default decorators
	 * - set form & displaygroup decorators
	 * - set needed prefix path for bootstrap decorators
	 * - set form element decorators
	 *
	 * @param Zend_Form $form The form instance.
	 * @param string $format Standard, minimal, table.
	 *
	 * @return void
	 */
	protected static function setFormDefaults( Zend_Form $form, $format )
	{
		$form->setDisableLoadDefaultDecorators( true );
		$form->setDisplayGroupDecorators( self::$_DisplayGroupDecorator[$format] );
		$form->setDecorators( self::$_FormDecorator[$format] );

		if ( self::BOOTSTRAP == $format || self::BOOTSTRAP_HORIZONTAL == $format || self::BOOTSTRAP_INLINE == $format || self::BOOTSTRAP_GROUP == $format ) {
			$form->addElementPrefixPath(
				'Trb_Form_Decorator',
				'Trb/Form/Decorator',
				Zend_Form::DECORATOR
			);
		}

		$form->setElementDecorators( self::$_ElementDecorator[$format] );

		switch ( $format ) {
			case self::BOOTSTRAP:
				$form->setAttrib( 'class', 'form-bs' );
				break;
			case self::BOOTSTRAP_HORIZONTAL:
				$form->setAttrib( 'class', 'form-horizontal' );
				break;
			case self::BOOTSTRAP_GROUP:
				$form->setAttrib( 'class', 'form-group-bs' );
				break;
			case self::BOOTSTRAP_INLINE:
				$form->setAttrib( 'class', 'form-inline' );
				break;
		}

		return;
	}

	/**
	 * Set Button Decorators
	 *
	 * @param Zend_Form $form Instance of the form.
	 * @param string $format The format (standard, minimal, table).
	 * @param string $submit_str Element name of the submit button.
	 * @param string $cancel_str Element name of the cancel button.
	 *
	 * @return void
	 */
	protected static function setButtonDecorators(
		Zend_Form $form,
		$format,
		$submit_str,
		$cancel_str
	)
	{
		// set submit button decorators
		if ( $form->getElement( $submit_str ) ) {

			$form->getElement( $submit_str )->setDecorators(
				self::$_SubmitDecorator[$format]
			);

			if ( self::BOOTSTRAP == $format || self::BOOTSTRAP_HORIZONTAL == $format || self::BOOTSTRAP_INLINE == $format || self::BOOTSTRAP_GROUP == $format ) {
				$attribs = $form->getElement( $submit_str )->getAttrib( 'class' );
				if ( empty( $attribs ) ) {
					$attribs = array( 'btn', 'btn-primary' );
				} else {
					if ( is_string( $attribs ) ) {
						$attribs = array( $attribs );
					}
					$attribs = array_unique( array_merge( array( 'btn' ), $attribs ) );
				}
				$submitBtn = $form->getElement( $submit_str );
				$submitBtn->setAttrib( 'class', $attribs );

				if ( true === ( $submitBtn instanceof Zend_Form_Element_Button ) && $submitBtn->getAttrib( 'type' ) === null ) {
					$submitBtn->setAttrib( 'type', 'submit' );
				}

				if ( $form->getElement( $cancel_str ) && ( self::BOOTSTRAP == $format || self::BOOTSTRAP_HORIZONTAL == $format || self::BOOTSTRAP_INLINE == $format || self::BOOTSTRAP_GROUP == $format ) ) {
					$form->getElement( $submit_str )->getDecorator( 'HtmlTag' )
						->setOption( 'openOnly', true );
					if ( self::BOOTSTRAP_HORIZONTAL == $format ) {
						$form->getElement( $submit_str )->getDecorator( 'BootstrapTag' )
							->setOption( 'openOnly', true );
					}
				}
			}
			if ( self::TABLE == $format ) {
				if ( $form->getElement( $cancel_str ) ) {
					$form->getElement( $submit_str )->getDecorator( 'data' )
						->setOption( 'openOnly', true );
					$form->getElement( $submit_str )->getDecorator( 'row' )
						->setOption( 'openOnly', true );
				}
			}
		}

		// set cancel button decorators
		if ( $form->getElement( $cancel_str ) ) {

			$form->getElement( $cancel_str )->setDecorators(
				self::$_ResetDecorator[$format]
			);

			if ( self::BOOTSTRAP == $format || self::BOOTSTRAP_HORIZONTAL == $format || self::BOOTSTRAP_INLINE == $format || self::BOOTSTRAP_GROUP == $format ) {
				$attribs = $form->getElement( $cancel_str )->getAttrib( 'class' );
				if ( empty( $attribs ) ) {
					$attribs = array( 'btn' );
				} else {
					if ( is_string( $attribs ) ) {
						$attribs = array( $attribs );
					}
					$attribs = array_unique( array_merge( array( 'btn' ), $attribs ) );
				}
				$form->getElement( $cancel_str )
					->setAttrib( 'class', $attribs )
					->setAttrib( 'type', 'reset' );
				if ( $form->getElement( $submit_str ) && ( self::BOOTSTRAP == $format || self::BOOTSTRAP_HORIZONTAL == $format || self::BOOTSTRAP_INLINE == $format || self::BOOTSTRAP_GROUP == $format ) ) {
					$form->getElement( $cancel_str )->getDecorator( 'HtmlTag' )
						->setOption( 'closeOnly', true );
					if ( self::BOOTSTRAP_HORIZONTAL == $format ) {
						$form->getElement( $cancel_str )->getDecorator( 'BootstrapTag' )
							->setOption( 'closeOnly', true );
					}
				}
			}
			if ( self::TABLE == $format ) {
				if ( $form->getElement( $submit_str ) ) {
					$form->getElement( $cancel_str )->getDecorator( 'data' )
						->setOption( 'closeOnly', true );
					$form->getElement( $cancel_str )->getDecorator( 'row' )
						->setOption( 'closeOnly', true );
				}
			}
		}
	}
}
