<?php

namespace Project;

include "c1.php";
include "c2.php";

use \Project\Motorcycles\Bike as Hornet;
// aitar mane \Project\Motorcycles er moddher Bike class
use \Project\Bike as KPR;
// aitar mane \Project er moddher Bike class


$b = new Bike();
echo $b->getName();
// as it is in project namespace so it will print KPR
//upore n1.php er namespace hocce Project

// but if i want to print Hornet then i have to use \Motorcycles\Bike

$c = new Motorcycles\Bike();
echo $c->getName();

$h = new Hornet();
echo $h->getName();

$p = new KPR();
echo $p->getName();
