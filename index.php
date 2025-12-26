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

  $sql = "INSERT INTO tbl_user(name, email, skill) VALUES(?,?,?)";
  $stmt = $db->prepare($sql);
  $stmt->bind_param("sss", $name, $email, $skill);
  $name = "Osman Hadi";
  $email = "osmanhadi@gmail.com";
  $skill = "JUSTICE";
  $stmt->execute();
  $stmt->close();
  $db->close();
?>




<?php include('inc/footer.php'); ?>
