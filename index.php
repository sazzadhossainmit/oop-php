<?php 
  include('inc/header.php');
?>


<?php
// Example 1
  class Person {
    public $name;
    public $age;
    public $id;

    public function __construct($pname, $page){
      $this->name = $pname;
      $this->age = $page;
    }

    public function setId($id){
      $this->id = $id;
    }

    public function __destruct(){
      if(!empty($this->id)){
        echo "created destructor";
      }
    }
    
  }

  $personOne = new Person("Sazzad Hossain", "23");
  $personOne->setId(11);
  unset($personOne);

?> 




<?php include('inc/footer.php'); ?>
