<?php
require_once 'SeleccionFutbol.php';
class Futbolista extends SeleccionFutbol {
	private $dorsal;
	private $demarcacion;
	function __construct($id, $nombre, $apellidos, $edad, $dorsal, $demarcacion) {
		parent::__construct ( $id, $nombre, $apellidos, $edad );
		$this->dorsal = $dorsal;
		$this->demarcacion = $demarcacion;
	}
	public function entrenamiento() {
		echo '>Realiza un entrenamiento (Clase Futbolista)';
	}
	public function partidoFutbol() {
		echo 'Juega un Partido (Clase Futbolista)';
	}
	public function entrevista() {
		echo 'Da una Entrevista';
	}

	/*
	 * GETTERS
	 */
	public function getDorsal() {
		return $this->dorsal;
	}
	public function getDemarcacion() {
		return $this->demarcacion;
	}
}
?>