<?php
  class Database{
    public static $instance;
    public function __construct(){
      if(!self::$instance){
        self::$instance = $this;
        echo "Created new one.<br>";
        return self::$instance;
      }else{
        echo "Old instance. <br>";
        return self::$instance;
      }
    }
  }
?>