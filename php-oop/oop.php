<!-- basic class structure -->
<?php
class Person
{
  // properties
  public $name;
  public $email;
  public $age;

  // constructor
  public function __construct($name, $email, $age)
  {
    $this->name = $name;
    $this->email = $email;
    $this->age = $age;
  }

  // methods
  public function greet()
  {
    return "Hello, my name is $this->name and I am $this->age";
  }
}

// instantiate a new person object
$person1 = new Person('John Doe', '
', 35);

// echo $person1->name;
// echo $person1->email;
// echo $person1->age;

echo $person1->greet();
?>