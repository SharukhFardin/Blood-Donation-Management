<?php
	$db_server = "localhost";
    $db_user   = "root";
    $db_pass   = "";
    $db_name   = "final-project";

	//Connecting to the database
	$conn = mysqli_connect($db_server,$db_user,$db_pass,$db_name);
	echo "connected to the database. ";
    if(!$conn){
    	die("Connection failed! :".mysqli_connect_error());
  	}
		
?>