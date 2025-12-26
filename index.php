<?php
  include('inc/header.php');
?>

<?php
  $db = new mysqli("localhost", "root", "", "userdata");
  if(mysqli_connect_errno()){
    echo "Connection failed...";
    exit();
  }else{
    echo "Connection successful...";
  }
?>




<?php include('inc/footer.php'); ?>
