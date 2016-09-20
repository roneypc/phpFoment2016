<?php
class CollaborateBody {
  private $lines = array();

  public function insertParagraph($line) {
    $this->lines[] = $line;
  }

  public function draw() {
    for($i=0; $i < count($this->lines); $i++) {
      echo '<p>' . $this->lines[$i] . '</p>';
    }
  }

}
?>