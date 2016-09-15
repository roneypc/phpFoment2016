<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 <?php
$readit = readfile("files/webdictionary.txt");
$exploded = explode(PHP_EOL, $readit);
echo "2da linea: " . $exploded[0];
?> 
</body>
</html>