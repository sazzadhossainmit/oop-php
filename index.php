<?php
  include('inc/header.php');
?>

<?php
  spl_autoload_register(function($class_name){
    include "classes/".$class_name.".php";
  });

  new Database();
  new Database();
  new Database();
  new Database();
  new Database();

?>




<?php include('inc/footer.php'); ?>
