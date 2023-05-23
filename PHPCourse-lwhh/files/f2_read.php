<?php


$fileData = "./PHPCourse-lwhh/files/data/data.txt";
// echo $fileData;
$fp = file($fileData); // file() function returns an array of lines
$filecontent = file_get_contents($fileData); // file_get_contents() function returns a string of lines

print_r($fp) . PHP_EOL;
echo $filecontent . PHP_EOL;


echo is_readable($fileData) ? 'Yes,this file is redable' : 'Not redable' . PHP_EOL;
