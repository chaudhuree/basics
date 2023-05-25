<!DOCTYPE>

<html>
	<head>
		<title>Arrays Functions</title>
	</head>
	<body>
<?php ?><br>

<?php
$color=array("red","green","blue");
array_pop($color);
array_push($color,"black","White","Pink");
print_r($color);
?><br>
<?php $Numbers=array(13,54,6,89,100,15,12,789,1000)?><br>
<?php echo count($Numbers); ?><br>
Max:<?php echo max($Numbers);?><br>
Min:<?php echo min($Numbers);?><br>
Yes /No:<?php echo in_array(89,$Numbers);?><br>
Sort:<?php echo sort($Numbers);?><br>
<?php print_r($Numbers);?><br>
Re-Sort:<?php echo rsort($Numbers);?><br>
<?php print_r($Numbers);?><br>
Implode:<?php // The implode() function returns a string from the elements of an array.
$Quote=array("Never","Give","UP","in","life");
?><br>
<?php echo implode(" ",$Quote);?><br>
Explode:<?php  // The explode() function breaks a string into an array
$Quote="Never Give UP in life";
print_r (explode(" ",$Quote));
?><br>


	</body>
</html>
