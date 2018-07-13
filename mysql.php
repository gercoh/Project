<?php
$dbhost ='localhost';
$dbuser='root';
$dbpass='';
$dbname='cv';
$db = mysqli_connect($dbhost,$dbuser,$dbpass) or die("хрень какая-то с подключением к базе данных ищи там");
mysqli_select_db($db,$dbname) or die("ошибочка пацани сварачиваемся");
?>
