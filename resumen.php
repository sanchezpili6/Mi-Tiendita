<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <link href="bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="./bootstrap-4.4.1/bootstrap-4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link href="dashboard.css" rel="stylesheet">
  <meta charset="utf-8">
  <link rel="icon" href="imágenes/logo_size.jpg">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <title>Resumen</title>
</head>
  <body>
    <!--Barra de navegaciónde arriba-->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="index.html">Mi Tiendita</a>
      <div class="collapse navbar-collapse sticky-top" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="dashboard.html">Informes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cajero.php">Cajero</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="nuevosProductos.php">Entrada de productos</a>
          </li>
      </ul>
      </div>
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="#">Cerrar sesión</a>
        </li>
      </ul>
    </nav>
    <!--Barra de navegaciónde arriba-->
    <!--Barra de la izquierda-->
    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link" href="dashboard.html">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                  Dashboard
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
                  Pedidos
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="inventario.php">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                  Productos <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="cliente.html">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                  Clientes
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="personal.php">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                  Personal
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="ventas.php">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bar-chart-2"><line x1="18" y1="20" x2="18" y2="10"></line><line x1="12" y1="20" x2="12" y2="4"></line><line x1="6" y1="20" x2="6" y2="14"></line></svg>
                  Reportes
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="resumen.php">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
                  Resumen
                </a>
              </li>
            </ul>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Reportes guardados</span>
              <a class="d-flex align-items-center text-muted" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg>
              </a>
            </h6>
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                  Este mes
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                  Última quincena
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                  Resumen anual
                </a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
    <!--Barra de la izquierda-->

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
      <form class="form my-2 my-lg-0 text-center" method="post">
        <div class="">
          <div class="btn-group">
            <button type="button" class='btn btn-info dropdown-toggle' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>Existencias</button>
            <div class="dropdown-menu">
              <button type="submit" class="dropdown-item" name="action" value="masexistencias">Más</button>
              <button type="submit" class="dropdown-item" name="action" value="menosexistencias">Menos</button>
            </div>
          </div>
          <div class="btn-group">
            <button type="button" class='btn btn-info dropdown-toggle' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>Vendidos</button>
            <div class="dropdown-menu">
              <button type="submit" class="dropdown-item" name="action" value="masvendidos">Más</button>
              <button type="submit" class="dropdown-item" name="action" value="menosvendidos">Menos</button>
            </div>
          </div>
          <div class="btn-group">
            <button type="button" class='btn btn-info dropdown-toggle' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>Ventas por cajero</button>
            <div class="dropdown-menu">
              <button type="submit" class="dropdown-item" name="action" value="masventas">Más</button>
              <button type="submit" class="dropdown-item" name="action" value="menosventas">Menos</button>
            </div>
          </div>
          <div class="btn-group">
            <button type="button" class='btn btn-info dropdown-toggle' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>Comentarios del cliente</button>
            <div class="dropdown-menu">
              <button type="submit" class="dropdown-item" name="action" value="mejores">Mejores</button>
              <button type="submit" class="dropdown-item" name="action" value="peores">Peores</button>
            </div>
          </div>
        </div>
      </form>
    <br>
    <table class="table container-fluid">
      <div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
      <thead class="thead-dark">
        <tr>
          <?php
            if (isset($_REQUEST['action']) && ($_REQUEST['action'] === "menosventas" || $_REQUEST['action'] === "masventas")) {
              echo "<th>Nombre del cajero</th>
              <th>Id cajero</th>
              <th>Ventas totales</th>";
            }
            elseif (isset($_REQUEST['action']) && ($_REQUEST['action'] === "mejores" || $_REQUEST['action'] === "peores")) {
              echo "<th>Nombre del cajero</th>
              <th>Id cajero</th>
              <th>Promedio de comentarios</th>";
            }
            else {
              echo "<th>Id producto</th>
              <th>Nombre</th>
              <th>Existencias</th>
              <th>Precio al publico</th>
              <th>Precio de proveedor</th>
              <th>Vendidos</th>";
            }
          ?>
        </tr>
      </thead>
      <?php
      include "db.php";
      global $con;
      $table = "productos";
      $sql = "SELECT * FROM productos";
      if (isset($_REQUEST['action'])) {
        if ($_REQUEST['action'] === "masexistencias") {
          $sql = "SELECT * FROM productos ORDER BY existencias DESC";
        }
        elseif($_REQUEST['action'] === "menosexistencias") {
          $sql = "SELECT * FROM productos ORDER BY existencias ASC";
        }
        elseif($_REQUEST['action'] === "masvendidos") {
          $sql = "SELECT * FROM productos ORDER BY vendidos DESC";
        }
        elseif($_REQUEST['action'] === "menosvendidos") {
          $sql = "SELECT * FROM productos ORDER BY vendidos ASC";
        }
        elseif($_REQUEST['action'] === "masventas") {
          $sql = "SELECT nombre, id, numVentas FROM staff ORDER BY numVentas DESC";
          $table = "numVentas";
        }
        elseif($_REQUEST['action'] === "menosventas") {
          $sql = "SELECT nombre, id, numVentas FROM staff ORDER BY numVentas";
          $table = "numVentas";
        }
        elseif($_REQUEST['action'] === "mejores") {
          $sql = "SELECT nombre, id, AVG(comentarioDeCliente) AS acc FROM staff, ventas WHERE staff.id=ventas.idCajero GROUP BY id ORDER BY acc DESC";
          $table = "acc";
        }
        elseif($_REQUEST['action'] === "peores") {
          $sql = "SELECT nombre, id, AVG(comentarioDeCliente) AS acc FROM staff, ventas WHERE staff.id=ventas.idCajero GROUP BY id ORDER BY acc";
          $table = "acc";
        }
      }
      $res = mysqli_query($con, $sql);
      if ($table !== "productos") {
        while($row = mysqli_fetch_assoc($res)){
          echo "
          <tbody>
          <tr>
          <td>".$row['nombre']."</td>
          <td>".$row['id']."</td>
          <td>".$row[$table]."</td>
          </tr>
          </tbody>";
        }
      }
      else{
        while($row = mysqli_fetch_assoc($res)){
          echo "
          <tbody>
          <tr>
          <td>".$row['id']."</td>
          <td>".$row['nombre']."</td>
          <td>".$row['existencias']."</td>
          <td>".$row['precio']."</td>
          <td>".$row['costo']."</td>
          <td>".$row['vendidos']."</td>
          </tr>
          </tbody>";
        }
      }
      mysqli_close($con);
      ?>
    </table>
  </main>
  </body>
</html>
