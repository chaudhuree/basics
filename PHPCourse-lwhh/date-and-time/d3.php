<?php
echo time()."\n";
echo mktime(0,0,0,12,1,2018)."\n"; //hour,minute,second,month,day,year
date_default_timezone_set('Asia/Dhaka');
echo mktime(0,0,0,12,1,2018)."\n";
echo gmmktime(0,0,0,12,1,2018)."\n";
echo (22400-800)/(60*60)."\n";


$j1 = mktime(0,0,0,12,12,2018);
$j2 = mktime(0,0,0,12,30,2018);

echo ($j2-$j1)/(60*60*24)."\n"; 
//difference between two dates

// echo date_diff(12-12-2018,12-30-2018)."\n";
echo date_diff(date_create('2018-12-12'),date_create('2018-12-30'))->format('%R%a days')."\n";