<?php 
  include('inc/header.php');
?>


<?php
// array type 
	class Calculation{
    public $a;
    public function getValue(array $x){
      foreach($x as $value){
        echo $value[0];
        echo " : ";
        echo $value[1]*$value[2]. "<br>";
      }
    }
  }
  
  $num = array(
    array('Number one',10,20),
    array('Number two',5,15)
  );
  $calc = new Calculation();
  echo $calc->getValue($num);  
?>


<?php
  // object type
  class Java{
    public $fromPhp;
    function __construct(Php $value){
      $this->fromPhp = $value;
      $this->fromPhp->framework();
      $this->fromPhp->cms();
    }
  }

  class Php{
    public function framework(){
      echo "Laravel is a PHP framework <br>";
      return $this;
    }
    public function cms(){
      echo "WordPress is a CMS";
      return $this;
    }
  }
  $obj = new Php();
  new Java($obj);
?>




<?php include('inc/footer.php'); ?>
