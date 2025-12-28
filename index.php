<?php
  include('inc/header.php');
?>

<?php
  $db = new mysqli("localhost", "root", "", "test");
  if(mysqli_connect_errno()){
    echo "Connection failed...";
    exit();
  }

$sql = "SELECT image FROM images WHERE id=?";
$stmt = $db->prepare($sql);
$stmt->bind_param("i", $id);
$id = 1;
$stmt->execute();
$stmt->bind_result($image);
$stmt->fetch();
header("content-type: png");
echo '<img style="max-width:300px;" src="data:image/png;base64, '.base64_encode($image).'"/>';

  /*
  $sql = "INSERT INTO images(image) VALUES(?)";
  $stmt = $db->prepare($sql);
  $stmt->bind_param("b", $image);
  $image = file_get_contents("sazzad.png");
  $stmt->send_long_data(0, $image);
  $stmt->execute();
  */
?>




<?php include('inc/footer.php'); ?>
