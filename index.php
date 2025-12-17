<?php
  include('inc/header.php');
?>

<?php

  // spl_autoload_register(function($class_name){
  //   include "classes/".$class_name.".php";
  // });

  include "classes/Php.php";
  include "classes/Ruby.php";
  include "classes/Java.php";

  use sazzad\Ruby as ru; //using alias

  new sazzad\live\Php();
  new ru();
  new sazzad\Java();

  echo HTML;
  echo sazzad\CSS;
  sazzad\coding();
?>




<?php include('inc/footer.php'); ?>
