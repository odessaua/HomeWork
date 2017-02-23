<!DOCTYPE HTML>
<html>
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Ваш сайт</title>
</head>

<body>

<?php

$arr = ['Коля'=>'200', 'Вася'=>'300', 'Петя'=>'400'];

 foreach ($arr as $key => $item):
	echo "$key - зарплата $item долларов";
	echo "<br>";

 endforeach;
 
 

?>

 </body>
 </html>