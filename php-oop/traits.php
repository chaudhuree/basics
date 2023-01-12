//trait
<?php
trait test
{
  public function show()
  {
    echo "created at trait";
  }
}
class ParentClass
{
  use test;
}
$parent = new ParentClass();
$parent->show();

?>