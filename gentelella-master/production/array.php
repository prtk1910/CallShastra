<?php
session_start();
$array=$_SESSION["array"];

$tonecat=$array["tone_categories"];


$test=json_encode($tonecat);

$test2=json_decode($test,true);
$testx=json_encode($test2[0]['tones']);
echo $testx;
$testxx=json_decode($testx,true);
echo "<br><br>";
foreach($testxx as $x) {
	
	echo $x['tone_id'] . "<br>";
}
echo $_SESSION["finaljson"];
$servername="localhost";
$username="root";
$password="";
$database="callreview";
$conn= new mysqli($servername,$username,$password,$database);
if($conn->connect_error) {
	die("lmao");
}

$sentimentjson=$_SESSION["sentimentjson"];
echo "<br><br>".$sentimentjson;
$sentimentarray=json_decode($sentimentjson,true);
echo "<br><br>";
foreach($sentimentarray as $x) {
	print_r($x);
	echo "<br><br>";
	
}
echo $sentimentarray["polarity_confidence"];

?>