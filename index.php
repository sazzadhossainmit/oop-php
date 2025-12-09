<?php 
  include('inc/header.php');
?>


<?php

  abstract class Student{
    public $name;
    public $age;

    public function details(){
      echo "{$this->name} is {$this->age} years old.";
    }

    abstract public function school();
  }

  class Boy extends Student{
    public function description(){
      return parent::details(). " He is a varsity student.";
    }

    public function school(){
      return " He likes to read story book.";
    }
  }

  $s = new Boy();
  $s->name = "Jamal";
  $s->age = 30;
  echo $s->description();
  echo $s->school();
?> 





<?php include('inc/footer.php'); ?>
