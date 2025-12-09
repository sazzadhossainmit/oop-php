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
  if(class_exists("Test")){
    $obj = new Test();
    if(method_exists($obj, "description")){
      $obj->description();
    } else {
      echo "Method does not exist";
    }
  } else {
    echo "class does not exist";
  }
?>





<?php include('inc/footer.php'); ?>
