<?php

require_once 'Trb/View/Helper/HtmlElement.php';

/**
 * Class Trb_View_Helper_IconFa
 */
class Trb_View_Helper_IconFa extends Trb_View_Helper_HtmlElement
{
	/**
	 * @var string
	 */
	protected $_size = '';

	/**
	 * View Helper para
	 *
	 * @param $name
	 * @param array $attributes
	 * @return string
	 */
	public function iconFa( $icon = '', $attributes = array() )
	{
		$this->setAttributes( $attributes );
		$this->setIcon( $icon );
		return $this;
	}

	/**
	 * @return string
	 */
	public function render()
	{
		$params = $this->attributesToHtml();
		return "<i $params></i>";
	}

	/**
	 * @return string
	 */
	public function __toString()
	{
		$this->setAttribute( 'class', trim( $this->getAttribute( 'class' ) . ' ' . $this->_size ) );
		return $this->render();
	}

	/**
	 * @param $name
	 * @return $this
	 */
	public function setIcon( $icon )
	{
		if ( strpos( $icon, 'fa-' ) === false && $icon !== '' ) {
			$icon = 'fa fa-' . $icon;
		} else {
			$icon = 'fa ' . $icon;
		}

		if ( ( $class = $this->getAttribute( 'class' ) ) ) {
			$this->setAttribute( 'class', $icon . ' ' . $class );
		} else {
			$this->setAttribute( 'class', $icon );
		}
		return $this;
	}

	/**
	 * Set icon size
	 *
	 * @param $size (fa-lg|fa-2x|fa-3x|fa-4x|fa-5x)
	 * @return $this
	 */
	public function setSize( $size )
	{
		if ( strpos( $size, 'fa-' ) === false && $size !== '' ) {
			$this->_size = 'fa-' . $size;
		} else {
			$this->_size = $size;
		}
		return $this;
	}

}