<?php
class CollaborateHeader {
  private $title;

  public function __construct($title) {
    $this->title = $title;
  }

  public function draw() {
	echo '<div class="w3-container w3-teal w3-center">';
	echo '<h1>' . $this->title . '</h1>';
	echo '</div>';
  }

}
?>