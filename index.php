<?php
  include('inc/header.php');
?>


<?php

  spl_autoload_register(function($class_name){
    include "classes/".$class_name.".php";
  });

  $pro = new Programming();
  $ser = serialize($pro);
  /*
  // object stored
  file_put_contents("programming.txt", $ser);
  echo $ser;
  */

  // object restored
  $getcont = file_get_contents("programming.txt");
  $unser = unserialize($getcont);

  echo "<pre>";
  print_r($unser);
  echo "</pre>";
?>




<?php include('inc/footer.php'); ?>
