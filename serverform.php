<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $lastnameErr = $emailErr = $genderErr = "";
// define variables and set to empty values
$name = $lastname = $email = $gender = "";

$msg = "< ? =   es igual a   < ? php  echo";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $lastname = test_input($_POST["lastname"]);
  $email = test_input($_POST["email"]);
  $gender = test_input($_POST["gender"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<?php
echo "<h2>Has ingresado:</h2>";
echo "Nombre: $name";
echo "<br>";
echo "Apellido: $lastname";
echo "<br>";
echo "Correo: $email";
echo "<br>";
echo "Género: $gender";
echo "<br>HTML: $msg";

?>

</body>
</html>
