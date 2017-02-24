<?php
//Написать функцию, которая переворачивает строку. Было "abcde", должна выдать "edcba". Ввод текста реализовать с помощью формы.
if (isset($_POST)):
		if (isset($_POST['text']))   $text = $_POST['text'];  
endif;

function convert($line) {
	$array = str_split ($line);	
	$result = array_reverse ($array);
	foreach ($result as $value)	
	echo $value;

}


convert($text);


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
<p><input type=text name="text"></input></p>

<input type=submit value=Отправить>
</form>
</body>
</html>