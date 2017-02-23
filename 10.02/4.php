<!DOCTYPE HTML>
<html>
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Ваш сайт</title>
</head>

<body>

<?php

$arr = ['green'=>'зеленый', 'red'=>'красный', 'blue'=>'голубой'];

 foreach ($arr as $key => $item):
	echo $key;
	echo "<br>";

 endforeach;
 
  foreach ($arr as $key => $item):
	echo $item;
	echo "<br>";

 endforeach;

?>

 </body>
 </html>