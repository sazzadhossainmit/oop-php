<?php

use Dom\CharacterData;

include('inc/header.php');
?>


<?php

  spl_autoload_register(function($class_name){
    include "classes/".$class_name.".php";
  });


  $arr = array("PHP","HTML","CSS","JavaScript","JAVA");
  $ai = new ArrayIterator($arr);
  // $limit = new LimitIterator($ai,0,2);
  $ci = new CachingIterator($ai);
  foreach($ci as $value){
    echo $value;
    if($ci->hasNext()){
      echo ", ";
    }
  }

?>




<?php include('inc/footer.php'); ?>
