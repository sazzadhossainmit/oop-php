<?php
include('inc/header.php');
?>


<?php
/*
  spl_autoload_register(function($class_name){
    include "classes/".$class_name.".php";
  });

  */

  // for($i=0, $i<10, $i++){};

  $arr = array("PHP","HTML","CSS","JavaScript");

  $coding = new ArrayObject($arr);
  $coding->append("JAVA");
  $iterator = $coding->getIterator();
  while($iterator->valid()){
    echo $iterator->current()."<br>";
    $iterator->next();
  }

?>




<?php include('inc/footer.php'); ?>
