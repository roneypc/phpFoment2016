<html>
<head>
<title>Pruebas</title>
</head>

<body>
<?php
/*
Clase Operacion
*/
abstract class Operacion {
  protected $v1;
  protected $v2;
  protected $result;

  public function __construct($v1, $v2) {
    $this->v1 = $v1;
    $this->v2 = $v2;
  }

  public function printResult() {
    echo $this->result;
  }
}

/*
Clase Suma
*/
class Suma extends Operacion {
  private $title;

  public function __construct($v1, $v2, $title) {
    parent::__construct($v1, $v2);
    $this->title = $title;
  }

  public function operate() {
    $this->result = $this->v1 + $this->v2;
  }

  public function printResult() {
    echo $this->title . ': ';
    echo parent::printResult();
  }
}

$suma = new Suma(10, 20, 'Suma');
$suma->operate();
$suma->printResult();

$operate = new Operacion();
?>
</body>
</html>