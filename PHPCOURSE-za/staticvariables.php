<!DOCTYPE>

<html>
	<head>
		<title>Static Variables</title>
	</head>
	<body>
<?php

function NormalV(){
	$value=1;
	echo $value."<br>";
	$value++;
	
}
NormalV(); //1
NormalV(); // 
NormalV();
NormalV();
function StaticV(){
	static $value=1;
	echo $value." static <br>";
	$value++;
}
StaticV(); //1
StaticV();//2
StaticV(); //3
StaticV();//4

?>
	    
	</body>
</html>
