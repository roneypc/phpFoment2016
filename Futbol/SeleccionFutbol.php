<?php
abstract class SeleccionFutbol {
	protected $id;
	protected $nombre;
	protected $apellidos;
	protected $edad;
	function __construct($id, $nombre, $apellidos, $edad) {
		$this->id = $id;
		$this->nombre = $nombre;
		$this->apellidos = $apellidos;
		$this->edad = $edad;
	}

	// IMPORTANTE -> METODO ABSTRACTO => no se implementa en la clase abstracta pero si en la clases hijas
	public abstract function entrenamiento();
	public function viajar() {
		echo 'Viajar (Clase Padre)';
	}
	public function concentrarse() {
		echo 'Concentrarse (Clase Padre)';
	}
	public function partidoFutbol() {
		echo 'Asiste al Partido de Fútbol (Clase Padre)';
	}

	/*
	 * GETTERS
	 */
	public function getId() {
		return $this->id;
	}
	public function getNombre() {
		return $this->nombre . $this->apellidos;
	}
	public function getApellidos() {
		return $this->apellidos;
	}
	public function getEdad() {
		return $this->edad;
	}
}
?>