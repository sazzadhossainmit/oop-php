<?php 
  include('inc/header.php');
?>


<?php
// Example 1
  class Person {
    public $name;
    public $age;

    public function __construct($pname, $page){
      $this->name = $pname;
      $this->age = $page;
    }

    public function personDetails (){
      echo "Person name is {$this->name} and person age is {$this->age}";
    }
    
  }

  $personOne = new Person("Sazzad Hossain", "23");
  $personOne->personDetails();
?> 

<?php
// Example 2
  class BankAccount{
    public $owner;
    public $balance;

    public function __construct($owner, $balance){
      $this->owner = $owner;
      $this->balance = $balance;
    }

    public function deposit($ammount){
      $this->balance += $ammount;
    }

    public function withdraw($ammount){
      $this->balance -= $ammount;
    }

    function BalanceCheck(){
      return $this->balance;
    }

  }

  $acc = new BankAccount("Sazzad Hossain", 5300);
  $acc->deposit(500);
  $acc->withdraw(300);
  echo "Current bank balance: ". $acc->BalanceCheck();
?> 




<?php include('inc/footer.php'); ?>
