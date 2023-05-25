<?php
require_once("Include/DB.php");
if (isset($_POST["Submit"])) {
	if (!empty($_POST["EName"])&&!empty($_POST["SSN"])) {
		$EName = $_POST["EName"];
		$SSN  = $_POST["SSN"];
		$Dept  = $_POST["Dept"];
		$Salary  = $_POST["Salary"];
		$HomeAddress  = $_POST["HomeAddress"];
		global $ConnectingDB;
		$sql = "INSERT INTO emp_record(ename,ssn,dept,salary,homeaddress)
		VALUES(:enamE,:ssN,:depT,:salarY,:homeaddresS)";
		$stmt = $ConnectingDB->prepare($sql);
		$stmt->bindValue(':enamE',$EName);
		$stmt->bindValue(':ssN',$SSN);
		$stmt->bindValue(':depT',$Dept);
		$stmt->bindValue(':salarY',$Salary);
		$stmt->bindValue(':homeaddresS',$HomeAddress);
		$Execute = $stmt->execute();
		if ($Execute) {
			echo '<span class="success"> Record Has been Addedd Successfully</span>';
		}
	}else {
echo '<span class="FieldInfoHeading">Please Add atleast Name and Social Security Number</span>';
	}
}






?>
<!DOCTYPE>
<html>
	<head>
		<title>Insert Data into Database</title>
		<link rel="stylesheet" href="Include/style.css">
	</head>
	<style media="screen">
	/* fieldset{
			background-image: url("Include/images/ems1.jpg");
			background-repeat: repeat-x;
	}
	body{
			background-image: url("Include/images/2.jpg");
			background-repeat: repeat;
	} */
	</style>
	<body>
<?php ?>
<div>
	<form class="" action="Insert_into_Database.php" method="post">
		<fieldset>
			<span class="FieldInfo">Employee Name:</span>
			<br>
			<input type="text" name="EName" value="">
			<br>
			<span class="FieldInfo">Social Security Number:</span>
			<br>
			<input type="text" name="SSN" value="">
			<br>
			<span class="FieldInfo">Department:</span>
			<br>
			<input type="text" name="Dept" value="">
			<br>
			<span class="FieldInfo">Salary:</span>
			<br>
			<input type="text" name="Salary" value="">
			<br>
			<span class="FieldInfo">Home Address:</span>
			<br>
			<textarea name="HomeAddress" rows="8" cols="80"></textarea>
			<br>
			<input type="submit" name="Submit" value="Submit your record">
		</fieldset>
	</form>
</div>

	</body>
</html>
