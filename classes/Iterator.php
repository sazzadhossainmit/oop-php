<?php
  interface Iterator{
    function current();
    function rewind();
    function key();
    function valid();
    function next();
  }
?>