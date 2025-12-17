<?php
  class Programming{
    public $html;
    public $css;
    private $php;
    protected $java;

    public function __construct(){
      $this->html = "I love HTML.";
      $this->css = "I love CSS.";
      $this->php = "I am PHP programmer.";
      $this->java = "I am JAVA programmer.";
    }
  }
?>