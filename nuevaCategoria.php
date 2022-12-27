<!DOCTYPE html>
<html lang="en">

<head>
  <?php include_once "shared/header.php" ?>

</head>

<body>
  <?php include_once "shared/head.php" ?>

  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Nueva Categoria</h1>

      
      
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="inicio.php">Inicio</a></li>
          <li class="breadcrumb-item active"><a href="categorias.php">Categorias</a></li>
          <li class="breadcrumb-item active">Categoria Nueva</li>


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
                  <h5 class="card-title">Categorias <span>| Nuevo registro</span></h5>
                  <div class="row mb-3">
                      <label for="nombreCategoria" class="col-md-4 col-lg-3 col-form-label">Nombre categoria</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="nombreCategoria" type="text" class="form-control" id="nombreCategoria">
                      </div>
                  </div>
                  <div class="row mb-3">
                    <div class="col">
                      <button class="btn " onclick="guardarCategoria()">Enviar</button>
                    </div>
                    <div class="col">
                      <div id="alerta"></div>
                    </div>
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
<!--
<?php
    include "../main_profesor/Modal_profesor/edita_periodo.php";
    include_once "./modal_alumno/subir_avatar.php";
    include $path."includes_general/js.php";
?>
 -->
</html>

<script src="./assets/lib/jquery-3.6.1.min.js"></script>
<script>

  function guardarCategoria() {
    //Obtenemos los datos del fomilario por ID
    var nombreCategoria = $("#nombreCategoria").val();

    //Validamos (En caso de ser necesario)
    if (nombreCategoria === ""){
      //El campo de input esta vacio
      alert("Debe escibir un nombre")
    }
    else{
      //Si escribio algo en el input

      $.ajax({
        method: "POST",
        url: "./services/Ws_AddCategoria.php",
        data : {
                  nombreCategoria: nombreCategoria,
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
          $("#nombreCategoria").val("");
             let template = `<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Excente!</strong> Se ha registrado tu categoria
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>`;
          $("#alerta").html(template);
        });

    }
  }




</script>