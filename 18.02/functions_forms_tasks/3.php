<?php 
// Есть текстовый файл. Необходимо удалить из него все слова, длина которых превыщает N символов. 
// Значение N задавать через форму. Проверить работу на кириллических строках - найти ошибку, найти решение.
if (isset($_POST)):
		if (isset($_POST['text']))   $text = $_POST['text'];  
		if (isset($_POST['length'])) $length = $_POST['length'];  
endif;
if (is_numeric($length)):
		$array = explode(" ", $text);
		$max = 1;

		foreach ($array as $key=>$value):
			
			$l = mb_strlen($value, 'utf-8');
			
			if ($l >= $length) unset ($array[$key]);
			
		endforeach;

		$text = implode (" ", $array);
		echo "<p>".$text;		
else :
	echo "Пожалуйста введите число!";
endif;
?>

<form name="myform" action="" method="POST">
<p>Text</p>
<p><textarea name="text" cols=50 rows=10></textarea></p>

<input type=text value="" name="length">
<input type=submit value=Отправить>
<input type=reset value=Очистить>
</form>