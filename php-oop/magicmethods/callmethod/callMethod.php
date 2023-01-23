// php __call method
// __call() is triggered when invoking inaccessible methods in an object context.

<?php
class Person
{
  private $name;
  private $age;
  private $roll;

  public function __call($method, $arguments)
  {
    echo "Calling $method with arguments " . implode(', ', $arguments) . PHP_EOL;
  }
  //The implode() function in PHP is used to join elements of an array with a string. It takes two arguments: the first argument is the string that is used to join the array elements, and the second argument is the array that contains the elements to join.
}

$student = new Person();
$student->sayName("John Doe");
$student->sayAge(20);
$student->sayRoll(10);

//another example:
class Student
{
  private $first_name;
  private $last_name;
  private function setName($fname, $lname)
  {
    $this->first_name = $fname;
    $this->last_name = $lname;
  }
  public function __call($method, $args)
  {
    if (method_exists($this, $method)) {
      call_user_func_array([$this, $method], $args);
    } else {
      echo "Method $method does not exist";
    }
  }
}
$student = new Student();
$student->setName("John", "Doe");
print_r($student);

?>