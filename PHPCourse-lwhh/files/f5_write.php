<?php
$filedataagain = "./PHPCourse-lwhh/files/data/dataWriteAgain.txt";
$fpagain = fopen($filedataagain, "a");

fwrite($fpagain, "appended data\n");
