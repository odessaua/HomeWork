<!DOCTYPE HTML>
<html>
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Ваш сайт</title>
</head>

<body>
<ul>
<?php

$arr = ['html', 'css', 'php', 'js', 'jq'];
 
 foreach ($arr as $item):
 
 echo "<li>$item</li>";
	endforeach;
 
?>
 </ul>
 </body>
 </html>