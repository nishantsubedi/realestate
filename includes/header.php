<?php
session_start();


?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <script src="js/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="css/font-awesome.css" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/w3.css">

    <link rel="stylesheet" href="css/style.css">

    <title>Home</title>

</head>

<body>

        <div id="nav">
            <div class="navbar navbar-inverse navbar-fixed-top" data-spy="affix" data-offset-top="100">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            </button>
                        <a class="navbar-brand" href="index.php"><img class="img-responsive logo" src="images/logo.png" alt=""></a>
                    </div>
                    <div id="navbar" class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">

                            <li><a href="index.php" style="background-color: #b82005; color: #fff; margin-right: 320px; border-radius: 10px;"><b><i>HamroGharbar.com</i></b></a></li>

                            <li class="active"><a href="index.php">HOME</a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">CATEGORIES
                                    <span class="caret"></span></a>
                                        <ul class="dropdown-menu" style="background-color:grey;">
                                            <li><a href="item-house.php">HOUSE</a></li>
                                            <li><a href="items.php?q=land">LAND</a></li>
                                            <li><a href="items.php?q=apartment">APARTMENT</a></li> 
                                        </ul>
                            </li>
                            <li><a href="about.php">ABOUT US</a></li>
                            <li><a href="sell.php"> Sell Property</a>
                                        </li>
                            <?php
                            if(isset($_SESSION['user'])){
                                if($_SESSION['user']==session_id())
                                {
                                
                                    echo '
                                        <li><a href="action/logout.php"><span class="glyphicon glyphicon-log-out"></span> Log Out</a>
                                        </li>
                                    ';
                                } 
                            } else {
                                echo '
                                    <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> LOGIN</a>
                                    </li>
                                    <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> SIGN UP</a>
                                    </li>
                                ';
                            }
                            ?>
                        </ul>
                    </div>
        <!--/.nav-collapse -->
                </div>
      <!--/.contatiner -->
            </div>
        </div>
        <hr>