<?php
require_once 'Bizcochuelo.php';

/**
 *
 * @author PC180
 *
 */
class BizcochueloVainilla extends Bizcochuelo {
	function __construct() {
		parent::set_ingredientes ();
		$this->set_ingredientes ();
	}

	/**
	 *
	 * {@inheritdoc}
	 *
	 * @see Bizcochuelo::set_ingredientes()
	 */
	public function set_ingredientes() {
		$this->ingredientes ['escencia de vainilla'] = 'a gusto';
	}
}