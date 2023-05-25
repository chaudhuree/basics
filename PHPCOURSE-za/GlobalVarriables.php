
<?php

$MyNumber=456456; // Local Scope
function Addition(){
	global $MyNumber; //Global 
	$a=5;
	$b=2;
	$c=$a+$b;
echo "New GLobal Addition ".($MyNumber+$c).PHP_EOL;
	echo "Addition is {$c}";	
}

Addition();
?>


