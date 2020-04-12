<?php
  $host = 'localhost';
  $user = 'root';
  $pass = '';
  $db = 'mitiendita';

  $con = mysqli_connect($host, $user, $pass, $db);
  if(!$con){
    die('cant connect to database');
    exit();
  }
?>
