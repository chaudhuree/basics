<?php
class ParentClass
{

  public static $staticName = "sohan";

  public function show()
  {
    // echo self::$staticName;
    echo static::$staticName;
  }
}
class ChildClass extends ParentClass
{
  public static $staticName = "chaudhuree";
}
$child = new ChildClass();
$child->show();
