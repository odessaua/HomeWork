<?php
//Написать функцию, которая выводит список файлов в заданной директории, которые содержат искомое слово. Директория и искомое слово задаются как параметры функции.


function fileListWord ($dir, $word) {
	$array = scandir ($dir);
	foreach ($array as $value):
	 if (is_file($value)):
		 if (stripos($value, $word)!== false)
		 $arr .= "<p>". $value;
	 endif;
	endforeach;
	 
	return $arr;
}

echo fileListWord('.', '2');    // искомое слово '2'

?>