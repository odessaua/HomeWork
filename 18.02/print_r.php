<?php

$a = [1=>"red", 2=>"white", 3=>"black"];
function my_print($array) {
echo ucfirst(gettype($array));
echo " ( ";
foreach ($array as $key=>$value)
	echo " [$key] => $value ";	
	echo " )";
}
my_print($a);
echo "<br><br>";
print_r($a);