<?php
include "db.php";
global $con;
$message = "Valid";
for ($i=0; $i < $_COOKIE["totalRows"]; $i++) {
  $status = '0';
  list($id, $name, $stock, $price, $cost) = explode("_", $_COOKIE[$i."_rows"]);
  if ($id === "" || $name === "" || $stock === "" || $price === "" || $cost === "") {
    $message = "Hay un campo vacío";
    $status = "1";
  }
  else {
    $query = "SELECT * FROM productos WHERE id = $id";
    $res = mysqli_query($con, $query);
    if ($row = mysqli_fetch_assoc($res)) {
      $sqlUpdateData = "UPDATE productos SET existencias=$stock WHERE id=$id";
      $query = mysqli_query($con, $sqlUpdateData);
    }
    else {
      $sql = "INSERT INTO productos (id, nombre, existencias, precio, costo) values($id, '".$name."', $stock, $price, $cost)";
      $query = mysqli_query($con, $sql);
    }
    if (!$query) {
      $status = "1";
      $message = $query;
    }
  }
}
header("Location: http://localhost/Mi-Tiendita/nuevosProductos.php?status=".$status."&error=".$message);
mysqli_close($con);
 ?>
