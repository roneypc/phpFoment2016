 <?php
$numbers = array(10, 12, 13, 4, 5, 16, 7, 18, 9, 10);

foreach ($numbers as $value) {
    if($value % 2 == 0) {
        echo "$value es par<br>";
    } else {
        echo "$value es impar<br>";
    }
}
?> 