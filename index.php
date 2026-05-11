<?php
  include('inc/header.php');
?>

<?php
  spl_autoload_register(function($class){
    include "classes/".$class.".php";
  });
?>




<div class="content">
<section class="subject">
<p>CRUD with PDO - Create Data <span style="float:right"><a href="index.php">Create New</a></span><p>
</section>

<section class="mainleft">
<form action="" method="post">
<table>
    <tr>
        <td>Name: </td>
        <td><input type="text" name="name" required="1"/></td>    
    </tr>

    <tr>
      <td>Department: </td>
        <td><input type="text" name="dep" required="1"/></td>
    </tr>

    <tr>
      <td>Age: </td>
        <td><input type="text" name="age" required="1"/></td>
    </tr>
    <tr>
      <td></td>
        <td>
        <input type="submit" name="create" value="Add"/>
        <input type="reset" value="Clear"/>
        </td>
    </tr>
  </table>
</form>

<?php 
  $student = new Student();
  if (isset($_POST['create'])){
    $name = $_POST['name'];
    $dep = $_POST['dep'];
    $age = $_POST['age'];

    $student->setName($name);
    $student->setDep($dep);
    $student->setAge($age);

    if($student->insert()){
      echo "<span style='font-weight: bold; color: green; margin-top: 20px;'> Data added succesfully...</span>";
    }
  }
?>

</section>



<section class="mainright">
  <table class="tblone">
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>Department</th>
        <th>Age</th>
        <th>Action</th>
    </tr>

    <?php 
      $i = 0;
      foreach ( $student->readAll() as $key => $value ){
        $i++;
    ?>

    <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $value['name']; ?></td>
        <td><?php echo $value['dep']; ?></td>
        <td><?php echo $value['age']; ?></td>
        <td>
        <a href="">Edit</a> ||
        <a href="">Delete</a>
        </td>
    </tr>
    <?php } ?>
  </table>
</section>



<?php include('inc/footer.php'); ?>
