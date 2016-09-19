<html>
<head>
<title>Pruebas</title>
</head>
<body>

<?php
class Persona {
  private $nombre; // string
  private $edad; // entero

  /*
  Inicializar nombre y edad
  */  
  public function inicializar($nom, $edad) {
    $this->nombre=$nom;
    $this->edad=$edad;
  }
  
  /*
  Imprimir el nombre
  */
  public function imprimir() {
    echo "<br> Hola " . $this->nombre . ". Tienes " .$this->edad . " años.";
  }

  /*
  Incrementa la edad e imprime un saludo
  */
  public function cumple() {
    $this->edad++;
    echo "<br>Feliz " . $this->edad . " cumpleaños " .$this->nombre ."..!";
  }
}

$per1=new Persona();
$per1->inicializar('Juan', 33);
$per1->imprimir();
$per1->cumple();
$per2=new Persona();
$per2->inicializar('Ana', 25);
$per2->imprimir();
$per2->cumple();
$per1->cumple();
?>
</body>
</html>
