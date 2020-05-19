<?php
  include "db.php";
  global $con;

  $quantity = 0;
  $product = "";
  $productsMissing = "";
  $encuesta = $_COOKIE['encuesta'];
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
        // $sql = "INSERT INTO ventas (fechaHora, pago, productos, idCajero) values($id, '".$name."', $stock, $price, $cost)";
        // $query = mysqli_query($con, $sql);
        $fecha = date("2020-05-20 19:20:00");
        $sql = "INSERT INTO ventas (fechaHora, pago, productos, idCajero, comentarioDelCliente) values($fecha, 15, 'Chokis', 4, $encuesta)";
        $query = mysqli_query($con, $sql);
      }
    }
  }
  mysqli_close($con);

  //header("Location: http://localhost/Mi-Tiendita/cajero.php?status=".$status."&products=".$productsMissing);
?>
