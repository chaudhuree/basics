<?php

namespace prod;

class product
{
  public function __construct()
  {
    echo "This is product class \n";
    // we can use product from testing namespace
    $test = new \test\product(); // "\" is added before test
  }
}

function wow()
{
  echo "This is wow function from product \n";
}
