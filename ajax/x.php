<?php 

session_start();

$user='root';
$pass='';
$db='korike';
$db=new mysqli('localhost',$user,$pass,$db) or die("error");


	
	$a=$_POST['sel'];
	$b=$_POST['sel2'];
	$c=$_POST['location'];
	$d=$_POST['description'];
	date_default_timezone_set("Asia/KolKata");
	$e=date("Y:m:d");
	if((($a)&&($b)&&($c)&&($d))!=""){
	$sql3="INSERT INTO complaintregistration(l_id, category, subcategory, location, description,status,time) VALUES ('".$_SESSION['hello']."','".$a."','".$b."','".$c."','".$d."','pending','".$e."')";
		header("Content-type: text/x-json");											
	if(mysqli_query($db,$sql3)){
		
			echo json_encode("Data saved successfully...");
	}
	else{
		echo json_encode("You have error");
		exit();
	}
	}
		else{
		echo json_encode("You need to enter all the data");
		exit();
	}
	





?>