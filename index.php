<?php 
  include('inc/header.php');
?>


<?php

  class UserData{
    public $user;
    public $userId;

    public function __construct($usser, $usserId){
      $this->user = $usser;
      $this->userId = $usserId;

      echo "Username is {$this->user} and user ID is {$this->userId}<br>";
    }

    public function __destruct(){
      unset($this->user);
      unset($this->userId);
    }
  }


$ur = "Sazzad";
$id = 20;

  $usr = new UserData($ur, $id);

?> 




<?php include('inc/footer.php'); ?>
