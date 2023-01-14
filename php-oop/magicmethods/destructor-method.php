<?php
class Person
{


  public function __construct()
  {
    echo 'person is called' . PHP_EOL;
  }

  public function __destruct()
  //used to disconnect from database, close files,clear resouces etc.
  {
    echo "person is destroyed" . PHP_EOL;
  }
}
$person = new Person();
