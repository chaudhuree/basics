<!-- list of conditional functions -->
<?php
$var = 0;
if (isset($var)) {
    echo "Variable is set";
}
if (empty($var)) {
    echo "Variable is empty";
}
if (is_int($var)) {
    echo "Variable is an integer";
}
if (is_string($var)) {
    echo "Variable is a string";
}
if (is_array($var)) {
    echo "Variable is an array";
}
if (is_bool($var)) {
    echo "Variable is a boolean";
}
if (is_float($var)) {
    echo "Variable is a float";
}
if (is_null($var)) {
    echo "Variable is null";
}
if (is_numeric($var)) {
    echo "Variable is numeric";
}
if (is_object($var)) {
    echo "Variable is an object";
}
if (is_resource($var)) {
    echo "Variable is a resource";
}

?>

<?php

class Myclass{
public function myMethod(){
echo "my method";
}
}
$obj=new Myclass();
interface Myinterface{}
if(class_exists('Myclass')){
echo "Class exists";
}
if(interface_exists('Myinterface')){
echo "Interface exists";
}
if(method_exists($obj,'myMethod')){
echo "Method exists";
}



?>