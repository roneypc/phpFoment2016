<?php
require_once 'SeleccionFutbol.php';
class Masajista extends SeleccionFutbol {
	private $titulacion;
	private $aniosExperiencia;
	function __construct($id, $nombre, $apellidos, $edad, $titulacion, $aniosExperiencia) {
		parent::__construct ( $id, $nombre, $apellidos, $edad );
		$this->titulacion = $titulacion;
		$this->aniosExperiencia = $aniosExperiencia;
	}
	public function entrenamiento() {
		echo 'Da asistencia en el entrenamiento (Clase Masajista)';
	}
	public function darMasaje() {
		echo 'Da un Masaje';
	}

	/*
	 * GETTERS
	 */
	public function getTitulacion() {
		return $this->titulacion;
	}
	public function getAniosExperiencia() {
		return $this->aniosExperiencia;
	}
}
?>