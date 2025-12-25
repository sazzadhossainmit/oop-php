<?php
  class Whatsapp implements Observer{
    public function message()
    {
      echo "Message sent from Whatsapp<br>";
    }
  }
?>