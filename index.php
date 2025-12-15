<?php 
  include('inc/header.php');
?>


<?php
  spl_autoload_register(function($class_name){
    include "classes/".$class_name.".php";
  });
?>

<?php

  Class ChildPhp extends Php{
    public static function getClass(){
      return __CLASS__;
    }
  }


  $php = new Php();
  $php->framework();

  $childphp = new ChildPhp();
  $childphp->framework();
?>




<?php include('inc/footer.php'); ?>
