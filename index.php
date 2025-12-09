<?php 
  include('inc/header.php');
?>


<?php

  trait Php{
    public function phpCoder(){
      return "I love PHP <br>";
    }
  }

  trait Java{
    public function javaCoder() {
      return "I love JAVA <br>";
    }
  }

  trait phpJava{
    use Php, Java;
  }
  class coderOne{
    use phpJava;
  }

  $obj1 = new coderOne();
  echo $obj1->phpCoder();
  echo $obj1->javaCoder();
?>




<?php include('inc/footer.php'); ?>
