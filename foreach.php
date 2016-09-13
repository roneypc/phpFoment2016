 <?php
$numbers = array(10, 12, 13, 4, 5, 16, 7, 18, 9, 15, 11);

foreach ($numbers as $value) {
    if($value % 2 == 1 && $value % 5 == 0 && $value > 5) {
        echo "$value es impar<br>";
    } /*else {
        echo "$value es impar<br>";
    }*/
}
?> 