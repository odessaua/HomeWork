<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Файл Навигатор</title>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="container">
<h1>Файл навигатор</h1>
<table class="table table-striped table-bordered table-hover table-condensed" cellspacing="0" width="100%"><th>Имя</th><th>Тип</th><th>Размер</th><th>Создан</th><th>Последнее изменение</th><th>Просмотрен</th><th>Операции</th>
<?php

$url = $_SERVER['QUERY_STRING'];  //  инф для удаления файла

$dir = "./";
if (isset($_GET['sec'])) $sec = $_GET['sec'];
if (isset($_GET['dir'])) $dir = $sec.$_GET['dir']."/";
else  $dir = "./";
if (isset($_GET['url'])) $url = $_GET['url'];
if (isset($_GET['del'])) $del = $_GET['del'];

	if ($del == 1) 	unlink($url);   // удаление файла

function GetFiles ($dir) {

$result = array_diff( scandir( $dir), array('.'));  // убираю из списка корневую папку
/* foreach ($result as $key=>$value)
{
	if (is_dir($dir.$value)) echo "dir";

} */

foreach ($result as $value) {
	
global $dir;
	$type = filetype($dir."/".$value);
	if ($type == 'file') {
	$append = fileatime($dir.$value);           // файл создан
	$append = date('Y-m-d H:i:s', $append);		//
	$modify = filemtime($dir.$value);			//	файл изменен
	$modify = date('Y-m-d H:i:s', $modify);		//
	$view = filectime($dir.$value);				//	файл просмотрен
	$view = date('Y-m-d H:i:s', $view);	
	$mime = mime_content_type($dir.$value);	    // определяю тип файла (image или text)
		if (substr_count($mime, 'text')) 	
			$open = "<a href='view.php?view=$dir$value'>Просмотр  </a><a href='navigate.php?del=1&url=$dir$value&dir=$dir'>Удалить</a>";
		elseif (substr_count($mime, 'image'))
			$open = "<a href='$dir$value'>Просмотр  </a><a href='navigate.php?del=1&url=$dir$value'>Удалить</a>";
	
	$size = filesize ($dir.$value);
	$size .= " байт";
	
	}
	if ($type == 'dir') {
		$value = "<a href='navigate.php?dir=$value&sec=$dir'>$value</a>";
		$open = "";
		
	}
	
	echo "<tr><td>$value</td><td>";
	
	echo "$mime</td><td>$size</td><td>$append</td><td>$modify</td><td>$view</td><td>$open</td></tr>";

	}

}
GetFiles($dir);



?>
</table>
</div>
</body>
</html>
