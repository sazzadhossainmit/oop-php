<?php
  abstract class Database{
    abstract public function connect();
    abstract public function query();
    abstract public function insertId();

    public function setHost($host){
      // set host here...
    }
    public function setDB($db){
      // set db here...
    }
    public function setUser($user){
      // set user here...
    }
    public function setPass($pass){
      // set password here...
    }
  }
?>