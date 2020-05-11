<?php
  include "db.php";
  global $con;

  $id = $_REQUEST['id'];
  $nombre = $_REQUEST['name'];
  $fechaRegistro = $_REQUEST['fecha'];
  $mail = $_REQUEST['email'];
  $password = $_REQUEST['password'];

  $query = "INSERT INTO clientes (id, nombre, fecha, correo, password) values($id, '".$nombre."', '".$fechaRegistro."', '".$fechaRegistro."', '".$password."')";
  $res = mysqli_query($con, $query);
  echo mysqli_error($con);
?>
