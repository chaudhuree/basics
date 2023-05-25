<!DOCTYPE>

<html>
	<head>
		<title>IF  Statement</title>
	</head>
	<body>
<?php 
$Weather="SUN";
if($Weather=="Sunny"){
echo "Weather is pleasent<br>";
}elseif($Weather=="Rainy") {
	echo "its raining";
}elseif($Weather=="Cloudy") {
	echo "Cloud pleasent";
}else{
	echo "Its hard to forecast weather";
}
?><hr>
<?php
$Bought_Product=false;
if($Bought_Product){
	echo "<h1>Thank You</h1>";
echo"<p>You product will be dispatch soon</p>";
}else{
		echo "<h1>Please Wait</h1>";
echo"<p>Your payment is in processing</p>";
}
?> <hr>
<?php
	$a=4;
	$b=3; // $b=0;
	$c="Result can no be out";
	if($b<5 && $a>0){ // if ($b > 0){}
		$c=$a/$b;
	}
	
	echo $c;
	?>
	
	
		  
	</body>
</html>
