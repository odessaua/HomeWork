<?php
//Написать функцию, которая в качестве аргумента принимает строку, и форматирует ее таким образом, что предложения идут в обратном порядке.
$text = 'А Васька слушает да ест. А воз и ныне там. А вы друзья как ни садитесь, все в музыканты не годитесь. А король-то — голый. А ларчик просто открывался. А там хоть трава не расти.';


function textFormat($text) {
	$array = explode (". ", $text);

	foreach ($array as $value)

		$string .= mb_strtoupper(mb_substr($value, 0, 1, 'UTF-8'), "UTF-8").mb_substr($value, 1, mb_strlen($value), 'UTF-8').". ";

	return $string;

}
echo "<b>Исходный текст:</b> $text<p>";

echo "<b>Форматированный текст: </b>".textFormat($text);


?>