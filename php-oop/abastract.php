<!-- abstract -->
<?php
//need to have a class with abstract mode
//abstract class should have one abstract method which is not implemented just defined
abstract class ParentClass
{
  public $value = 10;
  abstract protected function add($a, $b);
}

class Child extends ParentClass
{
  public function add($a, $b)
  {
    return $a + $b;
  }
  function mul($a, $b)
  {
    return $a * $b;
  }
}
$obj = new Child();

echo $obj->add(10, 20);
echo $obj->mul(10, 20);
?>