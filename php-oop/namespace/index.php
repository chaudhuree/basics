<?php

require 'product.php';
function wow()
{
  echo "This is wow function from index \n";
}

$pro = new prod\product();
$test = new test\product();

wow();
prod\wow();
