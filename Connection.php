<?php
	$host = "localhost";
	$username = "root";
	$password = "AppuSri0204";
	$database_in_use = "xtrmauto";

	$link = mysqli_connect($host,$username,$password,$database_in_use);
	
	if(mysqli_connect_error()){
		die ("There was an error connecting to the database");
	}
	
?>