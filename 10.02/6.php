<!DOCTYPE HTML>
<html>
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Ваш сайт</title>
</head>

<body>

<?php

$arr = ['green'=>'зеленый', 'red'=>'красный', 'blue'=>'голубой']; 
$en=[];
$ru=[];
 foreach ($arr as $key => $item):
	$en[] = $key;
	$ru[] = $item;

 endforeach;


?>

 </body>
 </html>