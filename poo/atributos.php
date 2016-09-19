<html>
<head>
<title>Pruebas</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
</head>
<body>
<?php
class Menu {
  private $enlaces=array();
  private $titulos=array();
  public function cargarOpcion($en, $tit) {
    $this->enlaces[] = $en;
    $this->titulos[] = $tit;
  }

  public function showHorizontalMenu() {
    for($f=0; $f < count($this->enlaces); $f++) {
      echo '<a href="' . $this->enlaces[$f] . '" title="' . $this->titulos[$f]. '">'.$this->titulos[$f].'</a>';
      echo "-";
    }
  }

  public function showVerticalMenu() {
    echo '<ul class="w3-ul w3-hoverable">';
    for($f=0; $f < count($this->enlaces); $f++) {
      echo '<li class="w3-hover-blue"><a href="' . $this->enlaces[$f] . '" title="' . $this->titulos[$f]. '">'.$this->titulos[$f].'</a></li>';
    }
    echo "</ul>";
  }
}

$menu1 = new Menu();
$menu1->cargarOpcion('http://www.google.com','Google');
$menu1->cargarOpcion('http://www.yahoo.com','Yahoo');
$menu1->cargarOpcion('http://www.msn.com','MSN');
//$menu1->showHorizontalMenu();
$menu1->showVerticalMenu();
?>
</body>
</html>