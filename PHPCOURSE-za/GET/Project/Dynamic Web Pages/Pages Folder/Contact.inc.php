<h1 id="request">Movie Premier Booking Form</h1>
<p class="req">Interested in Movie Premier at NY Cinema? Please complete and submit the following form to the Booking Office. One of our representatives will send you an information package tailored to the field(s) of Premier that interest you. Please indicate whether you would like additional information or not</p>

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
/*echo "Name:".ucwords ($_POST["Name"])."<br>";
echo "Email: {$_POST["Email"]}<br>";
echo "Gender: {$_POST["Gender"]}<br>";
echo "Website: {$_POST["Website"]}<br>";
echo "Comments: {$_POST["Comment"]}<br>"; */
$emailTo="mail@gmail.com";
 $subject="Contact Form";
 $body=" Name : ".$_POST["Name"]."
 Email : ".$_POST["Email"].
 "
 Gender : ". $_POST["Gender"]."
 Website : ".$_POST["Website"].
 "
 Message :: ".$_POST["Comment"];
 $Sender="From:mail@gmail.com";
     if (mail($emailTo, $subject, $body, $Sender)) {
                echo "<h2>".$_POST['Name'].",  Your Message Submitted Successfully</h2> <br>";
                    } else {
                echo "<h2>".$_POST['Name']." Something Went Wrong :/ Try Again !</h2> <br>";
                    }
     
}else{
	echo '<span class="Error">* Please Complete & Correct your Form then Try Again*<br><br></span>';
}
}
}//Submit Scope  Ends here
//Function to get and throw data to each of the field final varriable like Name / Gender etc.
function Test_User_Input($Data){
	return $Data;
}

//php code ends here
?>

<style type="text/css">
input[type="text"],input[type="email"],textarea{
	border:  1px solid dashed;
	background-color: rgb(221,216,212);
	width: 480px;
	padding: .5em;
	font-size: 1.0em;
}
.Error{
	color: red;
    font-size: 1.2em;  
font-family: Bitter,Georgia,Times,"Times New Roman",serif;}
input[type="submit"]{
 color: white;
    float: right;
    font-size: 1.3em;
    font-family: Bitter,Georgia,Times,"Times New Roman",serif;
    width: 170px;
    height: 40px;
    background-color:  #5D0580;
    border: 5px solid ;
    border-bottom-left-radius: 35px;
   border-bottom-right-radius: 35px;
   border-top-left-radius: 35px;
   border-top-right-radius: 35px;
    border-color: rgb(221,216,212);
      font-weight: bold;
}
.FieldInfo{
     color: rgb(251, 174, 44);
    font-family: Bitter,Georgia,"Times New Roman",Times,serif;
    font-size: 1.3em;
   

}
.MF{
	color: black;
    font-size: 1.2em;  
font-family: Bitter,Georgia,Times,"Times New Roman",serif;}

</style>

<?php ?>

<form  action="" method="post"> 
<legend>* Please Fill Out the following Fields.</legend>			
<fieldset>
 <span class="FieldInfo">
Name:</span><br>
<input class="input" type="text" Name="Name" value="">
<span class="Error">*<?php echo $NameError;  ?></span><br>
<span class="FieldInfo">
E-mail:</span><br>
<input class="input" type="text" Name="Email" value="">
<span class="Error">*<?php echo $EmailError; ?></span><br>
<span class="FieldInfo">
Gender:</span><br>
<input class="radio" type="radio" Name="Gender" value="Female"><span class="MF">Female</span>
<input class="radio" type="radio" Name="Gender" value="Male"><span class="MF">Male</span>
<span class="Error">*<?php echo $GenderError; ?></span><br>
<span class="FieldInfo">
Website:</span><br>
<input class="input" type="text" Name="Website" value="">
<span class="Error">*<?php echo $WebsiteError; ?></span><br>
<span class="FieldInfo">
Message:</span><br>
<textarea Name="Comment" rows="5" cols="25"></textarea>
<br>
<br>
<input type="Submit" Name="Submit" value="Submit">
   </fieldset>
</form>
