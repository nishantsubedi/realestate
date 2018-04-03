
<?php  
    
    include('includes/header.php');

    if(!isset($_SESSION['user'])){
        header('Location: login.php?token=' . md5("code_zeta"));
        die();
    }
    
    if($_SESSION['user'] !=session_id()){
            header('Location: login.php?token=' . md5("code_zeta"));
            die();
        } 
?>  

    <div class="container">
        <form action="action/sellaction.php" method="post" id="sellitemform" enctype="multipart/form-data">

            <div class="row">
                <div class="col-md-6">
                        
                    <div class="form-group">
                        <input type="file" name="image" class="file" id="fileUpload"  required>
                        <div class="input-group col-xs-12">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
                          
                          <input type="text" class="form-control input-lg" disabled placeholder="Upload Image">
                          <span class="input-group-btn">
                            
                            <button class="browse btn btn-primary input-lg" type="button"><i class="glyphicon glyphicon-search"></i> Browse</button>
                          </span>
                        </div>
                    </div>
                     





                        <!-- <input type="file" class="btn btn-info" id="fileUpload" name="pic" accept="image/*"> -->
                    <hr>
                       <div id="image-holder" style="width:70%; margin:0 auto;"> </div>

                </div>
                <div class="col-md-6">
                    <div class="" style="height:60px;">
                      <div class="alert alert-danger" id="alert">
                        
                      </div>
                    </div>
                     
                        <div class="form-group">
                        <label for="location">Location</label>
                        <input type="text" class="form-control" id="location" name="location" required>
                      </div>
                      <div class="form-group">
                        <label for="price">Price</label>
                        <input type="text" class="form-control" id="price" name="price" required>
                      </div>
                      <div class="form-group">
                        <label for="type">Category</label>
                        <select class="form-control" id="category" name="category" required>
                            <option>House</option>
                            <option>Land</option>
                            <option>Apartment</option>
                        </select>
                       
                      </div>
                       <div class="form-group">
                         <label for="category">Add Type</label>
                        <select class="form-control" id="type" name="type" required>
                            <option>Normal</option>
                            <option>Premium</option>
                           
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="detail">Details</label>
                        <textarea class="form-control" id="detail" placeholder="Describe the property You want to sell" name="detail" required></textarea>
                      </div>
                     
                      <button type="submit" id="submit-btn" class="btn btn-success " name="upload">Submit</button>
                </div>
            </div>

        </form>
    </div>
<hr>

<script>
    var image_uploaded = false;
    $(document).ready(function(){
      
        $('#alert').hide();
        
        // $( "#location" ).change(function() {
        // if( $('#price').val().length == 0)
        //  {
        //      $('#alert').html('Please Enter a valid Location');
        //      // $('#submit-btn').attr("disabled","disabled");
        //     $('#alert').show();
        //     error = true;
        //  }
        // });


        $( "#price" ).change(function() {
        if(!$.isNumeric( $('#price').val()))
         {
             $('#alert').html('Please enter a numeric value for price');
             // $('#submit-btn').attr("disabled","disabled");
            $('#alert').show();
            
         }
        });

        // $( "#size" ).change(function() {
        // if( $('#price').val().length < 15)
        //  {
        //      $('#alert').html('Please describe Size more clearly');
        //      // $('#submit-btn').attr("disabled","disabled");
        //     $('#alert').show();
        //     error = true;
        //  }
        // });

        // $( "#detail" ).change(function() {
        // if( $('#price').val().length < 15)
        //  {
        //     $('#alert').html('Please describe Detail more clearly');
        //     // $('#submit-btn').attr("disabled","disabled");
        //     $('#alert').show();
        //     error = true;
        //  }
       
        // });

        $( "#submit-btn" ).click(function() {
            if( $('#location').val().length == 0){
                $('#alert').html('Please Enter the location');
                $('#alert').show();
                return;
            }
            if( $('#price').val().length == 0){
                $('#alert').html('Please Enter the price');
                $('#alert').show();
                return;
            }
           
            if( $('#size').val().length == 0){
                $('#alert').html('Please Enter the size');
                $('#alert').show();
                return;
            }
            if( $('#detail').val().length == 0){
                $('#alert').html('Please Enter the detail');
                $('#alert').show();
                return;
            }
              if(!$.isNumeric( $('#price').val())){
                 $('#alert').html('Please enter a numeric value for price');
                $('#alert').show();
                return;
              }
              if(image_uploaded == false){
                $('#alert').html('Please add a image');
                $('#alert').show();
                return;
              }
              $('#sellitemform').submit();

        });

        $("#fileUpload").on('change', function () {
            image_uploaded = true;
        if (typeof (FileReader) != "undefined") {

            var image_holder = $("#image-holder");
            image_holder.empty();

            var reader = new FileReader();
            reader.onload = function (e) {
                $("<img  />", {
                    "src": e.target.result,
                    "class": "img-responsive"
                }).appendTo(image_holder);

            }
            image_holder.show();
            reader.readAsDataURL($(this)[0].files[0]);
        } else {
            alert("This browser does not support FileReader.");
        }
    });

                $(document).on('click', '.browse', function(){
          var file = $(this).parent().parent().parent().find('.file');
          file.trigger('click');
        });
        $(document).on('change', '.file', function(){
          $(this).parent().find('.form-control').val($(this).val().replace(/C:\\fakepath\\/i, ''));
        });
           
});
</script>


   <?php  
    
    include('includes/footer.php');
?>