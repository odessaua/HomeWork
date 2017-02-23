<?php
error_reporting(E_ALL);
ini_set('display_errors', true);
ini_set('html_errors', false);
// Простой массив:
$array = array(1, 2);
$count = count($array);
for ($i = 0; $i < $count; $i++) {
    echo "<br>Проверяем $i: <br>";
    echo "Плохо: " . $array[$i] . "<br>";
    echo "Хорошо: " . $array[$i] . "<br>";
    echo "Плохо: {$array['$i']}<br>";
    echo "Хорошо: {$array[$i]}<br>";
}
?>