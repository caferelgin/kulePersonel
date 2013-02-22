<?php

include 'connect.php';



	//To be fixed
	$ad = $_POST["ad"];
	$soyad = $_POST["soyad"];
	
	$initials = $_POST["initials"]; 
	$girisTarihi = $_POST["kGTarihi"];
	$sonTerfi = $_POST["sTTarihi"];
	$kimlikNo = $_POST["kimlikNo"];

	$sqlInsert  = "INSERT INTO tblCalisan (ad, soyad, initials, girisTarihi, sonTerfi, kimlikNo) VALUES (?,?,?,?,?,?)";
	
	if(($InsertStatement =$con->prepare($sqlInsert))==FALSE)
	{
		die("Prepare failed!");
	}

	$InsertStatement->bind_param("ssssss", $ad, $soyad, $initials, $girisTarihi, $sonTerfi, $kimlikNo);

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
