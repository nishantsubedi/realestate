<?php  
	 
	include('config/db.php');

	$id =$_POST['id'];
	$title = $_POST['title'];
	$description = $_POST['description'];
	$created_at = date("Y-m-d H:i:s");
	$created_at = date("Y-m-d H:i:s");



	/*UPDATE `tbl_about` SET `title` = '$title
', `description` = '$description' WHERE `tbl_about`.`id` = 1;
*/

	$query1 = "UPDATE `tbl_about` SET `title` = '$title', `description` = '$description' WHERE id = '$id'";



	
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