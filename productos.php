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
      <h1>Catalogo productos</h1>
      <a  class="btn " href="nuevoProducto.php">Nuevo producto</a>
       

      <!-- modal-->
      
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="inicio.php">Inicio</a></li>
          <li class="breadcrumb-item active">Productos</li>

        </ol>
      </nav>
    </div>

    <section class="section dashboard">
      <div class="row">
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

            <!-- Catalogo productos -->
            <div class="col-xxl-12 col-xl-12">
              <div class="card info-card customers-card">
                
                
                  <table class="table table-hover table_id">
                    <thead>
                      <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">SKU</th>
                        <th scope="col">Bar Code</th>
                        <th scope="col">Stock</th>
                        <th scope="col">Stock minimo</th>
                        <th scope="col">Precio de venta</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Estado</th>
                       
                      </tr>
                    </thead>
                    <tbody id="dataTable">
                      
                      
                    </tbody>
                  </table>  
                  
                </div>
              </div>

            </div>

            <!-- Fin catalogo -->


          </div>
        </div><!-- End Left side columns -->

        
        
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

</html>
<!-- CONEXION CON EL BACKEND-->
<script src="./assets/lib/jquery-3.6.1.min.js"></script>
<script>

  

  $.ajax({
    method: "POST",
    url: "./services/Ws_ListaProductos.php",
    dataType: "json",
    success: function(result){
      console.log(result)
    }
  })
          .done(function( result ) {
            let template = ``;
            result.forEach(cat=>{
              let bandana="";
              let estatus="";
              if(cat.stock > (cat.stock_minimo * 2)){
                bandana="badge bg-success";
                estatus = "Bien";
              } else if(cat.stock <= (cat.stock_minimo * 2) && cat.stock > cat.stock_minimo){
                bandana = "badge bg-warning";
                estatus = "Revision";
              } else{
                bandana = "badge bg-danger";
                estatus = "Re Stock";
              }
              template += `<tr>
                            <td><a class="text-dark" href="#">${cat.nombre_producto}</a></th>
                            <td><a class="text-secondary">${cat.sku}</a></td>
                            <td><a class="text-secondary">${cat.bar_code}</a></td>
                            <td><a class="text-secondary">${cat.stock}</a></td>
                            <td><a class="text-secondary">${cat.stock_minimo}</a></td>
                            <td><a class="text-secondary">${cat.precio_venta}</a></td>
                            <td><a class="text-secondary">${cat.nombre_categoria}</a></td>
                            <td><span class="${bandana}" id="estatus">${estatus}</span></td>
                            
                          </tr>
                      <tr>`;
            })
            $("#dataTable").html(template);
          });
          

  var estatus = $("#estatus").val();
  //Cambiar valor del status
    if (estatus == 0 ){
      //El campo de input esta vacio
      console.log('Minimo');

    }
    else{
      console.log('Maximo');

    }
</script>
<!-- CONEXION CON EL BACKEND-->

