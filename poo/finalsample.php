<html>
<head>
<title>Pruebas</title>
</head>
<body>

<?php
class Person {
  protected $name;
  protected $age;

  public final function loadData($name, $age) {
    $this->name = $name;
    $this->age = $age;
  }

  public function printData() {
    echo 'Nombre:'.$this->name.'<br>';
    echo 'Edad:'.$this->age.'<br>';
  }
}

final class Employee extends Person {
  protected $salary;

  public function loadSalary($salary) {
    $this->salary = $salary;
  }

  public function printSalary() {
    echo 'Sueldo:' . $this->salary.'<br>';
  }
}

$per1 = new Person();
$per1->loadData('Roberto', 35);
$per1->printData();

$emp1 = new Employee();
$emp1->loadData('Jorge', 30);
$emp1->loadSalary(3500);
$emp1->printData();
$emp1->printSalary();
?>
</body>
</html>