<?php
  include "db.php";
  global $con;

  $quantity = 0;
  $product = "";
  $productsMissing = "";
  $encuesta = $_COOKIE['encuesta'];
  $query = "SELECT * FROM ventas ORDER BY idVenta asc ";
  $res = mysqli_query($con, $query);
  $lastId = 0;
  while ($row = mysqli_fetch_assoc($res)) {
    $lastId = $row['idVenta'];
  }
  $lastId++;
  for ($i = 0; $i < $_COOKIE['length']; $i++) {
    list($quantity, $product) = explode("_", $_COOKIE[$i]);
    $query = "SELECT * FROM productos WHERE nombre = '$product'";
    $res = mysqli_query($con, $query);
    $status = '0';
    while($row = mysqli_fetch_assoc($res)){
      $newValue = $row['existencias'] - $quantity;
      $totalVendidos = $row['vendidos'] + $quantity;
      if ($newValue < 0) {
        $status = '1';
        $productsMissing = $product.", ".$productsMissing;
      }
      else {
        $sqlUpdate = "UPDATE productos SET existencias=$newValue WHERE nombre = '$product'";
        $query = mysqli_query($con, $sqlUpdate);
        $sqlUpdate = "UPDATE productos SET vendidos=$totalVendidos WHERE nombre = '$product'";
        $query = mysqli_query($con, $sqlUpdate);
        $pago = $quantity * $row['precio'];
        $sql = "INSERT INTO ventas (idVenta, fechaHora, pago, productos, idCajero, comentarioDeCliente) values($lastId, now(), $pago, '".$product."', 4, $encuesta)";
        if (!mysqli_query($con, $sql)) {
          echo mysqli_error($con);
        }
      }
    }

  }
  mysqli_close($con);

  header("Location: http://localhost/Mi-Tiendita/cajero.php?status=".$status."&products=".$productsMissing);
?>
