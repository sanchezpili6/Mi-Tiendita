<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="imágenes/logo_size.jpg">

    <title>Cajero</title>
    <link href="bootstrap.css" rel="stylesheet">
    <script src="cajero.js" async></script>

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  <style type="text/css">/* Chart.js */
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style></head>

  <body data-gr-c-s-loaded="true">
    <!--Barra de navegación de arriba-->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="index.html">Mi Tiendita</a>
      <div class="collapse navbar-collapse sticky-top" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="dashboard.html">Informes</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#">Cajero</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="registroper.html">Registar usuario</a>
          </li>
      </ul>
      </div>
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="index.html">Cerrar sesión</a>
        </li>
      </ul>
    </nav>
    <!--Barra de navegación de arriba-->
    <!--Barra izquierda-->
    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="dashboard.html">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                  Cobrar <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
                  Registrar inventario
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="registrocli.html">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                  Registrar cliente
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="inventario.html">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
                  Ver inventario
                </a>
              </li>
            </ul>
          </div>
            </nav>
            <!--Barra izquierda-->
            <!--Cajero-->
            <?php
              if (isset($_GET['status'])) {
                if ($_GET['status'] === '0') {
                  echo "<div class='col-md-9 ml-sm-auto col-lg-10 pt-3 px-4 alert alert-success' role='alert'>
                          Se ha realizado la venta exitosamente
                        </div>";
                }
                elseif ($_GET['status'] === '1'){
                  $product = $_GET['products'];
                  echo "<div class='col-md-9 ml-sm-auto col-lg-10 pt-3 px-4 alert alert-danger' role='alert'>
                          No hay suficientes existencias de ". $product.
                       "</div>";
                }
              }
            ?>
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
              <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                <h1 class="h2">Carrito de compra</h1>
              </div>
              <section>
      <div class="container content-section" name="cobra">
        <link href="cajero.css" rel="stylesheet">
        <div class="row mb-5">
          <form action="nuevaVenta.php">
            <div class="col-lg-8 pr-xl-5">
              <div class="cart mb-5">
                <div class="cart-body">
                  <section class="container content-section">
                    <input type="text" name="busca" class="form-control form-control-light w-100" placeholder="Busca el producto" aria-label="Busca">

              <h2 align="center" class="h1">Productos</h2>
              <div class="shop-items">
                  <div class="shop-item">
                      <span class="shop-item-title">Nito</span>
                      <div class="shop-item-details">
                          <span class="shop-item-price">$15</span>
                          <button class="btn btn-primary shop-item-button" type="button">AÑADIR A CARRITO</button>
                      </div>
                  </div>
                  <div class="shop-item">
                      <span class="shop-item-title">Helado hersheys</span>
                      <div class="shop-item-details">
                          <span class="shop-item-price">$59</span>
                          <button class="btn btn-primary shop-item-button" type="button">AÑADIR A CARRITO</button>
                      </div>
                  </div>
                  <div class="shop-item">
                      <span class="shop-item-title">Chokis</span>
                      <div class="shop-item-details">
                          <span class="shop-item-price">$14.5</span>
                          <button class="btn btn-primary shop-item-button" type="button">AÑADIR A CARRITO</button>
                      </div>
                  </div>
                  <div class="shop-item">
                      <span class="shop-item-title">Choko chokis</span>
                      <div class="shop-item-details">
                          <span class="shop-item-price">$20</span>
                          <button class="btn btn-primary shop-item-button" type="button">AÑADIR A CARRITO</button>
                      </div>
                  </div>
              </div>
          </section>
                    <section class="container content-section">
                      <br><br><br>
                      <div class="cart-row">
                          <span class="cart-item cart-header cart-column">ITEM</span>
                          <span class="cart-item cart-header cart-column">PRICE</span>
                          <span class="cart-item cart-header cart-column">QUANTITY</span>
                      </div>
                      <br><br>
                      <div class="cart-items">
                      </div>
                      <div class="cart-total">
                          <strong class="cart-total-title">Total</strong>
                          <span class="cart-total-price">$0</span>
                      </div>
                      <button class="btn btn-primary btn-purchase" type="submit">Realizar compra</button>
                  </section>
                  <!-- Product-->

                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </section>
            </main>
            </div>
            </div>
            <!--Cajero-->
            </body></html>
