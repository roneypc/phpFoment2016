<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
require "require/Person.php";
require "require/Worker.php";

$person1 = new Person("Jorge", 15);
$person2 = new Person("Fred", 18);
$worker1 = new Worker("Roberto", 12, 2500);
$worker2 = new Worker("Mateo", 19, 2800);

echo "Persona: " . $person1->printData() . "<hr>";
echo "Persona: " . $person2->printData() . "<hr>";
echo "Empleado: " . $worker1->printData() . "<hr>";
echo "Empleado: " . $worker2->printData() . "<hr>";
?>

</body>
</html>