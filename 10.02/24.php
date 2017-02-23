<?php
$num =442158752342;  // заданное число
$num = (string)$num;
$search = 4;  // искомое число
$count = 0;   // количество вхождений искомого числа в заданном
$arr = str_split($num);
var_dump($arr);
foreach ($arr as $value) {
	if($value == $search) {
	$count++;
	}
	else
	continue;
}
echo "Цифра $search встречается $count раз";
