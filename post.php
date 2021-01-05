<?php
$time = time();
$tempF = $_POST["temp"];
$file = 'file:///C:/Users/Victor_Chien.LAPTOP-SO3KMHBK/Desktop/Arduino/AIT%20Internship/Data%20Portal/index.html';
$data = $time."  -  ".$tempF;
file_put_contents($file, $data);
?>