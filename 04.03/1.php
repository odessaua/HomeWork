<?php
//Пусть в массиве хранятся различные цвета для фона нашего сайта (5 цветов на выбор). Выбор цвета нужно сделать через поле ввода типа выпадающий список. Сделайте, чтобы браузер запоминал цвет фона сайта, куда мы заходим, на 1 минуту, а через 1 минуту он снова становился бы тем, каким был по умолчанию и снова можно выбрать и задать цвет фона из выпадающего списка.

if (!empty($_POST))
	{
		$color = ($_POST['color']); 
		header( 'Refresh: 60; 1.php' ); 
	}
else $color = 'white';
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
		body { background-color: <?=$color?>; } 
	</style>
</head>
<body>
<?php


$array = [0=>"white", 1=>"green", 2=>"grey"];

?>
<form action="" method="POST">
<select name="color" id="colors">
<option>Выберите цвет</option>
<?
	foreach ($array as $value)
	echo "<option>$value</option>";
?>	

</select>
<input type="submit" value="Изменить">
</form>
	
</body>
</html>