<?php
  include "db.php";
  global $con;

  $query = "SELECT * FROM productos WHERE nombre='Chokis'";
  $res = mysqli_query($con, $query);

  while($row = mysqli_fetch_assoc($res)){
    $newValue = $row['existencias'] - 1;
    $sqlUpdate = "UPDATE productos SET existencias=$newValue WHERE nombre = 'Chokis'";
    $query = mysqli_query($con, $sqlUpdate);
  }

  $query = "SELECT * FROM productos WHERE nombre = 'Choko Chokis'";
  $res = mysqli_query($con, $query);

  while($row = mysqli_fetch_assoc($res) ){
    $newValue = $row['existencias'] - 1;
    $sqlUpdate = "UPDATE productos SET existencias=$newValue WHERE nombre = 'Choko Chokis'";
    $query = mysqli_query($con, $sqlUpdate);
  }

  $query = "SELECT * FROM productos WHERE nombre = 'helado hersheys'";
  $res = mysqli_query($con, $query);

  while($row = mysqli_fetch_assoc($res) ){
    $newValue = $row['existencias'] - 1;
    $sqlUpdate = "UPDATE productos SET existencias=$newValue WHERE nombre = 'helado hersheys'";
    $query = mysqli_query($con, $sqlUpdate);
  }

  mysqli_close($con);

  header("Location: http://localhost/Mi-Tiendita/cajero.html");
 ?>