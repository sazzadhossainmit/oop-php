<?php
  include('inc/header.php');
?>

<?php
  spl_autoload_register(function($class_name){
    include "classes/".$class_name.".php";
  });

  $blogpost = getAllPost();
  $posts = new Posts();
  foreach($posts as $post){
    echo $post->getTitle();
    echo $post->getContent();
    echo $post->getAuthor();
    echo $post->getDate();
    $comments = new comments($post->getComments());
    foreach($comments as $comment){
      echo $comment->getCommentAuthor();
      echo $comment->getCommentContent();
    }

  }

?>




<?php include('inc/footer.php'); ?>
