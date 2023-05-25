<!DOCTYPE>

<html>
	<head>
<title>File 1 </title>
	</head>
	<body>
<?php ?>
<?php $Name="Alex Morre";   ?>
<?php $Position="Support Coordinator & Manager"?>
<a href="File2.php?Name=<?php echo $Name; ?>">Click</a><br>
<a href="File2.php?Name=<?php echo $Name; ?>&<?php echo $Position;?>">Click2</a>
<a href="File2.php?Name=<?php echo $Name; ?>&Position=<?php echo rawurlencode($Position); ?>">Click3</a>

</body>
</html>
