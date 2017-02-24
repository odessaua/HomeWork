<?php

//Написать функцию, которая выводит список файлов в заданной директории. Директория задается как параметр функции.

function fileList ($dir) {
	$array = scandir ($dir);
	foreach ($array as $value):
	 if (is_file($value))
		 $arr .= "<p>". $value;
	endforeach;
	 
	return $arr;
}


echo fileList('.');



?>