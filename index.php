<?php
  include('inc/header.php');
?>

<?php
  spl_autoload_register(function($class_name){
    include "classes/".$class_name.".php";
  });

  $db = new Database();
  $db->setDriver("sqlite");
  $db->connect("host","user","dbname","pass");
?>




<?php include('inc/footer.php'); ?>
