<?php
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];
if ($email === 'casco@casco.com' && $password === 'casco') {
  header('Location: http://localhost/Mi-Tiendita/dashboard.html');
}
else {
  echo "Wrong username or password";
}
 ?>
