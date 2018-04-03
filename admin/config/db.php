<?php 

	$servername = "localhost";
	$username = "root";
	$passworddb = "";
	$databasename = "realstate";

	//Create connection to DB
	$connection = mysqli_connect($servername, $username, $passworddb, $databasename);
	
	//Check connection to DB
	if(!$connection){
		die("Connection failed " . mysqli_connect_error());
	}

 ?>