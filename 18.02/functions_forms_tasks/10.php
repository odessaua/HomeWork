<?php
//Написать функцию, которая считает количество уникальных слов в тексте. Слова разделяются пробелами. Текст должен вводиться с формы.

if (isset($_POST)):
		if (isset($_POST['text']))   $text = $_POST['text'];  
endif;

function unique_cnt($text) {

	$array = explode (" ", $text);
	$arr = array_unique ($array);
	$cnt = count($arr);
	return $cnt;
		
}


echo "В тексте: $text <br>Количество уникальных слов: ".unique_cnt($text);


?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>My Menu</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<h2>My Form</h2>
<form name="myform" action="" method="POST">
<p>Text</p>
<p><input type=text name="text"></input></p>

<input type=submit value=Отправить>
</form>
</body>
</html>
