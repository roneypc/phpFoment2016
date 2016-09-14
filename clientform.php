<html>
<head>
	<link rel="stylesheet" type="text/css" href="http://www.w3schools.com/lib/w3.css">
</head>
<body>

<form action="serverform.php" method="post" class="w3-container w3-card-4 w3-light-grey">
	<label>Nombre</label>
	<input class="w3-input" type="text" name="name">
	<span class="error">* <?php echo $nameErr;?></span>

	<label>Apellido</label>
	<input class="w3-input" type="text" name="lastname">
	<span class="error">* <?php echo $lastnameErr;?></span>

	<label>Email</label>
	<input class="w3-input" type="text" name="email">
	<span class="error">* <?php echo $emailErr;?></span>

	<label>Género</label>
	<input class="w3-input" type="radio" name="gender" value="Mujer">Mujer
	<input type="radio" name="gender" value="Hombre">Hombre
	<span class="error">* <?php echo $genderErr;?></span>
	
	<input type="submit" name="submit" value="Submit">
</form>

</body>
</html> 