<?php
require 'SeleccionFutbol.php';
require 'Futbolista.php';
require 'Entrenador.php';
require 'Masajista.php';

$delBosque = new Entrenador ( 1, "Vicente", "Del Bosque", 60, 28489 );
$iniesta = new Futbolista ( 2, "Andres", "Iniesta", 29, 6, "Interior Derecho" );
$raulMartinez = new Masajista ( 3, "Raúl", "Martinez", 41, "Licenciado en Fisioterapia", 18 );

$integrantes = array (
		$delBosque,
		$iniesta,
		$raulMartinez
);

// CONCENTRACION
echo '<hr>Todos los integrantes comienzan una concentracion. (Todos ejecutan el mismo método)';
foreach ( $integrantes as $integrante ) {
	echo '<br>' . $integrante->getNombre () . ' ' . $integrante->getApellidos () . ' -> ';
	$integrante->concentrarse ();
}

// VIAJE
echo '<hr>Todos los integrantes viajan para jugar un partido. (Todos ejecutan el mismo método)';
foreach ( $integrantes as $integrante ) {
	echo '<br>' . $integrante->getNombre () . ' ' . $integrante->getApellidos () . ' -> ';
	$integrante->viajar ();
}

// ENTRENAMIENTO
echo '<hr>Entrenamiento: Todos los integrantes tienen su función en un entrenamiento (Especialización)';
foreach ( $integrantes as $integrante ) {
	echo '<br>' . $integrante->getNombre () . ' ' . $integrante->getApellidos () . ' -> ';
	$integrante->entrenamiento ();
}

// PARTIDO DE FUTBOL
echo '<hr>Partido de Fútbol: Todos los integrantes tienen su función en un partido (Especialización)';
foreach ( $integrantes as $integrante ) {
	echo '<br>' . $integrante->getNombre () . ' ' . $integrante->getApellidos () . ' -> ';
	$integrante->partidoFutbol ();
}

// PLANIFICAR ENTRENAMIENTO
echo '<hr>Planificar Entrenamiento: Solo el entrenador tiene el método para planificar un entrenamiento:';
echo '<br>' . $delBosque->getNombre () . ' ' . $delBosque->getApellidos () . ' -> ';
$delBosque->planificarEntrenamiento ();

// ENTREVISTA
echo '<hr>Entrevista: Solo el futbolista tiene el método para dar una entrevista:';
echo '<br>' . $iniesta->getNombre () . ' ' . $iniesta->getApellidos () . ' -> ';
$iniesta->entrevista ();

// MASAJE
echo '<hr>Masaje: Solo el masajista tiene el método para dar un masaje:';
echo '<br>' . $raulMartinez->getNombre () . ' ' . $raulMartinez->getApellidos () . ' -> ';
$raulMartinez->darMasaje ();
?>