<?php
class CollaborateFoot {
  private $title;

  public function __construct($title) {
    $this->title = $title;
  }
  
  public function draw() {
	echo '<div class="w3-container w3-teal">';
	echo '<h5>' . $this->title . '</h5>';
	echo '</div>';
  }

}
?>