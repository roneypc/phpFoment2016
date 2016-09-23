<?php
require 'Bombilla.php';
require 'Coche.php';

$bombilla = new Bombilla();
$bombilla->encender();

$coche = new Coche();
$coche->cargar_gasolina(10);

for($i = 0; $i < 11; $i++) {
	$coche->encender();
	$coche->apagar();
	$coche->getBateria();
}
?>