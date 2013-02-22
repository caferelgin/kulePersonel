<?php

include 'connect.php';


	$ad = $_POST["ad"];
	$soyad = $_POST["soyad"];
	
	$initials = $_POST["initials"]; 
	$girisTarihi = $_POST["kGTarihi"];
	$sonTerfi = $_POST["sTTarihi"];
	$kimlikNo = $_POST["kimlikNo"];

	$sqlInsert  = "INSERT INTO tblCalisan (ad, soyad, initials, girisTarihi, sonTerfi, kimlikNo) VALUES (?,?,?,?,?,?)";
	
	if(($InsertStatement=$con->prepare($sqlInsert))==FALSE)
	{
		die("Prepare failed!");
	}

	$InsertStatement->bind_param("ssssss", $ad, $soyad, $initials, $girisTarihi, $sonTerfi, $kimlikNo);

	echo $ad ;
	if(!$InsertStatement->execute())
	{
		echo "Execute failed: (" . $InsertStatement->errno .") ". $InsertStatement->error;
	}

?>
