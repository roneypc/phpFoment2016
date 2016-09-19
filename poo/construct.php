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
  private $color;

  public function __construct($title, $location, $color) {
    $this->title = $title;
    $this->location = $location;
    $this->color = $color;
  }

  public function graph() {
    $align = "center";
    if($this->location != $align) {
      $align = $this->location . "-align";
    }
    echo '<div class="w3-container w3-' . $align . ' w3-' . $this->color . '">';
    echo "<h1>" . $this->title . "</h1>";
    echo '</div>';
  }
}

$header = new Header('El blog del programador','right', 'blue');
$header->graph();
?>

</body>
</html>