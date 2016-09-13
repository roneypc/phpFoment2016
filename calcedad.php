<!DOCTYPE html>
<html>
<body>

<?php
function familyName($fname, $year) {
	$edad = date("Y") - $year;
    echo "$fname Refsnes. Born in $year. Tienes $edad años. <br>";
}

familyName("Hege","1975");
familyName("Stale","1978");
familyName("Kai Jim","1983");
?>

</body>
</html>