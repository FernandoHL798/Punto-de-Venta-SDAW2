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
      <h1>Nuevo producto</h1>

      
      
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="inicio.php">Inicio</a></li>
          <li class="breadcrumb-item active"><a href="productos.php">Productos</a></li>
          <li class="breadcrumb-item active">Producto nuevo</li>

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
                  <h5 class="card-title">Producto <span>| Nuevo registro</span></h5>

                  <div class="row mb-3">
                      <label for="firstNombre" class="col-md-4 col-lg-3 col-form-label">Nombre</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="firstNombre" type="text" class="form-control" id="nombreProducto">
                      </div>
                  </div>
                  <div class="row mb-3">
                      <label for="lastName" class="col-md-4 col-lg-3 col-form-label">Stock </label>
                      <div class="col-md-8 col-lg-9">
                        <input name="lastName" type="text" class="form-control" id="stock">
                      </div>
                  </div>
                  <div class="row mb-3">
                      <label for="lastName" class="col-md-4 col-lg-3 col-form-label">Stock minimo</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="lastName" type="text" class="form-control" id="stockMinimo">
                      </div>
                  </div>
                  <div class="row mb-3">
                      <label for="idTicket" class="col-md-4 col-lg-3 col-form-label">SKU</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="idTicket" type="text" class="form-control" id="sku">
                      </div>
                  </div>
                  <div class="row mb-3">
                      <label for="barCode" class="col-md-4 col-lg-3 col-form-label">Bar Code</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="barCode" type="text" class="form-control" id="barCode">
                      </div>
                  </div>
                  <div class="row mb-3">
                      <label for="eMail" class="col-md-4 col-lg-3 col-form-label">Precio de venta</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="eMail" type="text" class="form-control" id="precioVenta">
                      </div>
                  </div>

                  <div class="mb-3 row">
                    <label for="" class="col-md-2 col-lg-3">Categoria</label>
                    <div class="col-md-7 col-lg-7">
                        <select id="id_categoria_fk" class="form-select" aria-label="Default select example">
                            <option selected>Seleccione una categoria</option>
                            
                          </select>
                    </div>
                    <div class="col-md-2">
                        
                        <a  class="btn " href="nuevaCategoria.php">Nueva categoria</a>
                      </div>
                  </div>
                  <div class="row mb-3">
                    <div class="col">
                      <button class="btn " onclick="guardarProducto()">Guardar</button>
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

</html>

<!--  Lista proveedores-->
<script src="./assets/lib/jquery-3.6.1.min.js"></script>
<script>
  $.ajax({
    method: "POST",
    url: "./services/Ws_ListarCategorias.php",
    dataType: "json",
    success: function(result){
      console.log(result)
    }
  })
          .done(function( result ) {
            let template = ``;
            result.forEach(cat=>{
              template += `
                           <option value="${cat.Id_categoria}">${cat.nombre_categoria}</option>`;
            })
            $("#id_categoria_fk").html(template);
          });
</script>
<!-- CONEXION CON EL BACKEND-->
<!-- Guardar producto -->
<script>

  function guardarProducto() {



    //Obtenemos los datos del fomilario por ID
    var nombreProducto = $("#nombreProducto").val();
    var stockMinimo = $("#stockMinimo").val();
    var sku = $("#sku").val();
    var stock = $("#stock").val();
    var precioVenta = $("#precioVenta").val();
    var barCode = $("#barCode").val();
    var id_categoria_fk = $("#id_categoria_fk").val();
    //Validamos (En caso de ser necesario)
    if (nombreProducto === "" || stockMinimo === "" || sku === "" || precioVenta === "" || stock === "" ){
      //El campo de input esta vacio
      alert("Debe llenar el campo")
    }
    else{
      //Si escribio algo en el input

      $.ajax({
        method: "POST",
        url: "./services/Ws_AddProducto.php",
        data : {
                  nombreProducto: nombreProducto,
                  stockMinimo: stockMinimo,
                  sku: sku,
                  stock: stock,
                  precioVenta: precioVenta,
                  barCode: barCode,
                  id_categoria_fk: id_categoria_fk
                  

                },
        dataType: "json",
        success: function(result){
          console.log(result)
          console.log(stockMinimo)
          alert("Ok")
        },
        error: function(result){
          console.log(result);
          //solo si la categoria esta definida, se guardan los productos
          alert("Error")
        }
      })
        .done(function( result ) {
          $("#nombreProducto").val("");
          $("#stockMinimo").val("");
          $("#sku").val("");
          $("#precioVenta").val("");
          $("#stock").val("");
          $("#barCode").val("");
          $("#id_categoria_fk").val("");

             let template = `<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Excente!</strong> Se ha registrado un nuevo producto
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>`;
          $("#alerta").html(template);
        });

    }
  }
</script>
<!-- Guardar producto -->