<?<?php 

	//session_start();
	include('config/db.php');

	$id = $_GET['id'];

	$q1 = "DELETE  FROM tbl_about WHERE id = '$id'";

	mysqli_query($connection, $q1);

	header("Location: cms-about-list.php");

 ?>