<?php
$filedataagain = "D:\\codes\\php\\basics\\PHPCourse-lwhh\\files\\data\\dataWriteAgain.txt";

file_put_contents($filedataagain, "appended data from put content\n", FILE_APPEND | LOCK_EX);