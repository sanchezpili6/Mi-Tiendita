<?php
  include "db.php";
  global $con;
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
 ?>
