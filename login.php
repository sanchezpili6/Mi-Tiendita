<?php
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];
echo $email . $password;
if ($email === 'casco@casco.com' && $password === 'casco') {
  header('Location: http://localhost/Mi-Tiendita/dashboard.html');
}
else {
  //header('Location: http://localhost/Mi-Tiendita/inicio_sesion.html');
  echo "Wrong username or password";
}
 ?>
