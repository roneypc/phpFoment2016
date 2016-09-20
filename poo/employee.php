<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
/**
* Clase Empleado
*/
class Employee {
	
	private $name;
	private $salary;

	function __construct($name, $salary = 1000) {
		$this->name = $name;
		$this->salary = $salary;
	}

	public function printData() {
		return "Empleado [" . $this->name ."] Salario [" . $this->salary ."]";
	}
}

$emp1 = new Employee("Jorge", 1500);
$emp2 = new Employee("Roberto");

echo $emp1->printData() . "<br>";
echo $emp2->printData();

?>

</body>
</html>