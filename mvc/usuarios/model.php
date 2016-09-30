<?php
// Importar modelo de abstracción de base de datos
require_once ('../core/DBAbstractModel.php');

/**
 *
 * @author roberto
 *
 */
class model extends DBAbstractModel {
	// ############################## PROPIEDADES ################################
	public $nombre;
	public $apellido;
	public $email;
	private $clave;
	protected $id;
	// ################################ MÉTODOS ##################################
	// Traer datos de un usuario
	public function get($user_email = '') {
		if ($user_email != '') {
			$this->query = "
		SELECT id, nombre, apellido, email, clave
		FROM usuarios
		WHERE email = '$user_email'
		";
			$this->get_results_from_query ();
		}
		if (count ( $this->rows ) == 1) {
			foreach ( $this->rows [0] as $propiedad => $valor ) {
				$this->$propiedad = $valor;
			}
			$this->mensaje = 'model encontrado';
		} else {
			$this->mensaje = 'model no encontrado';
		}
	}
	// Crear un nuevo usuario
	public function set($user_data = array()) {
		if (array_key_exists ( 'email', $user_data )) {
			$this->get ( $user_data ['email'] );
			if ($user_data ['email'] != $this->email) {
				foreach ( $user_data as $campo => $valor ) {
					$$campo = $valor;
				}
				$this->query = "
			INSERT INTO usuarios
			(nombre, apellido, email, clave)
			VALUES
			('$nombre', '$apellido', '$email', '$clave')
			";
				$this->execute_single_query ();
				$this->mensaje = 'model agregado exitosamente';
			} else {
				$this->mensaje = 'El usuario ya existe';
			}
		} else {
			$this->mensaje = 'No se ha agregado al usuario';
		}
	}
	// Modificar un usuario
	public function edit($user_data = array()) {
		foreach ( $user_data as $campo => $valor ) {
			$$campo = $valor;
		}
		$this->query = "
	UPDATE usuarios
	SET nombre='$nombre',
	apellido='$apellido'
	WHERE email = '$email'
	";
		$this->execute_single_query ();
		$this->mensaje = 'model modificado';
	}
	// Eliminar un usuario
	public function delete($user_email = '') {
		$this->query = "
	DELETE FROM usuarios
	WHERE email = '$user_email'
	";
		$this->execute_single_query ();
		$this->mensaje = 'model eliminado';
	}
	// Método constructor
	function __construct() {
		$this->db_name = 'book_example';
	}
	// Método destructor del objeto
	function __destruct() {
		unset ( $this );
	}
}
?>