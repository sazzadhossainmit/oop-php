<?php
  include('inc/header.php');
?>

<?php
  $dsn = "mysql:dbname=userdata;host=localhost;";
  $user = "root";
  $pass = "";

  try{
    $pdo = new PDO($dsn, $user, $pass);
  }catch(PDOException $e){
    echo "connection failed...".$e->getMessage();
  }

  // UPDATE
  // $id = 28;
  // $skill = "MARKETING";

  // $sql = "UPDATE tbl_user SET skill = :skill WHERE id = :id";
  // $stmt = $pdo->prepare($sql);
  // $stmt->bindValue(':skill', $skill);
  // $stmt->bindValue(':id', $id);
  // $stmt->execute();
  // echo $stmt->rowCount() . " Row updated...";

  // DELETE
  $id = 6;
  $sql = "DELETE FROM tbl_user WHERE id = ?";
  $stmt = $pdo->prepare($sql);
  $stmt->bindParam(1, $id);
  $stmt->execute();
  echo $stmt->rowCount() . " Row deleted...";

?>




<?php include('inc/footer.php'); ?>
