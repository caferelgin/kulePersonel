 <?php 
 	// Connects to database
 	// Values to be changed 
	//$con = mysql_connect("localhost","cafer","1234");
	
	$con = new mysqli('localhost','cafer','1234', 'kule_db');
	
	if (mysqli_connect_errno()) 
	{  	
  		exit('Connect failed: '. mysqli_connect_error());
	}
 ?> 