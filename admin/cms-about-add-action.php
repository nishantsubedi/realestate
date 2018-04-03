<?php  
	 
	include('config/db.php');

	$title = $_POST['title'];
	$description = $_POST['description'];
	$created_at = date("Y-m-d H:i:s");
	$created_at = date("Y-m-d H:i:s");



	$query1 = "INSERT INTO `tbl_about` (`id`, `title`, `description`,`created_at`) VALUES (NULL, '$title', '$description', '$created_at');";

	$result = mysqli_query($connection, $query1);
	
	//var_dump($query1);
	//exit();

	/*
	if($connection->query($query1) == TRUE){
		echo 'success';
	}

	
 	else{
 		echo "fail";
 	
 	}
	*/

	header("Location: cms-about-list.php");



?>