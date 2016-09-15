<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php

// Si se hace la petición por GET...
if ($_SERVER["REQUEST_METHOD"] == "GET") {
	// Recuperar usuario y password
	$user = $_GET['user'];
	$pass = $_GET['pass'];
    if (empty($user) || empty($pass)) {
        echo "User y Password son requeridos";
    } else {
    	// Leer el fichero de acceso
        $accessfile = file_get_contents("files/access.txt");
        // Dividir el texto por cada 'fin de linea'
        $allusers = explode(PHP_EOL, $accessfile);
        // Flag
        $access = false;
        // Recorrer todas las líneas (todos los usuarios)
        foreach ($allusers as $userpass) {
        	// Dividir la línea por ':' (separar en usuario y password)
        	$login = explode(":", $userpass);
        	// Si el usuario y el password coinciden...
        	if($login[0] == $user && $login[1] == $pass) {
        		// Ha ingresado.
        		echo "Has ingresado correctamente!";
        		$access = true;
        		exit;
        	}
		}

		// Si ningún usuario/password ha coincidido...
		if(!$access) {
			echo "Lo siento, no tienes acceso :(";
		}
    }
}

?>

</body>
</html>