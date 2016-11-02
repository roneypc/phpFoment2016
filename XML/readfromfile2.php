<!DOCTYPE html>
<html>
<body>

<?php
$xml=simplexml_load_file("bookstore.xml") or die("Error: Cannot create object");
foreach($xml->children() as $books) :
	if(strcmp($books->year, "2003") == 0) :
?>
	<b>Título: </b><?= $books->title ?><br>
	<b>Autor: </b><?= $books->author ?><br>
	<b>Año: </b><?= $books->year ?><br>
	<b>Precio: </b><?= $books->price ?>
	<hr>
<?php
	endif;
endforeach;
?>

</body>
</html>