//trait
<?php
trait test
{
  public function show()
  {
    echo "created at trait";
  }
}
trait hello
{
  public function sayhello()
  {
    echo "hello from trait";
  }
}
class ParentClass1
{
  use test;
}
class ParentClass2
{
  use test, hello;
}
$parent = new ParentClass1();
$parent->show();
$parent2 = new ParentClass2();
$parent2->show();
$parent2->sayhello();
?>