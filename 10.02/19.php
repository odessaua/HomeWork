<?php
$array = [ '0' => 'Понедельник' , '1'=> 'Вторник' ,'2'=> 'Среда' , '3'=> 'Четверг' , '4'=> 'Пятница' , '5'=> 'Суббота' , '6'=> 'Воскресенье' ];
$day = 4;
foreach ($array as $key=>$value) {
	
	if ($key == $day) {
		echo "<i>",$value,"</i> ";
		continue;
	}
	
	elseif ($key==5 or $key==6)
		echo "<b>",$value,"</b> ";
	else
		echo $value," ";	
}


?>