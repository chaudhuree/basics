<!DOCTYPE>

<html>
	<head>
		<title>Inside Job | Pointers</title>
	</head>
	<body>
<?php ?>
<?php
$Numbers=array(8,25,45,60,168,500,999);
print_r($Numbers);
?>  <hr>
<?php
echo current($Numbers) ."<br>";
next($Numbers);
echo current($Numbers). "<br>";
next($Numbers);
echo current($Numbers). "<br>";
next ($Numbers);

next ($Numbers);
echo current($Numbers). "<br>";
next ($Numbers);
echo current($Numbers). "<br>";
reset($Numbers);
echo current($Numbers). "<br>";
end ($Numbers);
echo current($Numbers). "<br>";
next($Numbers);
echo current($Numbers). "<br>";


?>
	</body>
</html>
