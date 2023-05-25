<!DOCTYPE>

<html>
	<head>
		<title>For each loop structure</title>
	</head>
	<body>
<?php ?>
<?php
$Number=array(8,60,168,995,45,25,5,100);
foreach($Number as $Num){
	echo "Numbers: {$Num} <br>";
	}
		?><hr>
<?php
$Food=array(
	"item_number"=>1050,
	"name"=>"Pizza",
	"region"=>"Italy",
	"Side_food"=>"Pasta",
	"drink"=>"Cook",
	"package_price"=>78545
);
foreach($Food as $Key=>$Value){
	$Data=ucwords( str_replace("_"," ",$Key));
if($Key=="package_price"){
	if(is_numeric($Value)){
		}else
		{
	$Value="Can not be determined";
		}
}	
	echo "{$Data} : {$Value} <br>";
}



?>

<hr>
	
	  	
		
		
		
	</body>
</html>
