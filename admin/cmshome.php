<?php 
  session_start();
  include('config/db.php');

  if(!isset($_SESSION['logincms']) && $_SESSION['logincms']!= 'yes'){
  header("Location: index.php");
  exit();
}
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
    
   <!--
    <div class="container">
      <div class="row">
        <div class="col-lg-4"><div class="well">ADD Records</div></div>
        <div class="col-lg-4"><div class="well">UPDATE Records</div></div>
        <div class="col-lg-4"><div class="well">DELETE Records</div></div>

      </div>
    </div>
  -->

    <div class="container cmshome-body-container">

      <div class="row">
        <div class="col-lg-6">
          <div class="well"> 
            <a href="cms-about-list.php">ABOUT Page</a>
          </div>
        </div>
                
        <div class="col-lg-6">
            <div class="well">Advertisement List</div>
        </div>          
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