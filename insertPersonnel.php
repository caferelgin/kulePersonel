<?php
include 'connect.php'
	
	//To be fixed

	$sqlInsert  = "INSERT INTO tblCalisan (ad, soyad, initials, girisTarihi, sonTerfi ,kimlikNo) 
	VALUES ('$_POST[ad]', '$_POST[soyad]', '$_POST[initials]', '$_POST[kgTarihi]', '$_POST[sTTarihi]'");

	if (!mysql_query($sqlInsert,$con))
  	{
  		die('Error: ' . mysql_error());
  	}
	echo "1 record added";

	mysql_close($con);

?>
