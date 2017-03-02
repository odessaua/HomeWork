<?php

$a = [1=>"red", 2=>"white", 3=>"black", 4=>[1,2,3,4,5,6]];

function my_print($array) {
	
echo ucfirst(gettype($array));
echo " ( ";
foreach ($array as $key=>$value):

	if (!is_array($value))
	echo " [$key] => $value ";	
	else {
		echo " [$key] => ";
		my_print($value);
	}
	
endforeach;
	echo " )";
}

//echo "<pre>";
my_print($a);
echo "<br><br>";
print_r($a);