<html>
<head>
<title>Pruebas</title>
</head>
<body>
<?php

class Operacion {
  protected $valor1;
  protected $valor2;
  protected $resultado;

  function __construct($valor1, $valor2) {
    $this->valor1 = $valor1;
    $this->valor2 = $valor2;
  }

  public function imprimirResultado() {
    echo $this->resultado . '<br>';
  }
}

class Suma extends Operacion {
  public function operar() {
    $this->resultado = $this->valor1+$this->valor2; 
  }
}

class Resta extends Operacion {
  public function operar() {
    $this->resultado = $this->valor1-$this->valor2;
  }
}

class Modulo extends Operacion {
  public function operar() {
   $this->resultado = $this->valor1 % $this->valor2;
  }
}

$valor1 = $_GET["valor1"];
$valor2 = $_GET["valor2"];
$operate = $_GET["operate"];
$operate = strtolower($operate);

if($operate == "suma") {
  $operation = new Suma($valor1, $valor2);
} elseif ($operate == "resta") {
  $operation = new Resta($valor1, $valor2);
} elseif ($operate == "modulo") {
  $operation = new Modulo($valor1, $valor2);
} else {
  
}

$operation->operar();
echo 'El resultado de ' . $operate . ' de ' .$valor1 . ' y ' . $valor2 . ' es: ';
$operation->imprimirResultado();
?>
</body>
</html> 