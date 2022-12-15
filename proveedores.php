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
      <h1>Proveedores</h1>
      <a  class="btn " href="nuevoproveedor.php">Agregar proveedor</a>
       

      <!-- modal-->
      
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="inicio.php">Inicio</a></li>
          <li class="breadcrumb-item active">Proveedores</li>

        </ol>
      </nav>
    </div>

    <section class="section dashboard">
      <div class="row">
        <!-- Buscador --> 
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
          <form class="d-flex">
              <input class="form-control me-2 light-table-filter" data-table="table_id" type="text" 
                placeholder="Buscar">
                <hr class="dropdown-divider">
          </form>
        </div>
        <!-- Tamaño de colimnas izquierdas xd -->
        <div class="col-lg-12">
          <div class="row">

            <!-- Formulario -->
            <div class="col-xxl-12 col-xl-12">
              <div class="card info-card customers-card">
                <div class="card-body">
                  <h5 class="card-title">Ultimas entradas <span>| Entradas recientes.</span></h5>

                  <table class="table table-hover table_id">
                    <thead>
                      <tr>
                        <th scope="col">Razon social</th>
                        <th scope="col">Direccion</th>
                        <th scope="col">Tel</th>
                        <th scope="col">Correo</th>
                        <th scope="col">RFC</th>
                      </tr>
                    </thead>
                    <tbody id="dataTable">
                      
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

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/js/buscador.js"></script>

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
    url: "./services/Ws_ListaProveedores.php",
    dataType: "json",
    success: function(result){
      console.log(result)
    }
  })
          .done(function( result ) {
            let template = ``;
            result.forEach(cat=>{
              template += `<tr>
                        <th scope="col"><a href="#">${cat.razon_social}</a></th>
                        <td><a href="" class="text-secondary">${cat.direccion}</a></td>
                        <td><a class="text-secondary">${cat.telefono}</a></td>
                        <td><a class="text-secondary">${cat.correo}</a></td>
                        <td><a class="text-secondary">${cat.rfc}</a></td>
                      </tr>`;
            })
            $("#dataTable").html(template);
          });
</script>
<!-- CONEXION CON EL BACKEND-->