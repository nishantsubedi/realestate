

<!-- The Modal -->


    <div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" >&times;</button>
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body">
        <h3>You have successfully subscribed to our Newsletter </h3>
      </div>
      <div class="modal-footer">
      <hr>
      </div>
    </div>

  </div>

    </div>



<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal 

    modal.style.display = "block";

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>