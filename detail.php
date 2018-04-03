<?php  
    
    include('includes/header.php');
?>

    <!-- house item starts-->
    <div class="container">
    <div class="row">
        <div class="col-lg" ><div class="well item-header-bg"> Detail Information</div>
    </div>

        <div class="row">
            <div class="col-sm-6 col-md-6 grey">
                    <img class="img-responsive" src="images/1.jpg" >
                    
                    
            </div>
            <div class="col-sm-6 col-md-6 grey">
                    <div class="row">
                        <div class="well"><b>Location :</b> </div>
                        <div class="well"><b>Price :</b> </div>
                        <div class="well"><b>Contact No :</b> </div>
                        <div class="well"><b>Description :</b> </div>

                    
                    <!-- modal class/ buy request form starts-->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Buy Request</button>


                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel " style="text-align: center;">Buy Request</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <form>
                                      <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Full Name:</label>
                                        <input type="text" class="form-control" id="recipient-name">
                                      </div>

                                      <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Contact No:</label>
                                        <input type="text" class="form-control" id="recipient-name">
                                      </div>


                                      <div class="form-group">
                                        <label for="message-text" class="col-form-label">Message (Optional):</label>
                                        <textarea class="form-control" id="message-text"></textarea>
                                      </div>
                                    </form>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Send message</button>
                                  </div>
                                </div>
                              </div>
                            </div>


                    <!-- modal class/ buy request form ends-->



                    </div>

            </div>
            
    </div>  
    
    <hr style="height:2px; background-color: #ccc;">
    
    <!-- House item ends -->

    </div>
</div>
    
    
<?php  
    
    include('includes/footer.php');
?>