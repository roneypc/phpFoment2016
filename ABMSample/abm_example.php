<?php
require_once ('usuarios_model.php');
require_once 'shops_model.php';

// Traer los datos de un usuario
$usuario1 = new Usuario ();
$usuario1->get ( 'mail@mail.com' );
print $usuario1->nombre . ' ' . $usuario1->apellido . ' existe<br>';

// Crear un nuevo usuario
$new_user_data = array (
		'nombre' => 'Alberto',
		'apellido' => 'Jacinto',
		'email' => 'albert2000@mail.com',
		'clave' => 'jacaranda'
);
$usuario2 = new Usuario ();
$usuario2->set ( $new_user_data );
$usuario2->get ( $new_user_data ['email'] );
print $usuario2->nombre . ' ' . $usuario2->apellido . ' ha sido creado<br>';
// Editar los datos de un usuario existente
$edit_user_data = array (
		'nombre' => 'Gabriel',
		'apellido' => 'Lopez',
		'email' => 'mail@mail.com',
		'clave' => '69274'
);
$usuario3 = new Usuario ();
$usuario3->edit ( $edit_user_data );
$usuario3->get ( $edit_user_data ['email'] );
print $usuario3->nombre . ' ' . $usuario3->apellido . ' ha sido editado<br>';
// Eliminar un usuario
$usuario4 = new Usuario ();
$usuario4->get ( 'lei@mail.com' );
$usuario4->delete ( 'lei@mail.com' );
print $usuario4->nombre . ' ' . $usuario4->apellido . ' ha sido eliminado';

// Pruebas de shop
print '<hr>';
$shop1 = new Shop ();
$shop1->get ( '99887654R' );
print $shop1->nombre . ' ' . $shop1->codigo . ' ' . $shop1->tipo . ' existe<br>';

// Crear un nuevo shop
date_default_timezone_set ( 'Europe/Madrid' );
$new_shop_data = array (
		'nombre' => 'Isolux',
		'tipo' => 'Bombillas',
		'ubicacion' => 'Rambla Badal',
		'codigo' => '08092',
		'nif' => '37564040M',
		'alta' => date ( 'Y-m-d H:i:s' ),
		'idUser' => '1'
);
$shop2 = new Shop ();
$shop2->set ( $new_shop_data );
$shop2->get ( $new_shop_data ['nif'] );
print $shop2->nombre . ' ' . $shop2->codigo . ' ' . $shop2->tipo . ' ha sido creado<br>';

// Editar los datos de un shop existente
print '<hr>';
$edit_shop_data = array (
		// 'nombre' => 'Isolux',
		'tipo' => 'Bombillas',
		// 'ubicacion' => 'Rambla Badal',
		// 'codigo' => '99999',
		'nif' => '37564040M'
);
// 'alta' => date ( 'Y-m-d H:i:s' ),
// 'idUser' => '1'

$shop3 = new Shop ();
$shop3->edit ( $edit_shop_data );
$shop3->get ( $edit_shop_data ['nif'] );
print $shop3->nombre . ' ' . $shop3->codigo . ' ' . $shop3->tipo . ' ha sido editado<br>';

// Eliminar un usuario
print '<hr>';
$shop4 = new Shop ();
print 'Borrando 19887654R';
$shop4->delete ( '19887654R' );
print '. Hecho';
?>