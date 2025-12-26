<?php
  class BBcodeParser{
    private $post;
    function __construct($object){
      $this->post = $object;
    }

    public function getContent(){
      $post->filter();
      $content = $this->parseBBcode($post->getContent());
      return $content;
    }

    private function parseBBcode($content){
      // your coding process will go here...
    }
  }
?>