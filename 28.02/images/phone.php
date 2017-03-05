<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Best SmartPhones 2016</title>
	 <style type="text/css">
   TABLE {
    border-collapse: collapse; /* Убираем двойные линии между ячейками */
	

   }
   TD, TH {
   text-align:center; 
    border: 1px solid grey; /* Рамка вокруг ячеек */
   }
  </style>
</head>
<body>
<table><th>Фото</th><th>Название</th><th>Ширина</th><th>Высота</th><th>Размер</th><th>Тип</th>
<?php


// Я немного усложнил себе задачу. Предположил, что имеется двумерный массив $array в котором хранятся имена файлов и название
// Для показа картинки уменьшенного размера пришлось делить на 2 ширину и высоту, подскажите если есть другое решение!!!!!!!!!

$array = [0=>['filename'=>'asus_zenfone.jpg', 'model'=>'Asus ZenFone 3'], 1=>['filename'=>'yota_phone.jpg', 'model'=>'Yota Phone 2'], 2=>['filename'=>'lg_g2.jpg', 'model'=>'LG G2'], 3=>['filename'=>'lenovo_ideaphone.jpg', 'model'=>'Lenovo IdeaPhone'], 4=>['filename'=>'iphone2.jpg', 'model'=>'iPhone 2'],5=>['filename'=>'samsung_galaxy.jpg', 'model'=>'Samsung Galaxy']];


if(!$a = glob('*.{jpg,jpeg,gif,png,bmp}', GLOB_BRACE))  // Ищу все файлы изображений
	echo "В Данной папке изображений нет!";

foreach ($array as $num=>$phone):   					// Получаю доступ к названиям файлов и названием моделей
														// телефонов из	 
	foreach ($phone as $inner_key=>$inner_phone):		// 				данного массива
		
		foreach ($a as $value) {						// 
			if ($inner_phone == $value):				// Сравниваю файлы изображений из каталога с именами файлов из массива
			$image_info = getimagesize($value);			//
			$mime = mime_content_type($value);			// Получаю Mime тип изображения
			$size = round((filesize($value))/1024);		// Получаю размер картинки в килобайтах
			
			echo "<tr><td><a href='$value'><img src='$value' width=".($image_info[0]/2)." height=".($image_info[1]/2)."></a></td>";
			echo "<td>".$phone['model']."</td>";
			echo "<td>".$image_info[0]." px</td>";
			echo "<td>".$image_info[1]." px</td>";
			echo "<td>$size KB</td>";	
			echo "<td>".$mime."</td></tr>";
			endif;
		}
	endforeach;
endforeach;

?>
</table>	
</body>
</html>
