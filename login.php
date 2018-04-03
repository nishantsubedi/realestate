<?php  
    
    include('includes/header.php');
    if(isset($_SESSION['user'])){
        if($_SESSION['user']==session_id()){
            header('Location: index.php');
        }
    }

?>

   
   <!--codepen code start here-->
<div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-heading">
            <?php 
              
                if(isset($_COOKIE['user'])) {
                    echo'
                    <div class="alert alert-success" id="">
                     <a href="action/loginaction.php?token='.md5('code_iota') .'" >Log in as '.$_COOKIE['user'].'</a><a href="action/getout.php" class="close" >&times;</a>
                    </div>
                ';

                } 

            if(isset($_GET['token']) && $_GET['token'] == md5('code_beta')){
                echo'
                    <div class="alert alert-success" id="">
                    Successfully registered Log In to continue
                    </div>
                ';
            }elseif(isset($_GET['token']) && $_GET['token'] == md5('code_epsilon')){
                echo'
                    <div class="alert alert-danger" id="">
                    Incorrect Username or Password
                    </div>
                ';
            }elseif(isset($_GET['token']) && $_GET['token'] == md5('code_zeta')){
                echo'
                    <div class="alert alert-warning" id="">
                    Please Log in to continue
                    </div>
                ';
            }  else{
                echo '
                    <h2 class="text-center">Login</h2>
                ';
            }
           
               

            ?>
            </div>
            <hr />
            <div class="modal-body">
              
                <form action="action/loginaction.php?token=<?php echo md5('code_delta'); ?>" role="form" method="post" name="login" id="loginform">

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
                        <div class="input-group">
                             <a class="btn btn-secondary" onclick="asd()"><input type="checkbox" id="remember" name="remember" value="true">  remember me </a><br>
                            <script>
                            function asd(){
                               
                                if( document.getElementById("remember").checked == true){
                                    
                                     document.getElementById("remember").checked = false;
                                } else {
                                    document.getElementById("remember").checked = true;
                                }

                            }
                            </script>
                        </div>
                    </div>

                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-success btn-md">Login</button>
                        <a href="signup.php" class="btn btn-link">Sign Up</a>
                    </div>

                </form>
            </div>
        </div>
    </div>

<!--codepen code end here-->


   <?php  
    
    include('includes/footer.php');
?>