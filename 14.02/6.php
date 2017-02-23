<?php
// Найти в массиве 10 чисел (случайные числа от 1 до 100) элементы с наибольшим(max) и наименьшим(min) значениями.
// Вывести эти 2 элемента на экран, а также посчитать и вывести сумму всех остальных элементов
// (min и max в сумму не входят).
$a = [];
for ($i=0; $i<10; $i++)
    $a[]= rand(1,100);
echo "<pre>";
print_r($a);

$min = 0;
$max = 0;
$count = count ($a);
// поиск максимального и минимального значения
for ($i = 1; $i < $count; $i++) {
    if ($a[$i] > $a[$max]) $max = $i;
    if ($a[$i] < $a[$min]) $min = $i;
}

echo "Максимальное значение - $a[$max]. Минимальное - $a[$min]<br>";
$sum  = array_sum($a)- $a[$max] - $a[$min];
echo "Сумма значений без учета максимального и минимального ".$sum;