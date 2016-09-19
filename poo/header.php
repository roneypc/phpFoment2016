<html>
<head>
<title>Pruebas</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
</head>
<body>

<?php
class Header {
  private $title;
  private $location;

  public function init($title, $location) {
    $this->title = $title;
    $this->location = $location;
  }

  public function graph2() {
    echo '<div class="w3-container w3-' . $this->location . '">';
    echo $this->title;
    echo '</div>';
  }
}

$header = new Header();
$header->init('El blog del programador','right');
$header->graph2();

$header->init('El blog del programador','left');
$header->graph2();
?>

</body>
</html>