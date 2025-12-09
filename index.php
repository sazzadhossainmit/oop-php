<?php 
  include('inc/header.php');
?>


<?php
  class Test{
    private $data = [];
    public function __set($name, $value)
    {
      echo "Setting $name = $value";
      $this->data[$name] = $value;
    }
  }
  $obj = new Test();
  $obj->age = 15;
?>





<?php include('inc/footer.php'); ?>
