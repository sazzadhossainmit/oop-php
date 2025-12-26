<?php
  include('inc/header.php');
?>

<?php
  spl_autoload_register(function($class_name){
    include "classes/".$class_name.".php";
  });

  $fa = new Facade();
  $fa->findApartments("Jatrabari, Dhaka", "mapdiv");
?>




<?php include('inc/footer.php'); ?>
