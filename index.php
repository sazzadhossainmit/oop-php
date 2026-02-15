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

  $id = 1;

  $sql = "SELECT * FROM tbl_user WHERE id = :id";
  $stmt = $pdo->prepare($sql);
  $stmt->bindValue(':id', $id);
  $stmt->execute();
  while($data = $stmt->fetch()) {
    echo "Name : ".$data['name']."<br>";
    echo "Skill : ".$data['skill']."<br>";
  }

?>




<?php include('inc/footer.php'); ?>
