<?php  
    
    include('includes/header.php');
    include('config/db.php');

    $query = "SELECT * FROM tbl_property WHERE category = 'house'";
    $result = mysqli_query($conn, $query);
    $num = mysqli_num_rows($result);


?>


 <style type="text/css" media="screen">

.image-wrapper img{
    height: 300px;
    width: 300px;
    float: left: 
 }


     
 </style>   

    
    <div class="container">
        <div class="row">


        <?php 
            for($i=0; $i<$num; $i++){

                $row = mysqli_fetch_array($result);

                ?>

                <div class="col-sm-6 col-md-3 grey">
                    <div class="image-wrapper">
                        <?php echo "<img src='uploaded_images/".$row['image_url']."' >"; ?>
                    </div>
                    
                    <div class="panel panel-default">
                        
                        <div class="panel-heading"><?php echo $row['prop_price']; ?> </div>
                        <div class="panel-body">
                            <p><?php echo $row['prop_location']; ?> </p>
                            <a class="form-control input-md btn btn-danger" href="detail.php?id=<?php echo $row['id'] ?>">More Details</a>
                        </div>
                    </div>
                </div>
            


            <?php
            }
         ?>
            </div>
        </div>
           
<!--
            <div class="col-sm-6 col-md-3 grey">
                <div class="image-wrapper">
                    <img class="img img-responsive" src="images/1.jpg">
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">Rs 45,000,000</div>
                    <div class="panel-body">
                        <p>Lorem ipsum is the world Lorem ipsum is the world Lorem ipsum is the world Lorem ipsum is the world </p>
                        <a class="form-control input-md btn btn-danger">More Details</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 grey">
                <div class="image-wrapper">
                    <img class="img img-responsive" src="images/1.jpg">
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">Rs 45,000,000</div>
                    <div class="panel-body">
                        <p>Lorem ipsum is the world Lorem ipsum is the world Lorem ipsum is the world Lorem ipsum is the world </p>
                        <a class="form-control input-md btn btn-danger">More Details</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 grey">
                <div class="image-wrapper">
                    <img class="img img-responsive" src="images/1.jpg">
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">Rs 45,000,000</div>
                    <div class="panel-body">
                        <p>Lorem ipsum is the world Lorem ipsum is the world Lorem ipsum is the world Lorem ipsum is the world </p>
                        <a class="form-control input-md btn btn-danger">More Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-3 grey">
                <div class="image-wrapper">
                    <img class="img img-responsive" src="images/1.jpg">
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">Rs 45,000,000</div>
                    <div class="panel-body">
                        <p>Lorem ipsum is the world Lorem ipsum is the world Lorem ipsum is the world Lorem ipsum is the world </p>
                        <a class="form-control input-md btn btn-danger">More Details</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 grey">
                <div class="image-wrapper">
                    <img class="img img-responsive" src="images/1.jpg">
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">Rs 45,000,000</div>
                    <div class="panel-body">
                        <p>Lorem ipsum is the world Lorem ipsum is the world Lorem ipsum is the world Lorem ipsum is the world </p>
                        <a class="form-control input-md btn btn-danger">More Details</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 grey">
                <div class="image-wrapper">
                    <img class="img img-responsive" src="images/1.jpg">
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">Rs 45,000,000</div>
                    <div class="panel-body">
                        <p>Lorem ipsum is the world Lorem ipsum is the world Lorem ipsum is the world Lorem ipsum is the world </p>
                        <a class="form-control input-md btn btn-danger">More Details</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 grey">
                <div class="image-wrapper">
                    <img class="img img-responsive" src="images/slide1.jpg">
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">Rs 45,000,000</div>
                    <div class="panel-body">
                        <p>Lorem ipsum is the world Lorem ipsum is the world Lorem ipsum is the world Lorem ipsum is the world </p>
                        <a class="form-control input-md btn btn-danger">More Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
    


<?php  
    
    include('includes/footer.php');
?>


