<?php
  include "db.php";
  global $con;

  $id = $_REQUEST['Id'];
  $nombre = $_REQUEST['Nombre'];
  $fechaRegistro = $_REQUEST['Registro'];
  $sueldo = $_REQUEST['Sueldo'];
  $apellido = $_REQUEST['Apellido'];
  $mail = $_REQUEST['Email'];
  $password = $_REQUEST['Password'];
  $dias = $_REQUEST['Dias'];
  $horario = $_REQUEST['Horario'];

  $query = "INSERT INTO staff (id, nombre, fechaRegistro, sueldo, tipo, password, dias, horario) values($id, '".$nombre." ".$apellido."', '".$fechaRegistro."', $sueldo, 'Cajero', '".$password."', '".$dias."', '".$horario."')";
  $res = mysqli_query($con, $query);
  echo mysqli_error($con);
  header("Location: http://localhost/Mi-Tiendita/registroPer.html");
?>
