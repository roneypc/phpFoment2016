
<!DOCTYPE html>
<html>
<title>Examen Final Prova Practica Modul 2</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">

<body>
	<div class="w3-card-4">

	<div class="w3-container w3-brown">
	  <h2>Registre d'empleats</h2>
	</div>
	<form class="w3-container" method="POST" action="/examen.php">

	<p>
	<label class="w3-label w3-text-brown"><b>Nom</b></label>
	<input class="w3-input w3-border w3-sand" name="nom" type="text"></p>

	<p>
	<label class="w3-label w3-text-brown"><b>Cognom</b></label>
	<input class="w3-input w3-border w3-sand" name="cognom" type="text"></p>
	<p>

	<p>
	<label class="w3-label w3-text-brown"><b>Data Naix.</b><i> (format: 2016-07-17)</i></label>
	<input class="w3-input w3-border w3-sand" name="datanaix" type="text"></p>
	
	<p>
	<label class="w3-label w3-text-brown"><b>Ciudad</b></label>
	<input class="w3-input w3-border w3-sand" name="ciudad" type="text"></p>
	
	<p><button type="submit" class="w3-btn w3-brown">Enregistrar</button></p>

	</form>
</div>
	
<div class="w3-container w3-responsive">
Se ha creado un nuevo registro
<table class="w3-table w3-bordered w3-striped w3-large">
	
</table>
</div>
<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "db_sample_test";
	$conn = new mysqli($servername, $username, $password, $dbname);
	$nombre = "nombre";
	$apellido = "apellido";
	$fecha = "fecha";
	$ciudad = "ciudad";

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$sql = "SELECT * FROM person order by id_person desc";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		echo "<table class='w3-table w3-bordered w3-striped w3-large'>";
		echo "<tr><th>id_usuario</th><th>nombre</th><th>apellido</th><th>fecha</th><th>ciudad</th></tr>";
    // output data of each row
		while($row = $result->fetch_assoc()) {
			echo "<tr><td>".$row["id_usuario"]."</td><td>".$row["nombre"]." ".$row["apellido"]." <td>".$row["fecha"]."</td><td>".$row["ciudad"]."</td></tr>";
		}
		echo "</table>";
	} 
	else {
		echo "0 results";
	}
	
	$sql = "INSERT INTO person (name, lastname, birthdate, city)
	VALUES ('" .$nombre . "', '" . $apellido . "', '" . $fecha . "', '" . $ciudad . "');";

	if ($conn->query($sql) === TRUE) {
	    echo "Se ha creado un nuevo registro";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
	
?>
</body>
</html>