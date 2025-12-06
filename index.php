<?php 
  include('inc/header.php');
?>


<form action="" method="POST">
  <table>
    <tr>
      <td>Enter the first number</td>
      <td><input type="number" name="num1"></td>
    </tr>
    <tr>
      <td>Enter the second number</td>
      <td><input type="number" name="num2" ></td>
    </tr>
    <tr>
      <td></td>
      <td><input type="submit" name="calculation" value="Calculate"></td>
    </tr>
  </table>
</form>

<?php
	//form validation
  if(isset($_POST['calculation'])){
    $numOne = $_POST['num1'];
    $numTwo = $_POST['num2'];

    if(empty($numOne) or empty($numTwo)){
      echo "<span style='color:red;' > Please fill out these fields </span><br>";
    } else{

      echo "<span style='font-style:italic;'>Calculation of the number ".$numOne. " & ".$numTwo. "</span><br>";
			
			// object
      $calc = new Compute;
      $calc->add($numOne, $numTwo);
      $calc->sub($numOne, $numTwo);
      $calc->multi($numOne, $numTwo);
      $calc->div($numOne, $numTwo);
    }

  }
?>

<?php
	// class
  class Compute{
    
    public function add($a, $b){
      $a = (float)$a;
      $b = (float)$b;

      echo "Summation = ". ($a+$b)."<br>";
    }

    public function sub($a, $b){
      $a = (float)$a;
      $b = (float)$b;

      echo "Substraction = ". ($a-$b)."<br>";
    }

    public function multi($a, $b){
      $a = (float)$a;
      $b = (float)$b;

      echo "Multiplication = ". ($a*$b)."<br>";
    }

    public function div($a, $b){
      $a = (float)$a;
      $b = (float)$b;

      echo "Division = ". ($a/$b);
    }
  }

?>




<?php include('inc/footer.php'); ?>
