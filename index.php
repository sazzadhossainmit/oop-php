<?php 
  include('inc/header.php');
?>


<?php

  class UserData{

    const NAME = "Abdullah Al Baki";
    public static $age = 30;

    public static function display(){
      echo "His name is ".UserData::NAME." & he is ". self::$age. " years old";
    }

  }

  echo "His age is ". UserData::$age."<br>";
  echo UserData::display();

?>




<?php include('inc/footer.php'); ?>
