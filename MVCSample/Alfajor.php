<?php
require_once 'IPostre.php';
/**
 *
 * @author PC180
 *
 */
class Alfajor implements IPostre {

	/**
	 *
	 * {@inheritdoc}
	 *
	 * @see IPostre::set_ingredientes()
	 */
	public function set_ingredientes() {
		$this->ingredientes = array (
				'Tapas de maizena' => 2,
				'dulce de leche' => '1 cda. sopera',
				'coco rallado' => '1 cdta. de te'
		);
	}
	function __construct() {
		$this->set_ingredientes ();
	}
}