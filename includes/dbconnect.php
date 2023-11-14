<?php
	$dbServer = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbName = "dtp";
	
	$conn = mysqli_connect($dbServer, $dbUsername, $dbPassword, $dbName);
	
	if(!$conn)
	{
		die( "Connection failed: " . mysqli_connect_error() );
	}
