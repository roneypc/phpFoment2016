<html>
<head>
	<link rel="stylesheet" type="text/css" href="http://www.w3schools.com/lib/w3.css">
</head>
<body>

<?php

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

// define variables and set to empty values
$nameErr = $lastnameErr = $emailErr = $genderErr = "";
$name = $lastname = $email = $gender = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") :

  if (empty($_POST["name"])) {
    $nameErr = " * El Nombre es requerido";
  } elseif(!preg_match("/^[a-zA-Z ]*$/", $_POST["name"])) {
  	$nameErr = "Sólo se permiten letras y espacios";
  } else {
    $name = test_input($_POST["name"]);
  }

  if (empty($_POST["lastname"])) {
    $lastnameErr = " * El Apellido es requerido";
  } elseif(!preg_match("/^[a-zA-Z ]*$/", $_POST["lastname"])) {
  	$lastnameErr = "Sólo se permiten letras y espacios";
  }
  else {
    $lastname = test_input($_POST["lastname"]);
  }

  if (empty($_POST["email"])) {
    $emailErr = " * El Email es requerido";
  } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  	$emailErr = "El email no es correcto";	
  }
  else {
    $email = test_input($_POST["email"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = " * El Genéro es requerido";
  } else {
    $gender = test_input($_POST["gender"]);
  }
?>

<?php 
	if(empty($nameErr) && empty($lastnameErr) && empty($emailErr)) : ?>
	<div>
		<h2>Hola</h2>
		Bienvenido <?php echo $name ?> <?php echo $lastname ?>
		<br>Eres <?php echo $gender ?>
		<br>
	</div>
<?php 
	endif;  
	endif;
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="w3-container w3-card-4 w3-light-grey">
	<label>Nombre</label><span class="w3-red"><?php echo $nameErr;?></span>
	<input class="w3-input" type="text" name="name" value="<?= $name ?>">

	<label>Apellido</label><span class="w3-red"><?php echo $lastnameErr;?></span>
	<input class="w3-input" type="text" name="lastname" value="<?= $lastname ?>">

	<label>Email</label><span class="w3-red"><?php echo $emailErr;?></span>
	<input class="w3-input" type="text" name="email" value="<?= $email ?>">

	<label>Género</label><span class="w3-red"><?php echo $genderErr;?></span>
	<input class="w3-radio" type="radio" name="gender" value="Hombre" checked="<?php if($gender == "Hombre") echo "true"; else echo "false"; ?>">
	<label class="w3-validate">Hombre</label>
	<input class="w3-radio" type="radio" name="gender" value="Mujer" checked="<?php if($gender == "Mujer") echo "true"; else echo "false"; ?>">
	<label class="w3-validate">Mujer</label>
	
	<input type="submit" name="submit" value="Submit">
</form>

</body>
</html>