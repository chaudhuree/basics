<?php
class ParentClass
{
  public $value = 10;
  public static $staticValue = 20;
  public function add($a, $b)
  {
    return $a + $b;
  }
  public static function show()
  {
    self::$staticValue = 30;
    return self::$staticValue; //note
  }
}
echo ParentClass::$staticValue ."\n" ;

echo ParentClass::show();
