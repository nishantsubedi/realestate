<?php

  session_start();
  include('config/db.php');

  $q = "SELECT * FROM tbl_about";
  $result = mysqli_query($connection, $q);
  $num =  mysqli_num_rows($result);


?>






<!DOCTYPE html>
<html>
<head>
    <title>Hamro Gharbar</title>
    
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="css/admin-style.css" rel="stylesheet" type="text/css">


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
            <a href="cms-about-add.php" style="text-decoration: none; color: #fff";>Add Records</a></div>
          </div>

      </div>
    </div> 
    <div class="container">       
    
      
        <h2>About Page Details</h2>
        <div class="table-responsive">
          <table class="table-striped" width="100%" border="1" >
            <tr>
              <th style="text-align: center;">S.N</th>
              <th style="text-align: center;">Title</th>
              <th style="text-align: center;">Description</th>
              <th style="text-align: center;">Action</th>
              
            </tr>
            
            <?php
              
              for($i=0; $i<$num; $i++)
              {
                $j = $i+1;
                $row = mysqli_fetch_array($result);
              
                ?>
                <tr>
                  <td style="padding: 5px; text-align: center;" width="4%"><?php echo $j; $j++; ?></td>
                  <td style="padding: 5px;" width="20%"><?php echo $row['title']; ?></td>
                  <td style="padding: 5px;"><?php echo $row['description']; ?></td>

                  <td style="padding: 5px;" width="10%"><a style="text-decoration: none;" href="cms-about-edit.php?id=<?php echo $row['id'] ?>">Edit</a> &nbsp; |
                      <a style="text-decoration: none;" href="delete-records-about.php?id=<?php echo $row['id'] ?>" onclick = "JavaScript:a = confirm('Are you sure?'); if(!a) return false;">Delete</a>


              <?php
                }
              
              ?>


            

          </table>

        

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