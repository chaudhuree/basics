<?php
if(isset($_POST["Submit"])) {
$Username=$_POST["Username"];
$Password=$_POST["Password"];

if($Username=="Jazeb" && $Password=="Akram")
{
	echo "<h2>Welcome : {$_POST["Username"]}</h2>";
}else{
	echo "<h2>Account Does't Exists | Try Again</h2>";
}
}
else {
	echo "<h2>Login Required</h2>";
}


?>




<!DOCTYPE>

<html>
	<head>
		<title>Form</title>
	</head>
	<body>
<?php ?>
<fieldset>
    <legend>HTML 5 Form</legend>
    <form action="Form.php" method="POST" >
<label for="Username">Username:</label>
<input id="Username" type="text" name="Username"><br><br>
<label for="Password">Password:</label>
&nbsp;
<input id="Password" type="Password" name="Password"><br><br><br>
<input type="Submit" name="Submit" value="Submitted">
    </form>
    </fieldset> 
	</body>
</html>
