<?php
$array = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$count=0;
foreach ($array as $value) {
	echo $value,", ";
	$count++;
	if ($count==3) {
		echo "<br>";
		$count = 0;
	}
	
}


?>