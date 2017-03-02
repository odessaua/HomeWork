<?
$root = $_SERVER['DOCUMENT_ROOT'];
echo $root;
$fo= fopen($root . '/text1.txt', 'a');
if (!$fo) {
	echo "Нет файла";
}
else 
	$price = 100;
	$name = 'Andrey';
	$tovar = 'Notebook';
	$text = $name.PHP_EOL.$tovar." - ".$price.PHP_EOL;
	fwrite ($fo, $text)
?>