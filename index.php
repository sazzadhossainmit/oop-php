<?php
  include('inc/header.php');
?>

<?php
  spl_autoload_register(function($class_name){
    include "classes/".$class_name.".php";
  });

  $post = new Post();
  $comment = new Comment();

  $post->filter();
  $comment->filter();

  if(BBcodeEnabled == false && EmoticonEnabled == false){
    $postcontent = $post->getContent();
    $commentcontent = $comment->getContent();
  }elseif(BBcodeEnabled == true && EmoticonEnabled == false){
    $bb = new BBcodeParser($post);
    $postcontent = $bb->getContent();

    $bb = new BBcodeParser($comment);
    $commentcontent = $bb->getContent();
  }elseif(BBcodeEnabled == false && EmoticonEnabled == true){
    $em = new Emoticon($post);
    $postcontent = $em->getContent();

    $em = new Emoticon($comment);
    $commentcontent = $em->getContent();
  }
?>




<?php include('inc/footer.php'); ?>
