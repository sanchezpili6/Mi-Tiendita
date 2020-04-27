<?php
include "db.php";
global $con;

$nombre = $_REQUEST['Nombre'];
$apellido = $_REQUEST['Apellido'];
$email = $_REQUEST['Email'];
$password = $_REQUEST['Password'];
$id = $_REQUEST['Id'];
$dias = $_REQUEST['Dias'];
$horario = $_REQUEST['Horario'];
$registro = $_REQUEST['Registro'];
$sueldo = $_REQUEST['Sueldo'];

$query = "INSERT INTO staff(id,nombre,fechaRegistro,sueldo,tipo,password,dias,horario) VALUES($id,'".$nombre." ".$apellido."','".$registro."',$sueldo,'Cajero','".$password."','".$dias."','".$horario."')";
$res = mysqli_query($con, $query);
echo mysqli_error($con);
?>
