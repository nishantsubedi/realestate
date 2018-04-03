<!DOCTYPE html>
<html>
<head>
    <title>Hamro Gharbar</title>

    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/admin-style.css" rel="stylesheet">

</head>
<body>

    <!-- CMS Navigation/ Headeer starts -->
    <div class="container-fluid" style="min-height: 50px;">
        <div class="row">
            <div class="col-lg-12">
                <div class="well"  style="text-align: center; background-color: #000; color: #fff;">
                   <h3> ADMIN Panel of <i>Hamro Gharbar </i></h3>
                </div>
            </div>
           
         
        </div>
    </div>
    <!-- CMS Navigation/ Headeer ends -->

   <!--codepen code start here-->
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-heading">                
                <div class="modal-body">                  
                    <form action="cms-loginaction.php" role="form" method="POST" name="login" id="loginform">

                        <div class="form-group">
                            <h3 style="text-align: center;">Login Form</h3>
                        </div>
                        
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-user"></span>
                                </span>
                                <input type="text" class="form-control" name="username" placeholder="UserName" />
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-lock"></span>
                                </span>
                                <input type="password" class="form-control" name="password" placeholder="Password" />
                            </div>
                        </div>

                        <div class="form-group text-center">
                            <input type="submit" class="btn btn-success btn-md" value="Login">
                            <input type="reset" class="btn btn-success btn-md" value="Reset">
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

<!--codepen code end here-->



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