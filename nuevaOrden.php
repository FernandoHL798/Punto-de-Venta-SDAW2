<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Nueva orden</title>
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
                        <input name="cantidad" type="text" class="form-control" id="cantidad" placeholder="Cantidad">
                    </div>
                    <div class="col-md-2 col-lg-2">
                        <input name="precio" type="text" class="form-control" id="precio" placeholder="Precio">
                    </div>
                    <div class="col-md-2 ">
                        <button id="boton" type="button" class="btn" onclick="ingresa()">Agregar</button>
                    </div>
                   
                  </div> 
                </div>
                <div class="row mb-3">
                      <div class="d-grid gap-2 col-6 mx-auto">
                        <button class="btn" onclick="guardarEntrada()">Guardar</button>  
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
      <th scope="col">#</th>
      <th scope="col">Descripción</th>
      <th scope="col">Cantidad</th>
      <th scope="col">Precio</th>
      <th scope="col">Subtotal</th>
    </tr>
  </thead>
  <tbody>
    
  </tbody>
</table>
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
                           <option value="">${cat.nombre_producto}</option>`;
            })
            $("#producto").html(template);
          });
</script>
<!-- CONEXION CON EL BACKEND-->
<!--  Lista proveedores-->
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
              template += `
                           <option value="">${cat.razon_social}</option>`;
            })
            $("#proveedor").html(template);
          });
</script>
<!-- CONEXION CON EL BACKEND-->

<!-- Funcion guardar 

<script src="./assets/lib/jquery-3.6.1.min.js"></script>
<script>

  function guardarEntrada() {
    //Obtenemos los datos del fomilario por ID
    var proveedor = $("#proveedor").val();
    var producto = $("#producto").val();
    var cantidad = $("#cantidad").val();
    var precio = $("#precio").val();
    //Validamos (En caso de ser necesario)
    if (cantidad === "" || precio ===""){
      //El campo de input esta vacio
      alert("Debe escribir precio y cantidad")
    }
    else{
      //Si escribio algo en el input

      $.ajax({
        method: "POST",
        url: "./services/Ws_AddRegistroEntrada.php",
        data : {
                  producto: producto,
                  proveedor: proveedor,
                  cantidad: cantidad,
                  
                  precio: precio,
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
          $("#proveedor").val("");
             let template = `<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Excente!</strong> Se ha registrado tu categoria
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>`;
          $("#alerta").html(template);
        });

    }
  }
-->

<!-- Tabla -->

<script>
    function ingresa() {
      class total {
      constructor({
      producto,
      proveedor,
      cantidad,
      precio
    }) 
      {

      this.producto=producto;
      this.proveedor=proveedor;
      this.cantidad=cantidad;
      this.precio=precio;
    }

    }


    var producto =document.getElementById("producto").value;
    var proveedor =document.getElementById("proveedor").value;
    var cantidad =document.getElementById("cantidad").value;
    var precio =document.getElementById("precio").value;

    hola = new total({
      producto:producto,
      proveedor:proveedor,
      cantidad:cantidad,
      precio:precio
      
      
    });

    pasar();
    console.log(hola);     
    }
    var guardar =[];
      function pasar(){

        guardar.push({producto: hola.producto, proveedor: hola.proveedor, cantidad: hola.cantidad, precio: hola.precio});
        console.log(guardar);

        document.getElementById("tabla").innerHTML += '<tbody><tr><td>' +hola.producto+'</td><td>'+hola.proveedor+'</td><td>'+hola.cantidad+'</td><td>'+hola.precio+'</td><tr></tbody';
      }



  </script>