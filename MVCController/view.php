<?php
/**
 *
 * @param unknown $vista
 * @return string[]
 */
function set_identificadores($vista) {
	$identificadores = array ();
	if ($vista) {
		switch ($vista) {
			case 'vista_1' :
				$identificadores = array (
						'propiedad'
				);
				break;
			case 'vista_2' :
				$identificadores = array (
						'propiedad_1',
						'propiedad_2'
				);
				break;
		}
		return $identificadores;
	}
}

/**
 *
 * @param unknown $vista
 * @param unknown $data
 * @return unknown[]
 */
function armar_diccionario($vista, $data) {
	$diccionario = array ();
	$identificadores = set_identificadores ( $vista );
	if ($identificadores) {
		foreach ( $identificadores as $identificador ) {
			if (array_key_exists ( $identificador, $data )) {
				$diccionario [$identificador] = $data [$identificador];
			}
		}
	}
	return $diccionario;
}

/**
 *
 * @param unknown $vista
 * @param unknown $data
 */
function render_data($vista, $data) {
	$html = '';
	if (($vista) && ($data)) {
		$diccionario = armar_diccionario ( $vista, $data );
		if ($diccionario) {
			$html = file_get_contents ( 'html/' . $vista . '.html' );
			foreach ( $diccionario as $clave => $valor ) {
				$html = str_replace ( '{' . $clave . '}', $valor, $html );
			}
		}
	}
	print $html;
}

require_once 'models.php';
$vista = 'vista_2';
$data = new ModeloDos ();
$data->b ( 10, 20 );
settype ( $data, 'array' );
render_data ( $vista, $data );
