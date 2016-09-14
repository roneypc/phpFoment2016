<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="http://www.w3schools.com/lib/w3.css">
</head>
<body>

<?php
if(empty($_GET['num1']) || empty($_GET['num2'])) : ?>
	<div class="w3-panel w3-red">
		Error..! Debe ingresar los parámetros num1 y num2	
	</div>
<?php else: ?>
	<div class="w3-panel w3-green">
		<?php
			$num1 = $_GET['num1'];
			$num2 = $_GET['num2'];

			$suma = $num1 + $num2;
			echo "$num1 + $num2 = $suma";
		?>		
	</div>
<?php endif ?>
</body>
</html>