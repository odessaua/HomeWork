<?php
//Дан массив размера n. После каждого отрицательного элемента массива вставить
// элемент с нулевым значением.
$a = [2,67,-4,56,3,88,0,-5];
echo "<pre>";
print_r($a);

$cnt = count($a);
for ($i=0; $i<=$cnt; $i++):
    if ($a[$i]<0):

		$before = array_slice($a, 0, ($i+1));
		$a = array_slice($a, ($i+1), $cnt);
		array_push($before, 0);
		array_unshift($a,...$before);
	
	endif;
endfor;
	
	
echo "<pre>";
print_r($a);

