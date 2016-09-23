<html>
<head>
<title>OverMethod</title>
</head>
<body>

<?php
abstract class Operacion {
  protected $valor1;
  protected $valor2;
  protected $resultado;
  
  /**
   * Carga valor 1
   */
  public function cargar1($v) {
    $this->valor1=$v;
  }

  /**
   * Carga valor 2
   */
  public function cargar2($v) {
    $this->valor2=$v;
  }

  /**
   * Impresión del resultado
   */
  public function imprimirResultado() {
    echo $this->resultado.'<br>';
  }

  public abstract function operar();
}

class Suma extends Operacion {
  public function operar() {
    $this->resultado=$this->valor1+$this->valor2;
  }
}

class Resta extends Operacion {
  public function operar() {
    $this->resultado=$this->valor1-$this->valor2;
  }
}

$suma=new Suma();
$suma->
$suma->cargar1(10);
$suma->cargar2(10);
$suma->operar();
echo 'El resultado de la suma de 10+10 es:';
$suma->imprimirResultado();

$resta=new Resta();
$resta->cargar1(10);
$resta->cargar2(5);
$resta->operar();
echo 'El resultado de la diferencia de 10-5 es:';
$resta->imprimirResultado();
?>

</body>
</html>