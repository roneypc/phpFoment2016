<?php

require "require/AbstractWorker.php";
require "require/ChildEmployee.php";
require "require/ChildManager.php";

$emp1 = new ChildEmployee('Roberto');
$emp1->salaryCalculate();
$emp1->printData();

$man1 = new ChildManager('Jorge', 25000);
$man1->salaryCalculate();
$man1->printData();

?>