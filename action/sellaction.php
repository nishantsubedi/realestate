<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "realstate");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// Get text
  	//$image_text = mysqli_real_escape_string($db, $_POST['image_text']);


  		$location =$_POST['location'];
		$price =$_POST['price'];
		$type =$_POST['type'];
		$category =$_POST['category'];
		$details =$_POST['detail'];
		$created_at = date("Y-m-d H:i:s");

		$user_id = 45;  /*suppose */
	

  	// image file directory
  	$target = "../uploaded_images/".basename($image);

  	$sql = "INSERT INTO tbl_property (user_id, prop_location, prop_price, category, add_type, image_url, details, created_at) VALUES ('$user_id', '$location','$price', '$category', '$type','$image', '$details', '$created_at')";
  	// execute query
  	mysqli_query($db, $sql);

  	//var_dump($sql);
  	//exit();

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }
  $result = mysqli_query($db, "SELECT * FROM tbl_property");
?>




<?php
	/*
	if(isset($_POST['button'])){
		
		$location =$_POST['location'];
		$price =$_POST['price'];
		$type =$_POST['type'];
		$category =$_POST['category'];
		$details =$_POST['detail'];
		$user_id = 45;  /*suppose */
		//$image_url ='slide1.jpg';/*suppose */

		//include('../config/db.php');

	/*inserting signup data*/
	//$sql =  "INSERT INTO tbl_property (user_id, prop_location, prop_price, category, add_type, image_url) VALUES 
	/*('$user_id', '$location','$price', '$category', '$type', '$image_url')";	
	$result = mysqli_query($conn, $sql);
	//var_dump($result);
	//exit();
	if($conn->query($sql) == TRUE){
		echo 'success';
	}

	
 	else{
 		echo "fail";
 	
 	}
	}*/

?>