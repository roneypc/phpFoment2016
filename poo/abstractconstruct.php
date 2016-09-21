<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
require "require/AbstractPerson.php";
require "require/Employee.php";

//$person = new AbstractPerson();
$emp1 = new Employee('Roberto', 30, 2500);
echo $emp1->printData();
?>

</body>
</html>