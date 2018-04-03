<?php 

	session_start();
	include('config/db.php');

	$uncms = $_POST['username'];
	$pwcms = $_POST['password'];

	$query = "SELECT * FROM tbl_admin WHERE username = '$uncms' AND password = '$pwcms' ";
	$result = mysqli_query($connection,$query);
	$num = mysqli_num_rows($result);

	if ($num == 0){
		header("Location: index.php?error=yes");

	}

	else{
		$row = mysqli_fetch_array($result);
		$_SESSION['uncms'] = $uncms;
		$_SESSION['user_id'] = $row['id'];
		$_SESSION['logincms'] = 'yes';

		header("Location: cmshome.php");
	}

 ?>