<?php
// open with fopen in w for write mode
// then fwrite for writing data
$fileData = "./PHPCourse-lwhh/files/data/dataWrite.txt";
$fp = fopen($fileData, "w");
fwrite($fp, "Hello World\n");



