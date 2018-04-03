<?php
 session_start();

	if(isset($_GET['token'])){
		if($_GET['token'] == md5('code_delta')){
               
			$username_client = $_POST['username'];	
			if(isset($_POST['remember'])){
				$remember_me = $_POST['remember'];
			}
			$password_client = $_POST['password'];	
			$password_client = md5($password_client);

			include('../config/db.php');
			/*checking username and password */
			$sql = "SELECT username,password FROM tbl_client";
			$result = mysqli_query($conn, $sql);
			
			if($result->num_rows > 0){
				while($row = $result->fetch_assoc()){
					
					if($username_client == $row["username"] && $password_client == $row['password']){
						// $_SESSION['login_user']=$username_client; 
						if($remember_me == 'true'){
							/*Here $username_client is the username and $password_client is the md5 hash of the users password  */
							// setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
							setcookie('user', $username_client, time() + (86400 * 30), "/");
					
						
							$cookie_value = md5($username_client.$password_client);
							
							setcookie('pin', $cookie_value, time() + (86400 * 30), "/"); 

						}
                        $_SESSION['user']=session_id();
                        header("location: ../index.php");
                        die();
					}
				}
            }
            header('Location: ../login.php?token=' . md5("code_epsilon"));
		/*checking usernameand password finished*/

		}


		elseif($_GET['token'] == md5('code_iota')){
			if(isset($_COOKIE['user'])) {
				if(isset($_COOKIE['pin'])) {
					$username_client = $_COOKIE['user'];	
					$password_client = $_COOKIE['pin'];
					include('../config/db.php');
					/*checking username and password */
					$sql = "SELECT username,password FROM tbl_client";
					$result = mysqli_query($conn, $sql);
					if($result->num_rows > 0){
						while($row = $result->fetch_assoc()){
							$temp_hash =md5($username_client.$row['password']);
							if($username_client == $row["username"] && $password_client == $temp_hash){
								$_SESSION['user']=session_id();
								header("location: ../index.php");
								die();
							}
						}
					}

				}
			}
		} 
		else {
			header('Location: ../404.php');
		}
		
		
	}
 	else{
 		header('Location: ../404.php');
 	}
?>