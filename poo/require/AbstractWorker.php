<?php
/**
* Clase trabajador
*/
abstract class AbstractWorker {
	private $name;
	protected $salary;

	function __construct($name) {
		$this->name = $name;
	}

	public function printData() {
		echo "<hr>Nombre [" . $this->name . "] Salario [" . $this->salary . "]";
	}

	abstract function salaryCalculate();
}

?>