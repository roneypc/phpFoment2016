<?php
/**
* Clase Empleado
*/
class ChildEmployee extends AbstractWorker {
	private $workHours;
	private $priceHour;

	function __construct($name, $workHours = 160, $priceHour = 3.5) {
		parent::__construct($name);
		$this->workHours = $workHours;
		$this->priceHour = $priceHour;
	}

	public function salaryCalculate() {
		$this->salary = $this->workHours * $this->priceHour;
	}
}

?>