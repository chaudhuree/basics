<?php

spl_autoload_register(function ($class) {
  include 'classes/' . $class . '.php';
});

$first = new First();
$second = new Second();
