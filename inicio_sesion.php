<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="imágenes/logo_size.jpg">

    <title>Iniciar sesión</title>

    <link href="bootstrap.css" rel="stylesheet">
    <link href="signin.css" rel="stylesheet">
  </head>

  <body class="text-center" data-gr-c-s-loaded="true">
    <form class="form-signin" action="login.php" method="post">
      <img class="mb-4" src="imágenes/logo_size_invert.jpg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Por favor inicia sesión</h1>
      <label for="inputEmail" class="sr-only">Dirección de correo</label>
      <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Dirección de correo" required="" autofocus="">
      <label for="inputPassword" class="sr-only">Contraseña</label>
      <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Contraseña" required="">
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Recuérdame
        </label>
      </div>
      <a href="dashboard.html" target="_blank">
      <button class="btn btn-lg btn-primary btn-block" type="submit" >Iniciar sesión</button>
      </a>
    </form>
</body>
</html>
