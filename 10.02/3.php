<!DOCTYPE HTML>
<html>
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Ваш сайт</title>
</head>

<body>

<?php

$arr = [26, 17, 136, 12, 79, 15];

 foreach ($arr as $item):
	 $item *= $item;
	 $result += $item;

 endforeach;

 echo $result;
?>

 </body>
 </html>