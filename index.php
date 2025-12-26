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

  // $sql = "SELECT * FROM tbl_user";
  $sql = "UPDATE tbl_user SET skill='TYPING' WHERE id='13'";

  $result = $db->query($sql);
  while($data = $result->fetch_object()){
    echo "<pre>";
    echo $data->skill;
    echo "</pre>";
  }
?>




<?php include('inc/footer.php'); ?>
