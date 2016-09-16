<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

 <?php
$filesize = filesize("files/newfile.txt");
if($filesize < 500) {
	$myfile = fopen("files/newfile.txt", "a") or die("Unable to open file!");
	$txt = "Mickey Mouse\n";
	fwrite($myfile, $txt);
	$txt = "Minnie Mouse\n";
	fwrite($myfile, $txt);
	echo "Peso del fichero: " . filesize("files/newfile.txt");
	fclose($myfile);
} else {
	echo "El peso del fichero [$filesize] ha superado el máximo (500)";
}
?> 

</body>
</html>