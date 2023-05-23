<?php
// Read files and folders inside directory
// $files = scandir('./'); // . means current directory

// echo '<pre>';
// var_dump($files). '<br>';
// echo '</pre>';

$fileData = "./PHPCourse-lwhh/files/data/data.txt";
// echo $fileData;
$fp = fopen($fileData, "r");
// echo $fp;
$lines = fgets($fp);
fseek($fp, 2);

// echo $lines;
while ($lines = fgets($fp)) {
  echo $lines . PHP_EOL;
}

rewind($fp);
// fseek($fp, -1, SEEK_END);


while ($lines = fgets($fp)) {
  echo $lines . PHP_EOL;
}
fclose($fp);
