<?php 
  include('inc/header.php');
?>


<?php

  class Person {
    public $name;
    public $age;

    public function personName(){
      echo "Person's name is: ". $this->name. "<br>";
    }

    public function personAge($value){
      echo "Person's age is: ". $this->age=$value;
    }
  }

  $personOne = new Person;
  $personOne->name = "Sazzad Hossain";
  $personOne->personName();
  $personOne->personAge("23");

?> 




<?php include('inc/footer.php'); ?>
