<?php 
  include('inc/header.php');
?>


<?php
  class Person {
    public $name = "Sazzad";
    public $age = "20";
    public $skill = "Blogging";

    private $email = "sazzadhossain@gmail.com";
    protected $password = "1234";

    public function iteratorInner(){
      echo "Inside class <br>";
      foreach($this as $key => $value){
        echo "<pre>";
        echo "$key => $value";
        echo "</pre>";
      }
    }
  }
  
  $obj = new Person();
  foreach($obj as $key => $value){
    echo "<pre>";
    echo "$key => $value";
    echo "</pre>";
  }

  $obj->iteratorInner();
?>




<?php include('inc/footer.php'); ?>
