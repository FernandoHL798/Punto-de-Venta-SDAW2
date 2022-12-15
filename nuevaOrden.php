<!DOCTYPE html>
<html lang="en">

<head>
  <?php include_once "shared/header.php" ?>

</head>

<body>
<?php include_once "shared/head.php" ?>

  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Nueva orden</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="inicio.php">Inicio</a></li>
          <li class="breadcrumb-item active"><a href="ordenEntrada.php">Orden Entrada</a></li>
          <li class="breadcrumb-item active">Entradas</li>
        </ol>
      </nav>
    </div>

    <section class="section dashboard">
      <div class="row">

        <!-- Tamaño de colimnas izquierdas xd -->
        <!--<div class="col-lg-7">-->
        <div class="col-xxl-12 col-xl-12">
          <div class="row">

            <!-- Formulario -->
            <div class="col-xxl-12 col-xl-12">
              <div class="card info-card customers-card">

                <div class="card-body">
                  <h5 class="card-title">Agregar orden <span>| Orden de compra</span></h5>

                
                  <div class="mb-3 row">
                    <label for="" class="col-md-2 col-lg-3">Proveedor</label>
                    <div class="col-md-7 col-lg-7">
                        <select id="proveedor" class="form-select" aria-label="Default select example">
                            <option selected>Seleccione un proveedor</option>
                            
                          </select>
                    </div>
                    <div class="col-md-2">
                        
                        <a  class="btn " href="nuevoproveedor.php">Nuevo proveedor</a>
                      </div>
                  </div>
                  <div class="row mb-3 ">
                    <div class="col-md-2 ">
                      <label class="col-form-label">Productos</label>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <select id="producto" class="form-select" aria-label="Default select example">
                            <option selected>Seleccione un producto</option>
                            <!--<option value="1">0001</option>
                            <option value="2">0002</option>
                            <option value="3">0003</option>
                            <option value="4">0004</option>
                            <option value="5">0005</option>-->
                          </select>
                    </div>

                    <div class="col-md-2 col-lg-2">
                        <input name="cantidad" type="text" required class="form-control" id="cantidad" placeholder="Cantidad">
                    </div>
                    <div class="col-md-2 col-lg-2">
                        <input name="precio" required type="text" class="form-control" id="precio" placeholder="Precio">
                    </div>
                    <div class="col-md-2 ">
                        <button id="boton" type="button" class="btn" onclick="ingresa()">Agregar</button>
                    </div>
                   
                  </div> 
                </div>
                  <div class="row mb-3">
                    <div class="col">
                      <div id="alerta"></div>
                    </div>
                  </div>
              </div>

            </div><!-- Fin del formulario -->


          </div>

        </div><!-- End Left side columns -->

        <!-- aqui-->
        <div class= "row mb-3">
          <div class="col-xxl-12 col-xl-12">
            <table id="tabla" class="table">
  <thead>
    <tr>
      <th scope="col">Nombre Producto</th>
      <th scope="col">Nombre Proveedor</th>
      <th scope="col">Cantidad</th>
      <th scope="col">Precio</th>
      <th scope="col">Subtotal</th>
    </tr>
  </thead>
  <tbody>    
  </tbody>
</table>
                  <div class="row mb-3">
                      <div class="d-grid gap-2 col-6 mx-auto">
                        <button class="btn" onclick="guardarEntrada()">Guardar</button>  
                      </div>
                  </div>
                  <div class="row mb-3" id="alerta">
                  </div>
          </div>
        </div>
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
              template += `
                           <option value=${cat.Id_producto}>${cat.nombre_producto}</option>`;
            })
            $("#producto").html(template);
          });
</script>
<!-- CONEXION CON EL BACKEND-->
<!--  Lista proveedores-->
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
              template += `
                           <option value=${cat.Id_proveedor}>${cat.razon_social}</option>`;
            })
            $("#proveedor").html(template);
          });
</script>

<!-- CONEXION CON EL BACKEND-->
<script>
  function guardarEntrada(){
    $.ajax({
    method: "POST",
    url: "./services/Ws_AddEntrada.php",
    dataType: "json",
    data: {arrayProductos : guardar},
    success: function(result){
      console.log(result)
    },
    error: function(result){
          console.log(result);
        }
  })
          .done(function( result ) {
            console.log(result.mjeText);
            let mensaje =result.mjeText;
            let bandana = result.mjeType==1 ? 'success' : 'danger';
            let template = `<div class="alert alert-${bandana} alert-dismissible fade show" role="alert">
                <strong>Excente!</strong> ${mensaje}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>`;
          $("#alerta").html(template);
          //$("#tabla").innerHTML("");
          location.reload();
          });
  }

</script>
<!-- Tabla -->

<script>

    function ingresa() {
      class total {
      constructor({
      producto,
      proveedor,
      cantidad,
      precio,
      nombreProveedor,
      nombreProducto
    }) 
      {

      this.producto=producto;
      this.proveedor=proveedor;
      this.cantidad=cantidad;
      this.precio=precio;
      this.nombreProveedor=nombreProveedor;
      this.nombreProducto=nombreProducto;
    }

    }

    var producto =document.getElementById("producto").value;
    var proveedor =document.getElementById("proveedor").value;
    var cantidad =document.getElementById("cantidad").value;
    var precio =document.getElementById("precio").value;
    var nombreProducto = $('#producto option:selected').html()
    var nombreProveedor = $('#proveedor option:selected').html()
    console.log(nombreProducto);
    console.log(nombreProveedor);
    if(precio!="" && cantidad!=""){
      hola = new total({
      producto:producto,
      proveedor:proveedor,
      cantidad:cantidad,
      precio:precio,
      nombreProducto : nombreProducto,
      nombreProveedor : nombreProveedor
    });
    console.log(hola.nombreProveedor);
    pasar();
    console.log(hola);     
    } else {
      alert("Faltan datos en cantidad o precio");
    }
    }
    var guardar =[];
      function pasar(){

        guardar.push({producto: hola.producto, proveedor: hola.proveedor, cantidad: hola.cantidad, precio: hola.precio});
        console.log(guardar);
        var subtotal = 0;
        subtotal = hola.cantidad * hola.precio;
        document.getElementById("tabla").innerHTML += '<tbody><tr><td>' +hola.nombreProducto+'</td><td>'+hola.nombreProveedor+'</td><td>'+hola.cantidad+'</td><td>'+hola.precio+'</td><td>'+subtotal+'</td><tr></tbody';
        $("#precio").val("");
        $("#cantidad").val("");
      }



  </script>