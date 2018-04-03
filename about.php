<?php  
    
    include('config/db.php');
    include('includes/header.php');
?>

<!-- Contents of about page starts -->


<div class="container">
	<?php

	  include('config/db.php');

	  $q = "SELECT * FROM tbl_about";
	  $result = mysqli_query($conn, $q);
	  $num =  mysqli_num_rows($result);


	?>


	<?php
              
              for($i=0; $i<$num; $i++)
              {
                $j = $i+1;
                $row = mysqli_fetch_array($result);
              
                ?>

                <div class="panel panel-danger">
					<div class="panel-heading"><?php echo $row['title']; ?> </div>
						<div class="panel-body">
							<p style="text-align: justify;"> <?php echo $row['description']; ?> </p>
						</div>
				</div>


                

              <?php
                }
              
              ?>

</div>
<!-- Contents of about page ends -->



<?php  
    
    include('includes/footer.php');
?>


