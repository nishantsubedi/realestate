<?php  
    
    include('includes/header.php');
    
    if(isset($_SESSION['user'])){
        if($_SESSION['user']==session_id()){
            header('Location: index.php');
        }
    }
?>

     <!--start of codepen code-->
   
   <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-heading">
                <h2 class="text-center">Sign Up</h2>
            </div>
            <hr />
            
                 <?php 
                        if(isset($_GET['token']) && $_GET['token'] == md5('code_gamma')){
                            echo '
                                <div class="alert alert-danger" id="">
                                    Username already exist
                                </div>
                            ';
                        }
                        else{
                    echo ' <div class="" style="visibility:hidden;"> <div class="alert alert-danger" id="alert">

                      </div> </div>';
                  }

                ?>

           

                     
            <div class="modal-body">
                <form action="action/signupaction.php?token=<?php echo md5("code_alpha"); ?>" role="form" method="post" name="signup" id="signupform">
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon">
                            <span class="glyphicon glyphicon-user"></span>
                            </span>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name" />
                        </div>
                    </div>
                    
                
                    
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon">
                            <span class="glyphicon glyphicon-envelope"></span>
                            </span>
                            <input type="email" class="form-control" id="email" name="email" placeholder="E-mail" />
                        </div>
                    </div>
 
                     <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon">
                            <span class="glyphicon glyphicon-user"></span>
                            </span>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Username"  />
                        </div>
                    </div>                   
                    
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon">
                            <span class="glyphicon glyphicon-earphone"></span>
                            </span>
                            <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone Number"  />
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon">
                            <span class="glyphicon glyphicon-home"></span>
                            </span>
                            <input type="text" class="form-control" id="address" name="address" placeholder="Address" />
                        </div>
                    </div>
                    
                    
                    
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon">
                            <span class="glyphicon glyphicon-lock"></span>
                            </span>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" />
                        </div>

                    </div>
                    
                    
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon">
                            <span class="glyphicon glyphicon-lock"></span>
                            </span>
                            <input type="password" class="form-control" id="password2" placeholder="Re-Password" />

                        </div>
                    </div>
                    
                    

                    <div class="form-group text-center">
                        <button type="button" id="signup-btn" name="signup-btn" class="btn btn-success btn-md">Sign Up</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
    
    <!--end of codepen-->

     <script>
         $(document).ready(function(){
            $("#alert").css("visibility","visible");
           $('#alert').hide();
          
          $( "#signup-btn" ).click(function() {
           
            if( $('#name').val().length == 0){
                $('#alert').html('Please Enter the Name');
                $('#alert').show();
                return;
            }
            if( $('#email').val().length == 0){
                $('#alert').html('Please Enter the Email');
                $('#alert').show();
                return;
            }

            if( $('#username').val().length == 0){
                $('#alert').html('Please Enter the Username');
                $('#alert').show();
                return;
            }
           
            if( $('#phone').val().length == 0){
                $('#alert').html('Please Enter the Phone No');
                $('#alert').show();
                return;
            }
            if(!$.isNumeric( $('#phone').val())){
                 $('#alert').html('Please enter a numeric value for Phone No');
                $('#alert').show();
                return;
              }
            if( $('#address').val().length == 0){
                $('#alert').html('Please Enter the Address');
                $('#alert').show();
                return;
            }
              
            if( $('#password').val().length == 0){
                $('#alert').html('Please Enter the Password');
                $('#alert').show();
                return;
            }
            if( $('#password').val().length < 6){
                $('#alert').html('Password should be at least 6 character long');
                $('#alert').show();
                return;
            }
            // alert( $('#password').val() +" "+ $('#password2').val() );
            var pass1 = $('#password').val();
            var pass2 = $('#password2').val();

            if( pass1 != pass2){
                $('#alert').html('Passwords do not match');
                $('#alert').show();
                return;
            }
            
              $('#signupform').submit();

        });

    });
    </script>  
    <?php  
    
    include('includes/footer.php');
?>