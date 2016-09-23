<?php
require_once 'IEncendible.php';
class Coche implements IEncendible {
	private $gasolina;
	private $bateria;
	private $estado = "apagado";
	function __construct() {
		$this->gasolina = 0;
		$this->bateria = 10;
	}
	public function encender() {
		if ($this->estado == "apagado") {
			if ($this->bateria > 0) {
				if ($this->gasolina > 0) {
					$this->estado = "encendido";
					$this->bateria --;
					echo "<br><b>Enciendo...</b> estoy encendido!";
				} else {
					echo "<br>No tengo gasolina";
				}
			} else {
				echo "<br>No tengo bateria";
			}
		} else {
			echo "<br>Ya estaba encendido";
		}
	}
	public function apagar() {
		if ($this->estado == "encendido") {
			$this->estado = "apagado";
			echo "<br><b>Apago...</b> estoy apagado!";
		} else {
			echo "<br>Ya estaba apagado";
		}
	}
	public function cargar_gasolina($litros) {
		$this->gasolina += $litros;
		echo "<br>Cargados $litros litros";
	}
	public function getBateria() {
		echo "<br>Bateria: " . $this->bateria;
	}
}

?>