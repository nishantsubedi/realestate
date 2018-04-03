<?php 
	session_start();
	unset($_SESSION['logincms']);
	header("Location: index.php");
 ?>