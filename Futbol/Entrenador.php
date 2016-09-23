<?php
require_once 'SeleccionFutbol.php';
class Entrenador extends SeleccionFutbol {
	private $idFederacion;
	function __construct($id, $nombre, $apellidos, $edad, $idFederacion) {
		parent::__construct ( $id, $nombre, $apellidos, $edad );
		$this->idFederacion = $idFederacion;
	}
	public function entrenamiento() {
		echo 'Dirige un entrenamiento (Clase Entrenador)';
	}
	public function partidoFutbol() {
		echo 'Dirige un Partido (Clase Entrenador)';
	}
	public function planificarEntrenamiento() {
		echo 'Planificar un Entrenamiento';
	}

	/*
	 * GETTERS
	 */
	public function getIdFederacion() {
		return $this->idFederacion;
	}
}
?>