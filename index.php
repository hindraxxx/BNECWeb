<?php 
if(!isset($_SESSION['name']) || !isset($_SESSION['nim'])){
    header("location:login.php");
  }
?>