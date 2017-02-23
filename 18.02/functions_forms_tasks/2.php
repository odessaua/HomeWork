<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>My Menu</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<?php
// Создать форму с элементом textarea. 
// При отправке формы скрипт должен выдавать ТОП3 длинных слов в тексте. Реализовать с помощью функции.
if (isset($_POST['text'])):
		 $text=$_POST['text'];  
		

			getLongWords($text);
endif;
function getLongWords ($a) {
	$text = explode(" ", $a);
	
	$max = 1;
		
	foreach ($text as $key=>$value):
	
	$l = mb_strlen($value, 'utf-8');
	if ($l >= $max) { 
	
	$max = $l; 
	$k = $key;
	
	}
	endforeach;

		$k1 = $text[$k];
	
		$text[$k] = "";

	
	$max = 1;
	foreach ($text as $key=>$value):
	
	$l = mb_strlen($value, 'utf-8');
	if ($l >= $max) { 
	
	$max = $l; 
	$k = $key;
	
	}
	endforeach;
	
		$k2 = $text[$k];
		$text[$k] = ""; 

	$max = 1;
	foreach ($text as $key=>$value):
	
	$l = mb_strlen($value, 'utf-8');
	if ($l >= $max) { 
	
	$max = $l; 
	$k = $key;
	
	}
	endforeach;
	
		$k3 = $text[$k];
		$text[$k] = ""; 

		echo "ТОП 3 самых динных слов: 1 - $k1, 2 - $k2, 3 - $k3";
}

?>

<h2>My Form</h2>
<form name="myform" action="" method="POST">
<p>Text</p>
<p><textarea name="text" cols=50 rows=10></textarea></p>
<input type=submit value=Отправить>
<input type=reset value=Очистить>
</form>
</body>
</html>