<?php 
  include('inc/header.php');
?>


<?php
  class Test{
    public function __call($name, $arguments)
    {
      echo "There is no method called<b> ". $name. " </b> and arguments as: ". implode(", ", $arguments);
    }
  }
  $obj = new Test();
  $obj->undefinedMethod(2, 4, 5);
?>





<?php include('inc/footer.php'); ?>
