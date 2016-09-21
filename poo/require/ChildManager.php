<?php

/**
* Clase Gerente
*/
class ChildManager extends AbstractWorker {
	private $profits;

	function __construct($name, $profits) {
		parent::__construct($name);
		$this->profits = $profits;
	}

	public function salaryCalculate() {
		$this->salary = (0.1 * $this->profits);
	}
}
?>