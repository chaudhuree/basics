<?php
$ExpireTime=time()+86400;
setcookie("Name","Jazeb",$ExpireTime);
setcookie("Age","24",$ExpireTime);
//UnSEt Cookie
$ExpireTime_Unset=time()-86400;
setcookie("Name","Jazeb",$ExpireTime_Unset);
//setcookie("Name",null);
//setcookie("Name","",$ExpireTime_Unset);

if(isset($_COOKIE['Name'])){
echo 'Cookie is set with the Name of '. $_COOKIE['Name'];
}else{
	echo 'Cookie is not Set';
}

?>

<!DOCTYPE>

<html>
	<head>
		<title>Setting Un-Cookie</title>
	</head>
	<body>
<?php ?>

	    
	</body>
</html>
