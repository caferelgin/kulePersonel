 <?php 
 	// Connects to database
 	// Values to be changed 
	$con = mysql_connect("localhost","cafer","1234");
	if (!$con)
  	{
  		die('Could not connect: ' . mysql_error());
  	}

	mysql_select_db("kule_db", $con);

 ?> 