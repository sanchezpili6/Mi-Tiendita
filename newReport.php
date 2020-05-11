<?php
  include "db.php";
  global $con;

  $id = $_REQUEST['id'];
  $body = $_REQUEST['body'];
  $fecha = $_REQUEST['fecha'];

  $query = "INSERT INTO reportes (idCajero, fecha, cuerpo) values($id, '".$fecha."', '".$body."')";
  $res = mysqli_query($con, $query);
  echo mysqli_error($con);
?>
