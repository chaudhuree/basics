<?php

class student
{
  private $name;
  private $age;
  private $roll;

  public function __set($property, $value)
  {
    echo "Setting $property to $value" . PHP_EOL;
    $this->$property = $value;
  }
  public function sayName()
  {
    echo "My name is $this->name" . PHP_EOL;
  }
}

$student = new student();
$student->name = "John Doe";
$student->sayName();
?>

//Anoter example
//non existing property will be added to the data array
<?php
class MyClass
{
  private $data = array();

  public function __set($property, $value)
  {
    if (property_exists($this, $property)) {
      $this->$property = $value;
    } else {
      $this->data[$property] = $value;
    }
  }
  public  function __get($property)
  {
    if (property_exists($this, $property)) {
      return $this->$property;
    } else {
      return $this->data[$property];
    }
  }
}

$obj = new MyClass();
$obj->nonexistent_property = "some value";
echo $obj->nonexistent_property; // Outputs "some value"
?>