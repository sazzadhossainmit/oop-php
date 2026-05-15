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
<p>CRUD with PDO + Abstract Factory Pattern <span style="float:right"><a href="index.php">New Student</a> || <a href="teacher.php">New Teacher</a></span><p>
</section>

<section class="mainleft">

<?php 
  $student = new Teacher();
  if (isset($_POST['create'])){
    $name = $_POST['name'];
    $dep = $_POST['dep'];
    $age = $_POST['age'];

    $student->setName($name);
    $student->setDep($dep);
    $student->setAge($age);

    if($student->insert()){
      echo "<span style='color:green; font-weight:bold;'>Data added successfully...</span>";
    }
  }

  if (isset($_POST['update'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $dep = $_POST['dep'];
    $age = $_POST['age'];

    $student->setName($name);
    $student->setDep($dep);
    $student->setAge($age);

    if($student->update($id)){
      echo "<span style='color:green; font-weight:bold;'>Data updated successfully...</span>";
    }
  }

?>

<?php 
  if(isset($_GET['action']) && $_GET['action']=='delete'){
    $id = (int)$_GET['id'];
    if($student->delete($id)){
      echo "<span style='color:red; font-weight:bold;'>Data deleted successfully...</span>";
    }
  }
?>

<?php 
  if(isset($_GET['action']) && $_GET['action']=='update'){
    $id = (int)$_GET['id'];
    $result = $student->readById($id);
?>

<form action="" method="post">
<table>
  <input type="hidden" name="id" value="<?php echo $result['id']; ?>" />
    <tr>
        <td>Name: </td>
        <td><input type="text" name="name" value="<?php echo $result['name']; ?>" required="1"/></td>    
    </tr>

    <tr>
      <td>Department: </td>
        <td><input type="text" name="dep" value="<?php echo $result['dep']; ?>" required="1"/></td>
    </tr>

    <tr>
      <td>Age: </td>
        <td><input type="text" name="age" value="<?php echo $result['age']; ?>" required="1"/></td>
    </tr>
    <tr>
      <td></td>
        <td>
        <input type="submit" name="update" value="Update"/>
        <input type="reset" value="Clear"/>
        </td>
    </tr>
  </table>
</form>

<?php } else { ?>

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

<?php } ?>

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
        <?php echo "<a href='teacher.php?action=update&id=".$value['id']."'>Edit</a>"; ?> ||
        <?php echo "<a href='teacher.php?action=delete&id=".$value['id']."' onClick='return confirm (\"Are you sure to delete data?\")' >Delete</a>"; ?>
        </td>
    </tr>
    <?php } ?>
  </table>
</section>



<?php include('inc/footer.php'); ?>
