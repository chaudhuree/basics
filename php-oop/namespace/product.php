<?php

namespace prod;

require 'testing.php';
class product
{
  public function __construct()
  {
    echo "This is product class \n";
    // we can use product from testing namespace
    $test = new \test\product(); // "\" is added before test
    //when we use a namespace inside a namespace we have to use "\" before namespace
    // see in index.php file
    // it is not a namespace so in it we don't need to use "\"
  }
}

function wow()
{
  echo "This is wow function from product \n";
}
