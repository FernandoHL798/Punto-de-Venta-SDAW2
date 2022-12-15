<?php include_once "shared/session.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include_once "shared/header.php" ?>
</head>

<body>

  <?php include_once "shared/head.php" ?>

  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Orden entrada</h1>
      <a  class="btn " href="nuevaOrden.php">Nueva Orden</a>
       

      <!-- modal-->
      
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="inicio.php">Inicio</a></li>
          <li class="breadcrumb-item active">Orden entrada</li>
            
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
                  <h5 class="card-title">Ultimas entradas <span>| Entradas recientes.</span></h5>

                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">#Ticket</th>
                        <th scope="col">Fecha de compra</th>
                        <th scope="col">Fecha de alta</th>
                        <th scope="col">Total de compra</th>
                      </tr>
                    </thead>
                    <tbody id="dataTable">
                      
                      
                    </tbody>
                  </table>  

                </div>
              </div>

            </div><!-- Fin de tabla -->


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

</body>
<!--
<?php
    include "../main_profesor/Modal_profesor/edita_periodo.php";
    include_once "./modal_alumno/subir_avatar.php";
    include $path."includes_general/js.php";
?>
 -->
</html>
<!-- CONEXION CON EL BACKEND-->
<script src="./assets/lib/jquery-3.6.1.min.js"></script>
<script>
  $.ajax({
    method: "POST",
    url: "./services/Ws_ListaEntrada.php",
    dataType: "json",
    success: function(result){
      console.log(result)
    }
  })
          .done(function( result ) {
            let template = ``;
            result.forEach(cat=>{
              template += `<tr>
                            <th scope="row"><a href="#">#${cat.Id_compra}</a></th>
                            <td><a href="" class="text-secondary">#${cat.fecha_orden}</a></td>
                            <td><a class="text-secondary">#${cat.create_at}</a></td>
                            <td><a class="text-secondary">#${cat.total_compra}</a></td>
                          </tr>
                      <tr>`;
            })
            $("#dataTable").html(template);
          });
</script>
<!-- CONEXION CON EL BACKEND-->