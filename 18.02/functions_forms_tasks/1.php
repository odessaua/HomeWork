<?php
//Создать форму с двумя элементами textarea. При отправке формы скрипт должен выдавать только те слова, 
//которые есть и в первом и во втором поле ввода. Реализацию это логики необходимо поместить в функцию 
//getCommonWords($a, $b), которая будет возвращать массив с общими словами.

if (isset($_POST['text1']) and isset($_POST['text2'])):
		 $text1=$_POST['text1'];  
		 $text2=$_POST['text2'];

			getCommonWords($text1, $text2);
endif;

function getCommonWords($a, $b) {
	$text1 = explode(" ", $a);
	$text2 = explode(" ", $b);
	$text = array_intersect ($text1, $text2);
	
	echo implode(" ", $text);
		
	
}
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
<p>First text</p>
<p><textarea name="text1" cols=50 rows=10></textarea></p>
<p>Second text</p>
<p><textarea name="text2" cols=50 rows=10></textarea></p>
<input type=submit value=Отправить>
</form>
</body>
</html>
