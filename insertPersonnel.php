<?php

//include 'connect.php'
	
	$con = new mysqli('localhost','cafer','1234', 'kule_db');
	

	if ($con->connect_errno) 
	{  	
  		exit('Connect failed: '. $con->connect_error . " " . $con->connect_error);
	}
	echo $con->host_info . "\n";

	//To be fixed
	$ad = $_POST["ad"];
	$soyad = $_POST["soyad"];
	
	$initials = $_POST["initials"]; 
	$girisTarihi = $_POST["kGTarihi"];
	$sonTerfi = $_POST["sTTarihi"];
	$kimlikNo = $_POST["kimlikNo"];

	$sqlInsert  = "INSERT INTO tblCalisan (ad, soyad, initials, girisTarihi, sonTerfi ,kimlikNo) VALUES (?,?,?,?,?,?) ";

	echo $ad ;
/*
	if ($con->query($sqlInsert) == TRUE)
  	{
  		echo "1 record added";
  	}
	else
	{
		echo 'Error: ' . $con->error;
		exit();
	}

	$con->close();
*/

?>
