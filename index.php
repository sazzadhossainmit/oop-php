<?php 
  include('inc/header.php');
?>


<?php
  class Test{
    public function description(){
      echo "Class and method exist.";
    }
  }
?>

<?php
  spl_autoload_register(function($className){
    include "classes/$className.php";
  });
  $java = new Java();
  $php = new Php();
  $ruby = new Ruby();
?>




<?php include('inc/footer.php'); ?>
