 <?php 
 	// Connects to database
 	// Values to be changed 
	//$con = mysql_connect("localhost","cafer","1234");
		
	$con = new mysqli('localhost','cafer','1234', 'kule_db');
	

	if ($con->connect_errno) 
	{  	
  		exit('Connect failed: '. $con->connect_error . " " . $con->connect_error);
	}
	echo $con->host_info . "\n";
 ?> 