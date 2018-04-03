<?php
	if(isset($_GET['token'])){
		if($_GET['token'] == md5('code_alpha')){
			$name = $_POST['name'];	
			$email = $_POST['email'];	
			$username_client = $_POST['username'];	
			$phone = $_POST['phone'];	
			$address = $_POST['address'];	
			$password_client = $_POST['password'];	
			$password_client = md5($password_client);

				include('../config/db.php');
		/*checking username */
			$sql = "SELECT username FROM tbl_client";
			$result = mysqli_query($conn, $sql);
			
			if($result->num_rows > 0){
				while($row = $result->fetch_assoc()){
					
					if($username_client == $row["username"]){
						header('Location: ../signup.php?token='.md5("code_gamma") );
						die();
					}
				}
			}
		/*checking username finished*/

		/*inserting signup data*/
			$sql =  "INSERT INTO tbl_client (full_name, email, phone_no, address, username, password) VALUES 
			('$name','$email', '$phone','$address', '$username_client', '$password_client')";	

			if($conn->query($sql) == TRUE){
				header('Location: ../login.php?token=' . md5("code_beta"));
			}
		}
	}
 	else{
 		header('Location: ../404.php');
 	}
?>