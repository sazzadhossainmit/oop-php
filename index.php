<?php 
  include('inc/header.php');
?>


<?php

  class Animal{
    public function sound(){
      echo "Animal makes noise.";
    }
  }

  class Dog extends Animal{
    public function sound(){
      echo "Dog barks.";
    }
  }

  class Cat extends Animal{
    public function sound(){
      echo "Cat meows.";
    }
  }

  $doggy = new Dog();
  $doggy->sound();
  echo "<br>";
  $catty = new Cat();
  $catty->sound();

?> 





<?php include('inc/footer.php'); ?>
