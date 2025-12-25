<?php
  class Skype implements Observer{
    public function message(){
      echo "Message sent from skype<br>";
    }
  }
?>