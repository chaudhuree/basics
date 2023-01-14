//type hinting or type declaration

<?php
function sum(int $a, int $b)
{
  return $a + $b;
}
echo sum(10, 20) . "\n";

// array type hinting
function printArrayofInt(array $numbers): void
{
  foreach ($numbers as $number) {
    echo $number . "\n";
  }
}

$myArray = [1, 2, 3, 4, 5];
printArrayofInt($myArray);

$myArrayofStrings = ['a', 'b', 'c'];
printArrayofInt($myArrayofStrings);

// class type hinting
class ExampleClass
{
  public function sayHello()
  {
    echo "Hello" . "\n";
  }
}


function example(ExampleClass $parameter1)
{
  $parameter1->sayHello();
}
$value = new ExampleClass();
example($value);

// another example with class type hinting

class school
{
  public function getNames(student $names)
  {
    foreach ($names->Names() as $name) {
      echo $name . "\n";
    }
  }
}
class student
{
  public function Names()
  {
    return ['shahriar', 'kabir', 'sohan'];
  }
}
$student = new student();
$school = new school();
$school->getNames($student);
?>