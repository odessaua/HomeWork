<?php
$array = [4, 2, 5, 19, 13, 0, 10];
$e = [2,3,4];

	foreach ($e as $value) {
	if (in_array ($value, $array))
		echo "Есть!<br>";
	else echo "Нет!<br>";
}


?>