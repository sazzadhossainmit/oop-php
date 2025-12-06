<?php 
  include('inc/header.php');
?>


<?php

  class UserData{

    const NAME = "Abdullah Al Baki";
    public function display(){
      echo "His name is ".UserData::NAME;
    }

  }

  $usr = new UserData();
  $usr->display();

?> 




<?php include('inc/footer.php'); ?>
