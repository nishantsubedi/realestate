<?php
	if(isset($_GET['token'])){
        
		if($_GET['token'] == md5('code_eta')){
               
			$email = $_POST['email'];	
				
            echo $email;

            include('../config/db.php');

            /*checking email */
			$sql = "SELECT email FROM tbl_newsletter";
			$result = mysqli_query($conn, $sql);
			
			if($result->num_rows > 0){
				while($row = $result->fetch_assoc()){
					
					if($email == $row["email"]){
                        header('Location: ../index.php?token=' . md5('code_theta'));
						die();
					}
				}
			}
		/*checking email finished*/


             $sql =  "INSERT INTO tbl_newsletter (email) VALUES 
                ('$email')";	
    
                if($conn->query($sql) == TRUE){
                    header('Location: ../index.php?token=' . md5('code_theta'));
                }
                
        }
    }else{
      header('Location: ../index.php');
    }
?>