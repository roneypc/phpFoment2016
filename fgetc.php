<!DOCTYPE html>
<html>
<body>

<?php
$myfile = fopen("files/webdictionary.txt", "r") or die("Unable to open file!");
// Output one line until end-of-file
$counter = 0;
$strsearch = "php";
while(!feof($myfile)) {
	$line = fgets($myfile);
	$counter++;

	echo $counter . "[" . strlen(str_replace(array("\r", "\n"), '', $line)) ."]: " . $line . "<br>";

	// if(stripos($line, $strsearch) !== false) {
	// 	echo "Encontrado $strsearch: " . $line . "<br>";
	// 	echo "en la línea $counter";
	// }
}
fclose($myfile);
?>

</body>
</html>
