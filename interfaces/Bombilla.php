<?php
require_once 'IEncendible.php';
class Bombilla implements IEncendible {
	public function encender() {
		echo "<br>Y la luz se hizo...";
	}
	public function apagar() {
		echo "<br>Estamos a oscuras...";
	}
}

?>