<?php
require_once 'IPostre.php';

/**
 *
 * @author roberto
 *
 */
class Bizcochuelo implements IPostre {
	var $ingredientes = array ();

	/**
	 *
	 * {@inheritdoc}
	 *
	 * @see IPostre::set_ingredientes()
	 */
	public function set_ingredientes() {
		$this->ingredientes = array (
				'harina' => '2 tazas',
				'leche' => '1 taza',
				'azucar' => '1 taza',
				'huevo' => 1
		);
	}
	public function get_ingredientes() {
		$mes = '';
		foreach ( $this->ingredientes as $ingrediente => $cantidad ) {
			$mes = $mes . '; ' . $ingrediente . ': ' . $cantidad;
		}
		return $mes;
	}
}