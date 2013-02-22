<?php

include 'connect.php'
	
	//To be fixed
	$sqlInsert  = "INSERT INTO tblCalisan (ad, soyad, initials, girisTarihi, sonTerfi ,kimlikNo) 
	VALUES ('$_POST[ad]', '$_POST[soyad]', '$_POST[initials]', '$_POST[kgTarihi]', '$_POST[sTTarihi]')";

	if ($con->query($sqlInsert) == TRUE)
  	{
  		echo "1 record added";
  	}
	else
	{
		echo 'Error: ' . $con->error;
	}

	$con->close();

	//echo "$_POST[ad]";
?>
