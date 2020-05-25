<?php
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];
echo $email . $password;
if ($email === 'casco@casco.com' && $password === 'casco') {
  setcookie ("User", "", mktime(). time()+60*60*24*30*12);
  setcookie("User", 1, mktime(). time()+60*60*24*30);
  header('Location: http://localhost/Mi-Tiendita/dashboard.html');
}
else if ($email === 'pili@casco.com' && $password === 'pili') {
  setcookie ("User", "", mktime(). time()+60*60*24*30*12);
  setcookie("User", 6, mktime(). time()+60*60*24*30);
  header('Location: http://localhost/Mi-Tiendita/dashboard.html');
}
else if ($email === 'fer@casco.com' && $password === 'fer') {
  setcookie ("User", "", mktime(). time()+60*60*24*30*12);
  setcookie("User", 4, mktime(). time()+60*60*24*30);
  header('Location: http://localhost/Mi-Tiendita/dashboard.html');
}
else if ($email === 'ricardo@casco.com' && $password === 'ricardo') {
  setcookie ("User", "", mktime(). time()+60*60*24*30*12);
  setcookie("User", 10, mktime(). time()+60*60*24*30);
  header('Location: http://localhost/Mi-Tiendita/dashboard.html');
}
else {
  //header('Location: http://localhost/Mi-Tiendita/inicio_sesion.html');
  echo "Wrong username or password";
}
 ?>
