<!DOCTYPE>

<html>
	<head>
		<title>URL</title>
	</head>
	<body>
<?php ?>
<?php
$Web="Google Pakistan";
$Search="Jazeb Akram Online Courses & Website";
$Result="https://".rawurlencode($Web)."?Search=".urlencode($Search);
echo $Result."<br>";
?>
	</body>
</html>
