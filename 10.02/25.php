<?php
$arr=[];

for ($i=0; $i<=10; $i++)   // набили 
	$arr[]= rand(1,100);    //       массив
var_dump($arr);	
	
$count = count($arr);    // считаем количество элементов
	//$max = max($array);

for ($i=0; $i<$count; $i++) {   
    if ($i == 0) { 
        $max = $arr[$i]; 
    }  else { 
        if ($max  < $arr[$i]) { 
            $max = $arr[$i]; 
        } 
    }  
} 

for ($i=0; $i<$count; $i++) {   
    if ($i == 0) { 
        $min = $arr[$i]; 
    }  else { 
        if ($min > $arr[$i]) { 
            $min = $arr[$i]; 
        } 
    }  
}
	
	
	
echo "Максимальное число <strong>".$max."</strong>, а минимальное <strong>".$min."</strong>";

