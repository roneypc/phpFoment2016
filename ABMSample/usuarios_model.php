<?php
require_once ('db_abstract_model.php');
class Usuario extends DBAbstractModel {
	public $nombre;
	public $apellido;
	public $email;
	private $clave;
	protected $id;

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
	public function get($user_email = '') {
		if ($user_email != '') {
			$this->query = "
				SELECT id, nombre, apellido, email, clave
				FROM usuarios
				WHERE email = '$user_email'";
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
	public function set($user_data = array()) {
		if (array_key_exists ( 'email', $user_data )) {
			$this->get ( $user_data ['email'] );
			if ($user_data ['email'] != $this->email) {
				foreach ( $user_data as $campo => $valor ) {
					$$campo = $valor;
				}
				;
				$this->query = "
					INSERT INTO usuarios
					(nombre, apellido, email, clave)
					VALUES ('$nombre', '$apellido', '$email', '$clave')";
				$this->execute_single_query ();
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
	public function edit($user_data = array()) {
		if (array_key_exists ( 'email', $user_data )) {
			$this->get ( $user_data ['email'] );
			if ($user_data ['email'] == $this->email) {
				foreach ( $user_data as $campo => $valor ) {
					$$campo = $valor;
				}
				$this->query = "
				UPDATE usuarios
				SET nombre='$nombre',
				apellido='$apellido',
				clave='$clave'
				WHERE email = '$email'";
				$this->execute_single_query ();
			} else {
				echo 'El email solicitado para editar no existe';
			}
		} else {
			echo 'No ha informado el email';
		}
	}

	/**
	 * Metodo DELETE
	 *
	 * {@inheritdoc}
	 *
	 * @see DBAbstractModel::delete()
	 */
	public function delete($user_email = '') {
		if (! empty ( $user_email )) {
			$this->get ( $user_data ['email'] );
			if ($user_email == $this->email) {
				$this->query = "
				DELETE FROM usuarios
				WHERE email = '$user_email'
				";
				$this->execute_single_query ();
			} else {
				echo 'El email solicitado para eliminar no existe';
			}
		} else {
			echo 'No ha informado el email';
		}
	}

	/**
	 */
	function __destruct() {
		unset ( $this );
	}
}
?>