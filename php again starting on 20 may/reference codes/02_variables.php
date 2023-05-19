<?php

// What is a variable

// Variable types
/*
    String
    Integer
    Float
    Boolean
    Null
    Array
    Object
    Resource
*/

// Declare variables
$name = "sohan";
$age = 28;
$isMale = true; // Change into false
$height = 1.85;
$salary = null;

// Print the variables. Explain what is concatenation
echo $name . '<br>';
echo $age . '<br>';
echo $isMale . '<br>';
echo $height . '<br>';
echo $salary . '<br>';

// Print types of the variables
echo gettype($name) . '<br>';
echo gettype($age) . '<br>';
echo gettype($isMale) . '<br>';
// result: if true then 1, if false then nothing.means for nothing the screen will be blank
echo gettype($height) . '<br>';
echo gettype($salary) . '<br>'; 
// result: for null the screen will be blank or empty space

// Print the whole variable
var_dump($name); 
// var_dump is a function that prints the whole variable
//output: string(5) "sohan"
var_dump($name, $age, $isMale, $height, $salary);
// output: string(5) "sohan" int(28) bool(true) float(1.85) NULL

// Change the value of the variable
$name = false;

// Print type of the variable
echo gettype($name) . '<br>';

// Variable checking functions
is_string($name); // false
is_int($age); // true
is_bool($isMale); // true
is_double($height); // true

// Check if variable is defined
var_dump(isset($name)); // true
var_dump(isset($name2)); // false
echo '<br>';

// Constants
define('PI', 3.14);
echo PI.'<br>'; // no need to use $ sign
var_dump(defined('PI')); // defined(PI2)
echo '<br>';

// 12. Using PHP built-in constants
echo SORT_ASC.'<br>'; // 4
echo PHP_INT_MAX.'<br>'; // 9223372036854775807
