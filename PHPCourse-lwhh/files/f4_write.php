<?php
// fwrite clear the existing data and write new data
// to avoid this one thing can be done
$filedataagain = "./PHPCourse-lwhh/files/data/dataWriteAgain.txt";
$existingdata = file_get_contents($filedataagain);
$fpagain = fopen($filedataagain, "w");
fwrite($fpagain, $existingdata);
fwrite($fpagain, "Hello World Again\n");
