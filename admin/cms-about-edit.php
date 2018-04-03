<?php

  include('config/db.php');

  $id = $_GET['id'];
  $q = "SELECT * FROM tbl_about WHERE id = '$id'";
  $result = mysqli_query($connection, $q);
  $num =  mysqli_num_rows($result);
  $row = mysqli_fetch_array($result);


?>






<!DOCTYPE html>
<html>
<head>
    <title>Hamro Gharbar</title>
    
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="css/admin-style.css" rel="stylesheet">

<style>
.cmshome-body-container{
  background-color: #ccc;
}
  
</style>


</head>


<body>

    <!-- CMS Navigation/ Headeer starts -->
    <?php
      include('includes/cms-nav.php');
    ?>

    <!-- CMS Navigation/ Headeer ends -->


    
    <div class="container">
      <div class="row">
        <div class="col-lg-10"></div>
        <div class="col-lg-2">
          <div class="well"  style="background-color: #b82005; text-align: center;">
            <a href="cms-about-list.php" style="text-decoration: none; color: #fff";>View Records</a></div>
          </div>
        </div>

      </div>
    </div> 
    <div class="container">       
    
      
        <h4>Please fill the data carefully</h4>

        <form action="cms-about-edit-action.php" method="POST"  name="about-edit-form" id="about-edit-form" >

            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon">Title
                           <!-- <span class="glyphicon glyphicon-user"></span>-->
                            </span>
                            <input type="text" class="form-control" id="title" name="title" value="<?php echo $row['title']; ?>"/>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon">Description
                           <!-- <span class="glyphicon glyphicon-user"></span>-->
                            </span>
                            <textarea class="form-control" id="description"  name="description" rows="10"  >
                              <?php echo $row['description']; ?>
                            </textarea>
                            
                        </div>
                    </div>

                    <div class="form-group">
                        <input type="submit" id="submit" value="Update" class="btn btn-success btn-md" >
                        
                    </div>

                  
        
    </div>

<!-- Footer starts-->
<?php
  include('includes/cms-footer.php');
?>
<!-- Footer ends-->

        





<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>

</body>
</html>