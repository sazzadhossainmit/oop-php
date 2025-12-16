<?php 
  include('inc/header.php');
?>


<?php
  spl_autoload_register(function($class_name){
    include "classes/".$class_name.".php";
  });
?>


<?php

  $oldObj = new Language();
  $oldObj->setCat("OOP");
  $oldObj->setFramework("Laravel");
  
  $newOjb = clone $oldObj;
  $newOjb->setCat("Structural");
  $newOjb->setFramework("CodeIgniter");

  echo $oldObj->getCat()."<br>";
  echo $oldObj->getFramework()."<br>";

  echo $newOjb->getCat()."<br>";
  echo $newOjb->getFramework()."<br>";
?>




<?php include('inc/footer.php'); ?>
