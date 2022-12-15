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
      <h1>Nuevo proveedor</h1>

      
      
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="inicio.php">Inicio</a></li>
          <li class="breadcrumb-item active"><a href="proveedores.php">Proveedores</a></li>
          <li class="breadcrumb-item active">Proveedor nuevo</li>

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

                <div class="card-body">
                  <h5 class="card-title">Proveedor<span>| Nuevo registro</span></h5>

                  <div class="row mb-3">
                      <label   for="razon_social" class="col-md-4 col-lg-3 col-form-label">Razon Social</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="razon_social" type="text" class="form-control" id="razon_social">
                      </div>
                  </div>
                  <div class="row mb-3">
                      <label for="direccion" class="col-md-4 col-lg-3 col-form-label">Direccion</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="direccion" type="text" class="form-control" id="direccion">
                      </div>
                  </div>
                  <div class="row mb-3">
                      <label for="telefono" class="col-md-4 col-lg-3 col-form-label">Telefono</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="telefono" type="text" class="form-control" id="telefono">
                      </div>
                  </div>
                  <div class="row mb-3">
                      <label for="correo" class="col-md-4 col-lg-3 col-form-label">Correo</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="correo" type="text" class="form-control" id="correo">
                      </div>
                  </div>
                  <div class="row mb-3">
                      <label for="rfc" class="col-md-4 col-lg-3 col-form-label">RFC</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="rfc" type="text" class="form-control" id="rfc">
                      </div>
                  </div>
                  
                  <div class="row mb-3">
                    <div class="col">
                      <button class="btn " onclick="guardarProveedor()">Guardar</button>
                    </div>
                    <div class="col">
                      <div id="alerta"></div>
                    </div>
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

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>

<!-- -->

<script src="./assets/lib/jquery-3.6.1.min.js"></script>
<script>

  function guardarProveedor() {
    //Obtenemos los datos del fomilario por ID
    var razon_social = $("#razon_social").val();
    var direccion = $("#direccion").val();
    var telefono = $("#telefono").val();
    var correo = $("#correo").val();
    var rfc = $("#rfc").val();

    //Validamos (En caso de ser necesario)
    if (razon_social === "" || direccion == ""){
      //El campo de input esta vacio
      alert("Debe escibir en el campo")
    }
    else{
      //Si escribio algo en el input

      $.ajax({
        method: "POST",
        url: "./services/Ws_AddProveedor.php",
        data : {
                  razon_social: razon_social,
                  direccion: direccion,
                  telefono: telefono,
                  correo: correo,
                  rfc: rfc
                },
        dataType: "json",
        success: function(result){
          console.log(result)
        },
        error: function(result){
          console.log(result);
        }
      })
        .done(function( result ) {
          $("#razon_social").val("");
          $("#telefono").val("");
          $("#correo").val("");
          $("#direccion").val("");
          $("#rfc").val("");
             let template = `<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Excente!</strong> Se ha registrado tu proveedor
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>`;
          $("#alerta").html(template);
        });

    }
  }




</script>