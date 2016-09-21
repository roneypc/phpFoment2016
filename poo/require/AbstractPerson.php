<?php
/**
* Clase persona
*/
abstract class AbstractPerson {
	protected $name;
	protected $age;

	function __construct($name, $age) {
		$this->name = $name;
		$this->age = $age;
	}

	public function printData() {
		return "Nombre [" . $this->name . "] - Edad [" . $this->age . "]";
	}
}
?>