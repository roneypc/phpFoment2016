<html>
<head>
<title>Collaborate</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
</head>
<body>

<?php

require 'require/CollaborateHeader.php';
require 'require/CollaborateBody.php';
require 'require/CollaborateFoot.php';

class Page {
  private $header;
  private $body;
  private $foot;

  public function __construct($texto1, $texto2) {
    $this->header = new CollaborateHeader($texto1);
    $this->body = new CollaborateBody();
    $this->foot = new CollaborateFoot($texto2);
  }

  public function insertLine($texto) {
    $this->body->insertParagraph($texto);
  }

  public function draw() {
    $this->header->draw();
    $this->body->draw();
    $this->foot->draw();
  }
}

$pagina1 = new Page('Título de la Página', 'Pie de la página');
$pagina1->insertLine('Esto es una prueba para dentro del body de la página 1');
$pagina1->insertLine('Esto es una prueba para dentro del body de la página 2');
$pagina1->insertLine('Esto es una prueba para dentro del body de la página 3');
$pagina1->insertLine('Esto es una prueba para dentro del body de la página 4');
$pagina1->insertLine('Esto es una prueba para dentro del body de la página 5');
$pagina1->insertLine('Esto es una prueba para dentro del body de la página 6');
$pagina1->insertLine('Esto es una prueba para dentro del body de la página 7');
$pagina1->insertLine('Esto es una prueba para dentro del body de la página 8');
$pagina1->insertLine('Esto es una prueba para dentro del body de la página 9');
$pagina1->draw();
?>
</body>
</html>