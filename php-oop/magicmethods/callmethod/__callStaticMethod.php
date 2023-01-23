<!-- The __callStatic() magic method in PHP is similar to the __call() method, but it is used to handle method calls on a class rather than an object. It is triggered when an inaccessible static method is called on a class.

The method takes two arguments: the name of the method that was called, and an array of arguments passed to the method.

For example, if you have a class "MyClass" and you call a static method "myStaticMethod()" that doesn't exist, then the __callStatic() method is called automatically. -->

<?php
class MyClass
{
  public static function __callStatic($method, $arguments)
  {
    // code to handle the call
    echo "Static Method $method not found. arguments passed were: " . implode(',', $arguments);
  }
}

MyClass::myStaticMethod("hello", "world");

//output:
// Static Method myStaticMethod not found. arguments passed were: hello,world
?>

<!-- another example -->
<?php
class Student
{
  private static function hello($value)
  {
    echo "hello $value";
  }
  public static function __callStatic($method, $arguments)
  {
    //   if($method == "hello"){
    //     self::hello();
    //   }else{
    //     echo "method $method not found";
    //   }
    // }
    if (method_exists(__class__, $method)) {
      call_user_func_array([__class__, $method], $arguments);
    } else {
      echo "method $method not found";
    }
  }
}
Student::hello("sohan");
?>