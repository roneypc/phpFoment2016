<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">

	<style>
		.w3-btn {margin:10px;}
	</style>

	<script type="text/javascript">
	function ask_delete(id, name, lastname) {
		document.getElementById('id_to_delete').value = id;
		document.getElementById('delete_title').innerHTML = "Eliminar a la persona " + name + " " + lastname;
		document.getElementById('id01').style.display='block';
	}

	function prepare_to_edit(id, name, lastname, birthdate, city) {
		document.getElementById('id').value = id;
		document.getElementById('name').value = name;
		document.getElementById('lastname').value = lastname;
		document.getElementById('birthdate').value = birthdate;
		document.getElementById('city').value = city;
	}
	</script>
</head>

<body>

<?php 
	// if(isset($_POST["name"]) && isset($_POST["lastname"]) && isset($_POST["birthdate"]) && isset($_POST["city"])) {
	if(!IsNullOrEmpty($_POST["name"]) && !IsNullOrEmpty($_POST["lastname"]) && !IsNullOrEmpty($_POST["birthdate"]) && !IsNullOrEmpty($_POST["city"])) {
		$name = $_POST["name"];
		$lastname = $_POST["lastname"];
		$birthdate = $_POST["birthdate"];
		$city = $_POST["city"];

		if(!IsNullOrEmpty($_POST["id"])) {
			updateData($_POST["id"], $name, $lastname, $birthdate, $city);
		} else {
			insertData($name, $lastname, $birthdate, $city);
		}
	}

	if(!IsNullOrEmpty($_POST["id_to_delete"])) {
		$id = $_POST["id_to_delete"];
		deleteData($_POST["id_to_delete"]);
	}
?>

<div class="w3-card-4">
	<div class="w3-container w3-brown">
	  <h2>Registro de Empleados</h2>
	</div>
	<form class="w3-container" method="POST" action="listperson.php">
		<input type="hidden" id="id" type="text" name="id">
		<p>
		<label class="w3-label w3-text-brown"><b>Nombre</b></label>
		<input class="w3-input w3-border w3-sand" id="name" name="name" type="text"></p>

		<p>
		<label class="w3-label w3-text-brown"><b>Apellido</b></label>
		<input class="w3-input w3-border w3-sand" id="lastname" name="lastname" type="text"></p>

		<p>
		<label class="w3-label w3-text-brown"><b>Fecha Nac.</b><i> (formato: 2016-07-17)</i></label>
		<input class="w3-input w3-border w3-sand" id="birthdate" name="birthdate" type="text"></p>

		<p>
		<label class="w3-label w3-text-brown"><b>Ciudad</b></label>
		<input class="w3-input w3-border w3-sand" id="city" name="city" type="text"></p>

		<p>
			<button class="w3-btn w3-brown">Registrar</button>
			<button class="w3-btn w3-brown" type="button" onclick="javascript:prepare_to_edit('','','','','')">Limpiar</button>
		</p>
	</form>

	<form id="form_to_delete" action="listperson.php" method="POST">
		<input type="hidden" id="id_to_delete" type="text" name="id_to_delete">
	</form>
</div>

<div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-8">
      <header class="w3-container w3-brown"> 
        <span onclick="document.getElementById('id01').style.display='none'" 
        class="w3-closebtn">&times;</span>
        <h2 id="delete_title"></h2>
      </header>
      <div class="w3-container">
        <p>¿Está seguro que desea eliminar a la persona?</p>
      </div>
      <footer class="w3-container w3-brown">
        <p><button class="w3-btn w3-white w3-border w3-border-red w3-round-xlarge" onclick="document.getElementById('id01').style.display='none'">Cancelar</button><button class="w3-btn w3-white w3-border w3-border-blue w3-round-xlarge" type="submit" form="form_to_delete" value="Submit">Eliminar</button></p>
      </footer>
    </div>
  </div>
</div>

<div class="w3-container w3-responsive">
Se ha creado un nuevo registro
<?php echo getTableWithData(); ?>
</div>

<?php

function getTableWithData() {
	$conn = getDBConnection();

	$sql = "SELECT id_person, name, lastname, birthdate, city FROM person order by id_person desc";
	$result = $conn->query($sql);

	$html = "0 results";
	if ($result->num_rows > 0) {
		$html = "<table class='w3-table-all'>";
		$html .= "<tr><th>ID</th>";
		$html .= "<th>Nombre</th>";
		$html .= "<th>Apellido</th>";
		$html .= "<th>Fecha Nac.</th>";
		$html .= "<th>Ciudad</th>";
		$html .= "<th>Acción</th></tr>";
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	    	$html .= "<tr><td>" . $row["id_person"] . "</td>";
	    	$html .= "<td>" . $row["name"] . "</td>";
	    	$html .= "<td>" . $row["lastname"]."</td>";
	    	$html .= "<td>" . $row["birthdate"]."</td>";
	    	$html .= "<td>" . $row["city"]."</td>";
	    	$html .= "<td><img onclick=\"javascript:prepare_to_edit('" . $row["id_person"] . "', '" . $row["name"] . "', '" . $row["lastname"] . "', '" . $row["birthdate"] . "', '" . $row["city"] . "');\" src='edit.png' height='32' width='32'/>";

	    	$html .= "<img onclick=\"javascript:ask_delete('" . $row["id_person"] . "', '" . $row["name"] . "', '" . $row["lastname"] . "');\" src='delete.png' height='32' width='32'/></td></tr>";
	    }
	} 
	$conn->close();

	return $html;
}

function insertData($name, $lastname, $birthdate, $city) {
	$conn = getDBConnection();

	$sql = "INSERT INTO person (name, lastname, birthdate, city)
	VALUES ('" .$name . "', '" . $lastname . "', '" . $birthdate . "', '" . $city . "');";

	if ($conn->query($sql) === TRUE) {
	    //echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
}

function updateData($id, $name, $lastname, $birthdate, $city) {
	$conn = getDBConnection();

	$sql = "UPDATE person set name='" . $name . "', lastname='" . $lastname . "', birthdate='" . $birthdate . "', city='" . $city . "' WHERE id_person = " . $id;

	if ($conn->query($sql) === TRUE) {
	    //echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();	
}

function deleteData($id) {
	$conn = getDBConnection();

	// sql to delete a record
	$sql = "DELETE FROM person WHERE id_person=" . $id;

	if ($conn->query($sql) === TRUE) {
	    //echo "Record deleted successfully";
	} else {
	    echo "Error deleting record: " . $conn->error;
	}

	$conn->close();
}

function getDBConnection() {
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "db_sample_test";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
	return $conn;
}

function IsNullOrEmpty($str){
    return (!isset($str) || trim($str)==='');
}
?>

</body>
</html>
