<!-- interface -->
<?php
interface parent1
{
  function add($a, $b);
}
interface parent2
{
  function mul($a, $b);
}
class child implements parent1, parent2
{
  function add($a, $b)
  {
    return $a + $b;
  }
  function mul($a, $b)
  {
    return $a * $b;
  }
}
$obj = new child();
echo $obj->add(10, 20);
echo $obj->mul(10, 20);

?>