<?php
$page = $_SERVER['PHP_SELF'];
$sec = "3";
?>
<html>
<head>
<title>Pruebas</title>
<meta http-equiv="refresh" content="1<?php echo $sec?>;URL='<?php echo $page?>'">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
</head>
<body>

<?php

require 'require/TableCell.php';

class Table {
  private $matrix = array();
  private $arrayColor = array("#D0F5A9", "#A9F5F2", "#F6D8CE", "#F6CED8", "#A9A9F5", "#81F781", "#F79F81", "#FA5858", "#00FFBF", "#FFFFFF");
  private $rowNumber;
  private $columnNumber;
  private $initValue;
  private $incremental;
  private $textColor;

  public function __construct($rowNumber, $columnNumber, $initValue, $incremental, $textColor) {
    $this->rowNumber = $rowNumber;
    $this->columnNumber = $columnNumber;
    $this->initValue = $initValue;
    $this->incremental = $incremental;
    $this->textColor = $textColor;

    $this->loadValues();
  }

  public function drawTable() {
    $this->tableBegin();
    for($i=0; $i < $this->rowNumber; $i++) {
      $this->rowBegin();
      for($j=0; $j < $this->columnNumber; $j++) {
        $this->matrix[$i][$j]->draw();
      }
      $this->rowEnd();
    }
    $this->tableEnd();
  }

  private function loadValues() {
    for($i = 0; $i < $this->rowNumber; $i++) {
      for($j = 0; $j < $this->columnNumber; $j++) {
        $this->insertCellValue(new TableCell($this->initValue, $this->textColor, $this->arrayColor[rand(0,9)]), $i, $j);
        $this->initValue += $this->incremental;
      }
    }
  }

  private function insertCellValue($tableCell, $row, $column) {
    $this->matrix[$row][$column] = $tableCell;
  }

  private function tableBegin() {
    echo '<table class="w3-table w3-bordered w3-striped w3-border w3-hoverable w3-text-' . $this->textColor . '">';
  }

  private function tableEnd() {
    echo '</table>';
  }

  private function rowBegin() {
    echo '<tr>';
  }

  private function rowEnd() {
    echo '</tr>';
  }

  public function getRowNumber() {
    return $this->rowNumber;
  }

  public function getColumnNumber() {
    return $this->columnNumber;
  }
}

$tabla1 = new Table(20, 12, 5, 10, "blue");
$tabla1->drawTable();
echo "<br><strong>Size: " . $tabla1->getRowNumber() . " x " . $tabla1->getColumnNumber() . "</strong>";
?>

</body>
</html>