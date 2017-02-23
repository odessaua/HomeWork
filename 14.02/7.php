<?php
//Создайте массив ста случайных чисел от 1 до 10 и найдите в этом массиве число, которое повторяется наибольшее количество раз.
$array=[];
$cnt = 100;
for ($i=0; $i<$cnt; $i++)
	$array[]= rand(1,10);
//var_dump($array);

$a = array_count_values ($array);
echo '<pre>';
print_r ($a);
$max = 0;
$min = 10;
foreach ($a as $key => $value) {

    if ($value > $max) {$max = $value;  $max_num = $key;} 
	if ($value < $min) {$min = $value;  $min_num = $key;}
}
echo "<br>Число $max_num - повторяется $max раз.";
echo "<br>Число $min_num - повторяется $min раз.";