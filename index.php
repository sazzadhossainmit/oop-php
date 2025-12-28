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

  $sql = "SELECT * FROM tbl_user";
  $results = $pdo->query($sql);
  foreach($results as $result){
    echo $result['skill']."<br>";
  }
?>




<?php include('inc/footer.php'); ?>
