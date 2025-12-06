<?php 
  include('inc/header.php');
?>


<?php

  class UserData{
    public $user;
    public $userId;
    protected $age = 30;

    public function __construct($usser, $usserId){
      $this->user = $usser;
      $this->userId = $usserId;

    }

    public function display(){
      echo "Username is {$this->user} and user ID is {$this->userId}<br>";
      echo $this->age ." Inside Class<br>";
    }

  }

  class Admin extends UserData{
    public $level;

    public function display(){
      echo "Username is {$this->user} and user ID is {$this->userId} and user level is {$this->level}.<br>";
      echo $this->age. "Inside the Sub-class";
    }

  }

  

$ur = "Sazzad";
$id = 20;
  $usr = new UserData($ur, $id);
  echo $usr->age;
  $usr->display();

$aname = "Admin";
$aid = 9;
  $ad = new Admin($aname, $aid);
  $ad->level = "Administrator";
  $ad->display();

?>





<?php include('inc/footer.php'); ?>
