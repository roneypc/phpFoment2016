<?php
require_once 'usuarios_model.php';

$diccionario = array (
		'Título de la Página' => 'Gestión de Usuarios'
);

// Obtener la plantilla
$template = file_get_contents ( 'view.tpl' );

// Impresion de propiedades estaticas
foreach ( $diccionario as $clave => $valor ) {
	$template = str_replace ( '{' . $clave . '}', $valor, $template );
}

// Obtener un usuario
$email = $_GET ['email'];
$usuario = new Usuario ();
$usuario->get ( $email );

// Impresion de propiedades dinamicas
foreach ( $usuario->getRows () [0] as $clave => $valor ) {
	$template = str_replace ( '{' . $clave . '}', $valor, $template );
}

print $template;
?>