<?php
//Вывести на экран числа от -15 до 25 с помощью всех известных циклов.

/* for ($i=-15; $i<=25; $i++)
	$array[] = $i;
unset ($array);

$i=-16;
while ($i++<25)
	$array[]=$i;
unset ($array);


$i=-15;
do {
$array[]=$i;	
}
while (++$i<=25); */



$arr = [];
$value = -15;
foreach ($arr as $value):
	$arr[] = $value;
	$value++;
	if ($value = 25) break;
endforeach;


echo "<pre>";
print_r($arr);