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

  $name = "Morsalin";
  $email = "morsalin@gmail.com";
  $skill = "FOOTBALL";
  $age = 27;

  $sql = " INSERT INTO tbl_user(name, email, skill, age) VALUES(:name, :email, :skill, :age) ";
  $stmt = $pdo->prepare($sql);
  $stmt->bindValue(':name', $name);
  $stmt->bindValue(':email', $email);
  $stmt->bindValue(':skill', $skill);
  $stmt->bindValue(':age', 27);
  $stmt->execute();
?>




<?php include('inc/footer.php'); ?>
