<?php

  Class Php{
    public static function framework(){
      echo static::getClass()."<br>";
    }

    public static function getClass(){
      return __CLASS__;
    }
  }

?>