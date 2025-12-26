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

  $sql = "SELECT name, skill FROM tbl_user ORDER BY ID";
  $stmt = $db->prepare($sql);
  $stmt->execute();
  $stmt->bind_result($name, $skill);
  while($stmt->fetch()){
    echo "$skill</br>";
  }
?>




<?php include('inc/footer.php'); ?>
