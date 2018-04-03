<?php 
    error_reporting(0);
 ?>

<hr>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 footerleft ">
                    <div class="logofooter"> Logo</div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>
                    <p><i class="fa fa-map-pin"></i> Putalisadak, kathmandu, Nepal</p>
                    <p><i class="fa fa-phone"></i> Phone (Nepal) : +977 01-878398</p>
                    <p><i class="fa fa-envelope"></i> E-mail : info@gharbar.com</p>

                </div>
                <div class="col-md-2 col-sm-6 paddingtop-bottom">
                    <h6 class="heading7">GENERAL LINKS</h6>
                    <ul class="footer-ul">
                        <li><a href="about.php"> About</a></li>
                        
                        <li><a href="items.php?q=land"> Lands</a></li>
                        <li><a href="items.php?q=house"> Houses</a></li>
                        <li><a href="items.php?q=apartment"> Apartments</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 paddingtop-bottom">
                    <h6 class="heading7">LATEST </h6>
                    <div class="post">
                        <!-- <p>facebook crack the movie advertisment code:what it means for you <span>August 3,2015</span></p>
                        <p>facebook crack the movie advertisment code:what it means for you <span>August 3,2015</span></p>
                        <p>facebook crack the movie advertisment code:what it means for you <span>August 3,2015</span></p> -->
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 paddingtop-bottom">

                </div>
            </div>
        </div>
    </footer>
    <!--footer start from here-->

    <div class="copyright">
        <div class="container">
            <div class="col-md-6">
                <p>© 2016 - All Rights with Webenlance</p>
            </div>
            <div class="col-md-6">
                <ul class="bottom_ul">
                    <li><a href="#">gharbar.com</a></li>
                    <li><a href="#">About us</a></li>

                    
                </ul>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
<?php

if(isset($conn)){
    mysqli_close();
}

?>