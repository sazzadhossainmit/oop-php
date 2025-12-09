<?php 
  include('inc/header.php');
?>


<?php
  class Student {
    public $pm;
    public function description (){
      echo "I am a student.<br>";
    }

    public function __get($name){
      echo "$name does not exist.";
    }
  }

  $st = new Student();
  $st->description();
  $st->Hasan;
?>





<?php include('inc/footer.php'); ?>
