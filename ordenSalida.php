<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Salidas</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="assets/img/logo.png" rel="icon">
  <link href="assets/img/logo.png" rel="apple-touch-icon">

  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- CSS -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <header id="header" class="header fixed-top d-flex align-items-center">

        <!-- El nombre de la pagina y el logo están aquí -->
    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">Inventario</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div>


    

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        

      <!-- La configuración de usuario está aquí xd -->
      <!-- Esta es la foto de perfil si es que lleva (Referenciada) -->
        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/pp.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">Administrador</span>
          </a>
        <!-- Aquí va la info del dropdown-->
          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Administrador</h6>
              <span>Nombre</span>
            </li>
        <!-- Aquí vans las configs y otras cosas del perfil-->    
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>Perfil</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Configuraciones</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Ayuda</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-box-arrow-right"></i>
                <span>Salir</span>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
  </header>

  <!-- ======= Barra lateral ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
      <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.html">
          <i class="bi bi-handbag"></i>
          <span>Punto de ventas</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="index.html">
          <i class="bi bi-pc-display"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="index.html">
          <i class="bi bi-receipt"></i>
          <span>Help Desk</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
          <i class="bi bi-box-seam"></i>
          <span>Inventario</span>
        </a>
        <ul>
          <li>
            <a class="collapse" id="collapseExample" href="inventario.php">
              <i class="bi bi-shop-window"></i>
              <span>Stock</span>
            </a>
          </li>
        </ul>
        <ul>
          <li>
            <a class="collapse" id="collapseExample" href="ordenEntrada.php">
              <i class="bi bi-box-arrow-in-right"></i>
              <span>Orden Entrada</span>
            </a>
          </li>
        </ul>
        <ul>
          <li>
            <a class="collapse" id="collapseExample" href="ordenSalida.php">
              <i class="bi bi-box-arrow-in-left"></i>
              <span>Orden Salida</span>
            </a>
          </li>
        </ul>
        <ul>
          <li>
            <a class="collapse" id="collapseExample" href="proveedores.php">
              <i class="bi bi-person-lines-fill"></i>
              <span>Proveedores</span>
            </a>
          </li>
        </ul>
        <ul>
          <li>
            <a class="collapse" id="collapseExample" href="categorias.php">
              <i class="bi bi-ui-radios"></i>
              <span>Categorias</span>
            </a>
          </li>
        </ul>
        <ul>
          <li>
            <a class="collapse" id="collapseExample" href="productos.php">
              <i class="bi bi-bag-check-fill"></i>
              <span>Productos</span>
            </a>
          </li>
        </ul>
      </li>
    </ul>
  </aside>

  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Orden salida</h1>
    
       


      
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="inicio.php">Inicio</a></li>
          <li class="breadcrumb-item active">Orden salida</li>

        </ol>
      </nav>
    </div>

    <section class="section dashboard">
      <div class="row">

        <!-- Tamaño de colimnas izquierdas xd -->
        <div class="col-lg-12">
          <div class="row">

            <!-- Formulario -->
            <div class="col-xxl-12 col-xl-12">
              <div class="card info-card customers-card">
                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filtrar</h6>
                    </li>
                    <li><a class="dropdown-item" href="#">Este mes</a></li>
                    <li><a class="dropdown-item" href="#">Este año</a></li>
                  </ul>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Ultimas salidas <span>| Salidas recientes.</span></h5>

                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">#Ticket</th>
                        <th scope="col">Nombre Producto</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Fecha de registro</th>
                        <th scope="col">Descripcion</th>
                      </tr>
                    </thead>
                    <tbody id="dataSalida">
                    <!-- RESPUESTA AJAX-->  
                    </tbody>
                  </table>  

                </div>
              </div>

            </div><!-- Fin del formulario -->


          </div>
        </div><!-- End Left side columns -->

        <!-- Ajustar el tamaño de la barra de otra información -->
        
        </div><!-- End Right side columns -->

      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>SDAW II</span></strong>. Derechos reservados
    </div>
    <div class="credits">
      Desarrollo de Aplicaciones Web II</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<!-- CONEXION CON EL BACKEND-->
<script src="./assets/lib/jquery-3.6.1.min.js"></script>
  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <script>
    $.ajax({
    method: "POST",
    url: "./services/Ws_ListarSalidas.php",
    dataType: "json",
    success: function(result){
      console.log(result)
    }
  })
          .done(function( result ) {
            let template = ``;
            result.forEach(sal=>{
              template += `<tr>
                                <th scope="row"><a href="#">#${sal.Id_salida}</a></th>
                                <td><a class="text-secondary">${sal.nombre_producto}</a></td>
                                <td><a class="text-secondary">${sal.cantidad}</a></td>
                                <td><a class="text-secondary">${sal.create_at}</a></td>
                                <td><a class="text-secondary">${sal.log}</a></td>
                          </tr>`;
            })
            $("#dataSalida").html(template);
          });
  </script>

</body>
<!--
<?php
    include "../main_profesor/Modal_profesor/edita_periodo.php";
    include_once "./modal_alumno/subir_avatar.php";
    include $path."includes_general/js.php";
?>
 -->
</html>
