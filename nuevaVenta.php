<?php
  include "db.php";
  global $con;

  $first = $_COOKIE['Nito'];
  $second = $_COOKIE['Chokis'];
  $third = $_COOKIE['ChokoChokis'];
  $fourth = $_COOKIE['HeladoHersheys'];

  $query = "SELECT * FROM productos WHERE nombre='Nito'";
  $res = mysqli_query($con, $query);
  while($row = mysqli_fetch_assoc($res)){
    $newValue = $row['existencias'] - $first;
    $sqlUpdate = "UPDATE productos SET existencias=$newValue WHERE nombre='Nito'";
    $query = mysqli_query($con, $sqlUpdate);
  }

  $query = "SELECT * FROM productos WHERE nombre='Chokis'";
  $res = mysqli_query($con, $query);
  while($row = mysqli_fetch_assoc($res)){
    $newValue = $row['existencias'] - $second;
    $sqlUpdate = "UPDATE productos SET existencias=$newValue WHERE nombre = 'Chokis'";
    $query = mysqli_query($con, $sqlUpdate);
  }

  $query = "SELECT * FROM productos WHERE nombre='Choko Chokis'";
  $res = mysqli_query($con, $query);
  while($row = mysqli_fetch_assoc($res)){
    $newValue = $row['existencias'] - $third;
    $sqlUpdate = "UPDATE productos SET existencias=$newValue WHERE nombre = 'Choko Chokis'";
    $query = mysqli_query($con, $sqlUpdate);
  }

  $query = "SELECT * FROM productos WHERE nombre='helado hersheys'";
  $res = mysqli_query($con, $query);
  while($row = mysqli_fetch_assoc($res)){
    $newValue = $row['existencias'] - $fourth;
    $sqlUpdate = "UPDATE productos SET existencias=$newValue WHERE nombre = 'helado hersheys'";
    $query = mysqli_query($con, $sqlUpdate);
  }

  mysqli_close($con);

  header("Location: http://localhost/Mi-Tiendita/cajero.html");
 ?>
