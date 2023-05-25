<!DOCTYPE>

<html>
	<head>
		<title>Setting Cookie</title>
	</head>
	<body>
<?php ?>
<?php
$ExpireTime=time()+86400;
setcookie("Name","Jazeb",$ExpireTime);
setcookie("Age","24",$ExpireTime);
//print_r($_COOKIE);
echo $_COOKIE["Name"]."<br>";
echo 'my name is : '. $_COOKIE["Name"].' and my age is: '.$_COOKIE['Age'];


?>

	    
	</body>
</html>
