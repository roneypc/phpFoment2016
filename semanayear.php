<!DOCTYPE html>
<html>
<body>

<?php
setlocale(LC_TIME, 'es_ES.UTF-8');
$fecha = date("Y/m/d");
echo "La fecha es $fecha";
echo "<br>La semana del año es " . date("W");

// Sintaxis: mktime(hour,minute,second,month,day,year) 

$d=mktime(24, 14, 54, 13, 55, 2014);

//Si ponemos mes=13 --> el año se suma 1
echo "<br> Fecha creada: " . date("Y-m-d h:i:sa", $d);

$d = strtotime("+20 days");
echo "<br>Fecha parseada: " . date("l d-m-Y", $d);

$fec1 = mktime(0,0,0,1,1,1970);
$dif = ceil((time()-$fec1)/60/60/24);
echo "<hr>Fecha inicial: " . date("l d-m-Y h:i:sa", $fec1);
echo "<br>Dias desde hoy hasta inicio: " . $dif;
echo "<br>Meses desde hoy hasta inicio: " . $dif/30;

$fakeNow = mktime(0, 0, 0, 568, 20, 1970);
$fakeDiff = ceil(($fakeNow - time())/60/60/24);
echo "<br>Fecha calculada desde el inicio: " . date("d-m-Y", $fakeNow);
echo "<br>Dias desviación: " . $fakeDiff;
?>

</body>
</html>