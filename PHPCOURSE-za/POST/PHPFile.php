<!DOCTYPE>

<html>
	<head>
		<title>PHP FILE</title>
	</head>
	<body>
<?php
print_r($_POST);
?>

<?php
$Username=$_POST["Username"];
$Password=$_POST["Password"];
$Submit=$_POST["Submit"];
if (isset($_POST['Submit'])){
	echo "Sucessfull Login<br>";
	echo "Welcome :{$Username}<hr>";
	
}
 /*if(isset($Username)&&!empty($Username))
 {
echo "Username is set with the name of : {$Username}<br>";
 }else
 {
echo "No Username detected <br>";
 }
  if(isset($Password)&&!empty($Password))
 {
echo "Password: {$Password}<br>";
 }else
 {
echo "No Password detected <br>";
 }*/
 if(isset($_POST["Username"])){
	$Username=$_POST["Username"];
	echo "$Username <br>";
 }
 else {
	$Username="";
 }
  if(isset($_POST["Password"])){
	$Username=$_POST["Password"];
	echo "$Password <br>";
 }
 else {
	$Password="";
 }
 






?>
	    
	</body>
</html>
