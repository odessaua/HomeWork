<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<?php
$remp=[];
$descriptor = fopen("test.txt", "a+") or die ("Не могу открыть файл");
while (!feof($descriptor)) {
	
$remp[] = fgets($descriptor,1288);


}
echo "<pre>";
var_dump ($remp);
?>	
</body>
</html>
