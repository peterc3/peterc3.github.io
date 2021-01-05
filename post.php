<?php
$time = time();
$tempF = $_POST["temp"];
$file = 'peterc3.github.io';
$data = $time."  -  ".$tempF;
file_put_contents($file, $data);
?>
