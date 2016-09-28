<?php
require_once 'Alfajor.php';
require_once 'BizcochueloVainilla.php';

$alfajor = new Alfajor ();
$bvainilla = new BizcochueloVainilla ();

echo $bvainilla->get_ingredientes ();

?>