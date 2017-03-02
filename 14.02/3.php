<?php
// Поменять местами наибольший и наименьший элементы массива. (массив 10 чисел)
$array = [];
for ($i=0; $i<=10; $i++)
		$array[$i] = rand(1,50); 
echo "<pre>";
print_r($array);
/* $min = 0;
$max = 0;
$count = count ($array);
// поиск максимального и минимального значения
for ($i = 1; $i < $count; $i++) {
    if ($array[$i] > $array[$max]) $max = $i;
    if ($array[$i] < $array[$min]) $min = $i;
}

echo "Максимальное значение - $array[$max]. Минимальное - $array[$min]";
// меняем местами 
$array[$min] += $array[$max];
$array[$max] = $array[$min] - $array[$max];
$array[$min] = $array[$min] - $array[$max];
var_dump($array); */

echo "<hr>";

$max = max($array);
$min = min($array);
$key_max = array_search($max, $array);
$key_min = array_search($min, $array);

list($array[$key_max], $array[$key_min]) = [$min, $max];
echo "<b>Массив после замены элементов</b>";
echo "<pre>";
print_r($array);