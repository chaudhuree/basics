<!-- the spl_autoload_register() function is used to register a function that is automatically called whenever a new class is used in the code but has not yet been defined -->
<?php

spl_autoload_register(function ($class) {
  include 'classes/' . $class . '.php';
});

$first = new First();
$second = new Second();
