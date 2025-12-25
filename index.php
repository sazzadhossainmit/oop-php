<?php
  include('inc/header.php');
?>

<?php
  spl_autoload_register(function($class_name){
    include "classes/".$class_name.".php";
  });

  $obj = new Observable();
  $sk = new Skype();
  $whs = new Whatsapp();
  
  $s = new stdClass();
  $obj->register($sk);
  $obj->register($s);
  $obj->register($whs);
  $obj->stateChange();
?>




<?php include('inc/footer.php'); ?>
