<?php
  include "db.php";
  global $con;
<<<<<<< HEAD
  $i = 0;
  $cookies = array();
  $quantity = 0;
  $product = "";
  while (isset($_COOKIE[$i])) {
    $cookies[$i] = $_COOKIE[$i];
    list($quantity, $product) = explode("_", $cookies[$i]);
    $i++;
    insert($quantity, $product, $con);
  }

  function insert($quantity, $product, $con){
    $query = "SELECT * FROM productos WHERE nombre = '$product'";
    echo $query;
    $res = mysqli_query($con, $query);
    $status = '0';
    $productsMissing = "";
    while($row = mysqli_fetch_assoc($res)){
      $newValue = $row['existencias'] - $quantity;
      if ($newValue < 0) {
        echo "here";
        $status = '1';
        $productsMissing .= $product;
      }
      else {
        $sqlUpdate = "UPDATE productos SET existencias=$newValue WHERE nombre = '$product'";
        $query = mysqli_query($con, $sqlUpdate);
      }
    }
    //header("Location: http://localhost/Mi-Tiendita/cajero.php?status=".$status."&products=".$productsMissing);
    mysqli_close($con);
  }
=======

  // $query = "SELECT * FROM productos WHERE nombre='Chokis'";
  // $res = mysqli_query($con, $query);
  //
  // while($row = mysqli_fetch_assoc($res)){
  //   $newValue = $row['existencias'] - 1;
  //   $sqlUpdate = "UPDATE productos SET existencias=$newValue WHERE nombre = 'Chokis'";
  //   $query = mysqli_query($con, $sqlUpdate);
  // }
  //
  // $query = "SELECT * FROM productos WHERE nombre = 'Choko Chokis'";
  // $res = mysqli_query($con, $query);
  //
  // while($row = mysqli_fetch_assoc($res) ){
  //   $newValue = $row['existencias'] - 1;
  //   $sqlUpdate = "UPDATE productos SET existencias=$newValue WHERE nombre = 'Choko Chokis'";
  //   $query = mysqli_query($con, $sqlUpdate);
  // }
  //
  // $query = "SELECT * FROM productos WHERE nombre = 'helado hersheys'";
  // $res = mysqli_query($con, $query);
  //
  // while($row = mysqli_fetch_assoc($res) ){
  //   $newValue = $row['existencias'] - 1;
  //   $sqlUpdate = "UPDATE productos SET existencias=$newValue WHERE nombre = 'helado hersheys'";
  //   $query = mysqli_query($con, $sqlUpdate);
  // }

  $first = $_REQUEST['first'];
  $second = $_REQUEST['second'];
  $third = $_REQUEST['third'];

  mysqli_close($con);

  //header("Location: http://localhost/Mi-Tiendita/cajero.php");
<<<<<<< HEAD
>>>>>>> parent of db00d12... Ya jalan las cookies de js
=======
>>>>>>> parent of db00d12... Ya jalan las cookies de js
 ?>
