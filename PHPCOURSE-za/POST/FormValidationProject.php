<?php
// Initialize variables to null.
$NameError="";
$EmailError="";
$GenderError="";
$WebsiteError="";
//On Submitting form, below function will execute
//Submit Scope starts from here
if(isset($_POST['Submit'])){
	
 if(empty($_POST["Name"])){
$NameError="Name is Required";
 }
 else{
$Name=Test_User_Input($_POST["Name"]);
// check Name only contains letters and whitespace
if(!preg_match("/^[A-Za-z\. ]*$/",$Name)){
$NameError="Only Letters and white sapace are allowed";
}
 }
  if(empty($_POST["Email"])){
$EmailError="Email is Required";
 }
 else{
$Email=Test_User_Input($_POST["Email"]);
// check if e-mail address syntax is valid or not
if(!preg_match("/[a-zA-Z0-9._-]{3,}@[a-zA-Z0-9._-]{3,}[.]{1}[a-zA-Z0-9._-]{2,}/",$Email))
{
$EmailError="Invalid Email Format";
}
}
  if(empty($_POST["Gender"])){
$GenderError="Gender is Required";
 }
 else{
$Gender=Test_User_Input($_POST["Gender"]);

}
  if(empty($_POST["Website"])){
$WebsiteError="Website is Required";
 }
 else{
$Website=Test_User_Input($_POST["Website"]);
 // check Website address syntax is valid or not

if(!preg_match("/(https:|ftp:)\/\/+[a-zA-Z0-9.\-_\/?\$=&\#\~`!]+\.[a-zA-Z0-9.\-_\/?\$=&\#\~`!]*/",$Website)){
$WebsiteError="Invalid Webside Address Format";	
}
}
if(!empty($_POST["Name"])&&!empty($_POST["Email"])&&!empty($_POST["Gender"])&&!empty($_POST["Website"])){
if((preg_match("/^[A-Za-z\. ]*$/",$Name)==true)&&(preg_match("/[a-zA-Z0-9._-]{3,}@[a-zA-Z0-9._-]{3,}[.]{1}[a-zA-Z0-9._-]{2,}/",$Email)==true)&&(preg_match("/(https:|ftp:)\/\/+[a-zA-Z0-9.\-_\/?\$=&\#\~`!]+\.[a-zA-Z0-9.\-_\/?\$=&\#\~`!]*/",$Website)==true))
{
echo "<h2>Your Submit Information</h2> <br>";
echo "Name:".ucwords ($_POST["Name"])."<br>";
echo "Email: {$_POST["Email"]}<br>";
echo "Gender: {$_POST["Gender"]}<br>";
echo "Website: {$_POST["Website"]}<br>";
echo "Comments: {$_POST["Comment"]}<br>";
$emailTo="mail@gmail.com";
 $subject="Contact Form";
 $body=" A person name : ".$_POST["Name"]." With the Email : ".$_POST["Email"].
 " have Gender : ". $_POST["Gender"]." have website of: ".$_POST["Website"].
 " Added Comment :: ".$_POST["Comment"];
 $Sender="From:mail@gmail.com";
     if (mail($emailTo, $subject, $body, $Sender)) {
                echo "Mail sent successfully!";
                    } else {
                                echo "Mail not sent!";
                    }
}else{
	echo '<span class="Error">* Please Complete & Correct your Form & Try Again *</span>';
}
}
}//Submit Scope  Ends here
//Function to get and throw data to each of the field final varriable like Name / Gender etc.
function Test_User_Input($Data){
	return $Data;
}

//php code ends here
?>



<!DOCTYPE>

<html>
	<head>
		<title>Form Validation Project</title>
	</head>
<style type="text/css">
input[type="text"],input[type="email"],textarea{
	border:  1px solid dashed;
	background-color: rgb(221,216,212);
	width: 600px;
	padding: .5em;
	font-size: 1.0em;
}
.Error{
	color: red;
}
</style>
	<body>
<?php ?>
<h2>Form Validation with PHP.</h2>

<form  action="FormValidationProject.php" method="post"> 
<legend>* Please Fill Out the following Fields.</legend>			
<fieldset>
Name:<br>
<input class="input" type="text" Name="Name" value="">
<span class="Error">*<?php echo $NameError;  ?></span><br>	 
E-mail:<br>
<input class="input" type="text" Name="Email" value="">
<span class="Error">*<?php echo $EmailError; ?></span><br>
Gender:<br>
<input class="radio" type="radio" Name="Gender" value="Female">Female
<input class="radio" type="radio" Name="Gender" value="Male">Male
<span class="Error">*<?php echo $GenderError; ?></span><br>		   
Website:<br>
<input class="input" type="text" Name="Website" value="">
<span class="Error">*<?php echo $WebsiteError; ?></span><br>
Comment:<br>
<textarea Name="Comment" rows="5" cols="25"></textarea>
<br>
<br>
<input type="Submit" Name="Submit" value="Submit Your Information">
   </fieldset>
</form>


	    
	</body>
</html>
