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

// another way to instantiate a new person object
class Person2
{
  // properties
  public $name;
  public $email;
  public $age;

  // constructor
  public function __construct()
  {
    echo 'Constructor Called';
  }

  // methods
  public function greet()
  {
    return "Hello, my name is $this->name and I am $this->age";
  }
}
$person2 = new Person2();
$person2->name = "sohan";
$person2->email = 'ch@gmail.com';
$person2->age = 40;
?>

//docs: inharitance
<?php
class Customer extends Person
{
  public $balance;

  public function __construct($name, $email, $age, $balance)
  {
    parent::__construct($name, $email, $age);
    $this->balance = $balance;
  }

  public function pay($amount)
  {
    return $this->name . ' paid $' . $amount;
  }

  public function getBalance()
  {
    return $this->balance;
  }
}

$customer1 = new Customer('John Doe', 'jd@gmail.com', 35, 300);
echo $customer1->pay(100);
echo $customer1->getBalance();

?>

//docs: access modifiers
<?php
class Person3
{
  public $name;
  protected $email;
  private $age;

  public function __construct($name, $email, $age)
  {
    $this->name = $name;
    $this->email = $email;
    $this->age = $age;
  }

  public function greet()
  {
    return "Hello, my name is $this->name and I am $this->age";
  }
}
class Person4 extends Person3
{
  public function __construct($name, $email, $age)
  {
    parent::__construct($name, $email, $age);
  }
  public function greet()
  {
    // return "Hello, my name is $this->name and I am $this->age";
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
//public can be accessed from anywhere
//protected can be accessed from within the class and its child classes
//private can be accessed only from within the class