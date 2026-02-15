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

  $name = "Arif Khan";
  $email = "arifkhan@gmail.com";
  $skill = "JAVASCRIPT";
  $age = 32;

  /*
  $sql = " INSERT INTO tbl_user(name, email, skill, age) VALUES(?, ?, ?, ?) ";
  $stmt = $pdo->prepare($sql);
  $arr = array($name, $email, $skill, $age);
  $stmt->execute($arr);
  */

  $sql = " INSERT INTO tbl_user(name, email, skill, age) VALUES(:name, :email, :skill, :age) ";
  $stmt = $pdo->prepare($sql);
  $stmt->bindParam(':name', $name);
  $stmt->bindParam(':email', $email);
  $stmt->bindParam(':skill', $skill);
  $stmt->bindParam(':age', $age);
  $stmt->execute();
?>




<?php include('inc/footer.php'); ?>
