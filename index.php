<?php 
  include('inc/header.php');
?>


<?php
	final class A {
}

class B extends A { }   // ERROR: Cannot extend final class
?>

<?php
	class ParentClass {
    final public function show() {
        echo "Cannot override this!";
    }
}

class ChildClass extends ParentClass {
    public function show() {
        echo "Trying to override";  //  ERROR
    }
}

?>





<?php include('inc/footer.php'); ?>
