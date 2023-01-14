<?php
class MyClass
{
  private $data = ["name" => "John Doe", "age" => 25];

  public function __get($property)
  {
    if (array_key_exists($property, $this->data)) {
      return $this->data[$property];
    } else {
      return "Property not found";
    }
  }
}

$obj = new MyClass();
echo $obj->name; // Outputs "Property not found"
