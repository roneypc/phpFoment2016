<?php
/**
* Celda
*/
class TableCell {

	private $value;
	private $cellColor;
	private $cellBackColor;

	function __construct($value, $cellColor, $cellBackColor) {
		$this->value = $value;
		$this->cellColor = $cellColor;
		$this->cellBackColor = $cellBackColor;
	}

	public function draw() {
		echo '<td style="color: ' . $this->cellColor . '; background-color: ' . $this->cellBackColor . '">' . $this->value . '</td>';
	}
}
?>