<?php
        echo "Hello world and this is printed using PHP";
?>

// Single line comment
/*
    This
    is 
    a
    multi
     line
    comment
*/

// Variables
$variable1 = 5;
$variable2 = 2;
echo $variable1;
echo $variable2;


// Comparison Operators
    // echo "<h1> Comparison Operators </h1>";
    echo "The value of 1==4 is ";
    echo var_dump(1==4);
    echo "<br>";

    echo "The value of 1!=4 is ";
    echo var_dump(1!=4);
    echo "<br>";

    echo "The value of 1>=4 is ";
    echo var_dump(1>=4);
    echo "<br>";

    echo "The value of 1<=4 is ";
    echo var_dump(1<=4);
    echo "<br>";

    // Increment/Decrement Operators 
    // echo $variable1++;
    // echo $variable1--;
    // echo ++$variable1;
    echo --$variable1;
    echo "<br>";
    echo $variable1;

    //docs: Logical Operator
    // and (&&)
    // or (||)
    // xor 
    // !

    // $myVar = (true and true);
    // $myVar = (false and true);
    // $myVar = (false and false);
    // $myVar = (true and false);
    // $myVar = (true or false);

    // $myVar = (true xor true);
    // $myVar = (false and true);
    // $myVar = (false xor false);
    $myVar = (true and false);
    echo "<br>";
    echo var_dump($myVar);

    //docs: constants
    define("PI",3.14);
    echo PI;

    //docs:if else condition
    $age = 6;
    if($age>18){
        echo "You can go to the party";
    }
    else if($age==7){
        echo "You are 7 years old";
    }
    else if($age==6){
        echo "You are 6 years old";
    }
    else{
        echo "You can not go to the party";
    }

    //docs: Arrays in php
    $languages = array("Python", "C++", "php", "NodeJs"); 
    // echo count($languages);   
    // echo $languages[0];   

    //docs: Loops in PHP
    $a = 0;
    while ($a <= 10) {
        echo "<br>The value of a is: ";
        echo $a;
        $a++;
    }

    //docs: Iterating arrays in PHP using while loop
    $a = 0;
    while ($a < count($languages)) {
        echo "<br>The value of language is: ";
        echo $languages[$a];
        $a++;
    }

    //docs: Do while loop
    $a = 200;
    do {
        echo "<br>The value of a is: ";
        echo $a;
        $a++;
    } while ($a < 10);

    //docs: For loop
    for ($a=60; $a < 10; $a++) { 
        echo "<br>The value of a from the for loop is: ";
        echo $a;
    }
    //docs: Iterating arrays in PHP using foreach
    foreach ($languages as $value) {
        echo "<br>The value from foreach loop is ";
        echo $value;
    }

    //docs: Functions in PHP
    function print_number($number){
        echo "<br>Your number is ";
        echo $number;
    }