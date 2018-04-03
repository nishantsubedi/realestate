<?php


// set the expiration date to one hour ago

// setcookie("user", "", time() - 3600);
// setcookie("pin", "", time() - 3600);

//  header('Location: ../login.php');
?>
<script>

document.cookie = "user=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
document.cookie = "pin=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";



window.location.href = "/realestate/login.php";
</script>