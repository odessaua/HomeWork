<?php
// Даны два упорядоченных по возрастанию массива. Образовать из этих двух массивов единый упорядоченный по возрастанию массив.
$a = [1,2,3,4,5,6,7,8];
$b = [6,7,8,9,10,11,12];
$c = array_push($a, ...$b);
asort($a);
var_dump($a);