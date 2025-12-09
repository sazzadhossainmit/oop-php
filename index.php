<?php 
  include('inc/header.php');
?>


<?php

	abstract class Person{
    public function details(){
      echo "Parent/Base class constant and class name: ".__CLASS__."<br>";
      echo "Parent/Base class function and class name: ".get_class($this)."<br>";
    }
  }
  
  class ChildPerson extends Person{
    public function childDetails(){
      echo "Child class constant and class name: ".__CLASS__."<br>";
      echo "Child class function and class name: ".get_class($this)."<br>";
    }

    public function ourMethod(){
      parent::details();
    }
  }
  
  $obj = new ChildPerson();
  $obj->details();
  echo "<hr>";
  $obj->childDetails();
  echo "<hr>";
  $obj->ourMethod();
?>




<?php include('inc/footer.php'); ?>
