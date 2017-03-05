<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<?php
//Создать страницу, на которой можно загрузить несколько фотографий в галерею. Все загруженные фото должны помещаться в папку gallery и выводиться на странице в виде таблицы.
$uploaddir = './gallery/';
$name = basename($_FILES['img']['name']);
if (isset($_POST['send'])) :
echo $_FILES['img']['size'];

	if ($_FILES['img']['size']<100*1024):
			if(move_uploaded_file($_FILES['img']['tmp_name'], $uploaddir.$name))
				echo "Файл загружен";
			else echo "Ошибка";
	else: echo "Файл превышает допустимый размер";
	endif;
else: echo "файла нет";
endif;
?>
<form action="" method="POST" enctype="multipart/form-data"><input type="file" name="img">
<input type=submit value=Загрузить name=send></form>
	
<table border=1><th>Изображения</th>

<?php
$scan = scandir($uploaddir);
sort($scan, SORT_NUMERIC);

foreach ($scan as $image)

if (is_file($uploaddir.$image)):

	echo "<tr><td><img src=".$uploaddir.$image."></td></tr>";
	endif;
?>
</table>
</body>
</html>