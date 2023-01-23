<!-- The isset() function in PHP is used to check if a variable or an array key has been set and is not null. It returns a boolean value (true if the variable or key is set, and false if it is not). -->
<?php
$var = "Hello";
if (isset($var)) {
  echo "The variable is set.";
} else {
  echo "The variable is not set.";
}

//output:
// The variable is set.
$var1 = "Hello";
$var2 = "";
if (isset($var1, $var2)) {
  echo "Both variables are set.". PHP_EOL;
} else {
  echo "One or both variables are not set." . PHP_EOL;
}
//output:
// Both variables are set.
class abc
{
  public $name = "sohan";
  private $age = 27;
}
$obj = new abc();
echo isset($obj->name);
?>