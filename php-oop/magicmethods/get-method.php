<?php
class MyClass
{
  private $data = ["name" => "John Doe", "age" => 25];
  private $id = 123;

  public function __get($property)
  {
    if (array_key_exists($property, $this->data)) {
      return $this->data[$property];
    } elseif ($property) {
      return $this->$property;
    } else {
      return "Property not found";
    }
  }
}

$obj = new MyClass();
echo $obj->name . PHP_EOL; // Outputs John Doe
echo $obj->id; // Outputs Property not found
