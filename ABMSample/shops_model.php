<?php
require_once ('db_abstract_model.php');

/**
 *
 * @author roberto
 *
 */
class Shop extends DBAbstractModel {
	protected $idShop;
	public $nombre;
	public $tipo;
	public $ubicacion;
	public $codigo;
	public $nif;
	public $alta;
	private $idUser;

	/**
	 */
	function __construct() {
		$this->db_name = 'book_example';
	}

	/**
	 * Metodo GET: RETRIEVE
	 *
	 * {@inheritdoc}
	 *
	 * @see DBAbstractModel::get()
	 */
	public function get($nif = '') {
		if (! empty ( $nif )) {
			$this->query = "
			SELECT idShop, nombre, tipo, ubicacion, codigo, nif, alta, idUser
			FROM shops
			WHERE nif = '$nif'";
			$this->get_results_from_query ();
		}

		if (count ( $this->rows ) == 1) {
			foreach ( $this->rows [0] as $propiedad => $valor ) {
				$this->$propiedad = $valor;
			}
		}
	}

	/**
	 * Metodo SET: INSERT
	 *
	 * {@inheritdoc}
	 *
	 * @see DBAbstractModel::set()
	 */
	public function set($shop_data = array()) {
		if (array_key_exists ( 'nif', $shop_data )) {
			$this->get ( $shop_data ['nif'] );
			if ($shop_data ['nif'] != $this->nif) {
				foreach ( $shop_data as $campo => $valor ) {
					$$campo = $valor;
				}
				$this->query = "
					INSERT INTO shops
					(nombre, tipo, ubicacion, codigo, nif, alta, idUser)
					VALUES ('$nombre', '$tipo', '$ubicacion', '$codigo', '$nif', '$alta', '$idUser')";
				$this->execute_single_query ();
			} else {
				echo 'NIF repetido<br>';
			}
		}
	}

	/**
	 * Metodo EDIT: UPDATE
	 *
	 * {@inheritdoc}
	 *
	 * @see DBAbstractModel::edit()
	 */
	public function edit($shop_data = array()) {
		if (array_key_exists ( 'nif', $shop_data )) {
			$this->get ( $shop_data ['nif'] );
			$queryStr = '';
			if ($shop_data ['nif'] == $this->nif) {
				foreach ( $shop_data as $campo => $valor ) {
					$$campo = $valor;
					$queryStr = $queryStr . $campo . "='" . $valor . "',";
				}
				$queryStr = substr ( $queryStr, 0, - 1 );
				$this->query = "UPDATE shops SET " . $queryStr . "WHERE nif = '$nif'";
				$this->execute_single_query ();
			} else {
				echo 'El nif solicitado para editar no existe';
			}
		} else {
			echo 'No ha informado el nif';
		}
	}

	/**
	 * Metodo DELETE
	 *
	 * {@inheritdoc}
	 *
	 * @see DBAbstractModel::delete()
	 */
	public function delete($nif = '') {
		if (! empty ( $nif )) {
			$this->get ( $nif );
			if ($nif == $this->nif) {
				$this->query = "
				DELETE FROM shops
				WHERE nif = '$nif'
				";
				$this->execute_single_query ();
			} else {
				echo 'El nif solicitado para eliminar no existe';
			}
		} else {
			echo 'No ha informado el nif';
		}
	}

	/**
	 */
	function __destruct() {
		unset ( $this );
	}
}

?>