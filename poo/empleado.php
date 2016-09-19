<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
/**
* 
*/
class Empleado {
	private $name; // string
	private $salary; // entero

	/*
	Inicializar nombre y sueldo
	*/  
	public function initialize($name, $salary) {
		$this->name=$name;
		$this->salary=$salary;
	}

	/*

	*/
	public function printResult() {
		echo "<hr>Hola " . $this->name . ". ";
		if($this->salary > 3000) {
			echo "Salario: " . $this->salary . " => Debes pagar impuestos";
		} else {
			echo "Salario: " . $this->salary . " => No pagas impuestos";
		}
	}
}

$emp1 = new Empleado();
$emp1->initialize("Roberto", 2500);
$emp1->printResult();

$emp2 = new Empleado();
$emp2->initialize("Jorge", 3500);
$emp2->printResult();
?>

</body>
</html>