<?php
/**
* Clase trabajador
*/
class Employee extends AbstractPerson {
	private $salary;

	function __construct($name, $age, $salary) {
		// Llamada al constructor del padre
		parent::__construct($name, $age);
		// Inicialización del atributo local
		$this->salary = $salary;
	}

	public function printData() {
		// Llamada al método printData del padre
		return parent::printData() . " Salario [" . $this->salary . "]";
	}
}

?>