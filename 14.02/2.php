<?php
//Найдите сумму и произведение элементов массива (массив 20 чисел)

$array = [];
$n = 20;
for ($i=1; $i<$n; $i++)
	$array[]=$i; 

$sum = array_sum($array);
echo "Сумма значений массива:".$sum;
$res = array_product($array);
echo "<br>";
echo "Произвидение значений массива:".$res;