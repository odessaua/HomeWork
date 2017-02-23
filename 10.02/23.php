<?php
$num = 1234543453;
$sum = 0;
$num = (string)$num;
$array[] = $num;
$arr = str_split($num);


$sum = array_sum($arr);
echo $sum;

$sum = 0;
for($i = 0; $i <= strlen($num); $i++) {

    $sum += $num[$i];
}

echo $sum;