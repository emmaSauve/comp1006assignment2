<?php
  include './include/header.php'; //include the header

  //end the session
  session_start();

  session_unset();

  session_destroy();

  //send user back to the homepage
  Header('location:index.php');
  
  include './include/footer.php'; //include the footer

?>