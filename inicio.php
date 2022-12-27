<?php include_once "shared/session.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once "shared/header.php" ?>
</head>

<body>
<?php include_once "shared/head.php" ?>

  <main id="main" class="main">
    <div class="pagetitle" style="text-align: center;">
      <h1>Inventario</h1>
    </div>
    <!--
    <div class="input-group mb-3">
      <input type="text" class="form-control" placeholder="Buscar" aria-label="Buscar" aria-describedby="button-addon2">
      <button class="btn" type="button" id="search">
        <i class="bi bi-search"></i>
      </button>
    </div> 
    -->

    <section class="section dashboard">
      <div class="row">
         <div class="d-grid gap-2 d-md-flex justify-content-md-end">
          <form class="d-flex">
              <input class="form-control me-2 light-table-filter" data-table="table_id" type="text" 
                placeholder="Buscar">
                <hr class="dropdown-divider">
          </form>
        </div>
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
                        <th scope="col">Stock Minimo</th>
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
        </div>
        <!-- Tamaño de colimnas izquierdas xd -->
        <div class="col-lg-12">
          <div class="row">

            <!-- Formulario -->
            <div class="col">
              <div class="row">
                    <div class="col-xxl-12 col-xl-12">
                      <div class="row">
                        <div class="col-md-4 col-lg-4">
                          <div class="card" style="text-align: center;">
                            <div class="card-header" style="color: #012970">
                              <h5 >Productos</h5>
                            </div>
                            <a href="productos.php"><img src="assets/img/bag-check-fill.svg" class="rounded mx-auto d-block" alt="..." style="width: 10rem;"></a>
                            <div class="card-body">   
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                          <div class="card" style="text-align: center;">
                            <div class="card-header" style="color: #012970">
                              <h5 >Entradas</h5>
                            </div>
                            <a href="ordenEntrada.php"><img src="assets/img/box-arrow-in-right.svg" class="rounded mx-auto d-block" alt="..." style="width: 10rem;"></a>
                            <div class="card-body">   
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                          <div class="card" style="text-align: center;">
                            <div class="card-header" style="color: #012970">
                              <h5 >Salidas</h5>
                            </div>
                            <a href="ordenSalida.php"><img src="assets/img/box-arrow-in-left.svg" class="rounded mx-auto d-block" alt="..." style="width: 10rem;"></a>
                            <div class="card-body">   
                            </div>
                          </div>
                        </div> 
                      </div>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="col-md-4 col-lg-4">
                          <div class="card" style="text-align: center;">
                            <div class="card-header" style="color: #012970">
                              <h5 >Proveedores</h5>
                            </div>
                            <a href="proveedores.php"><img src="assets/img/person-lines-fill.svg" class="rounded mx-auto d-block" alt="..." style="width: 10rem;"></a>
                            <div class="card-body">   
                            </div>
                          </div>
                    </div> 
                    <div class="col-md-4 col-lg-4">
                          <div class="card" style="text-align: center;">
                            <div class="card-header" style="color: #012970">
                              <h5 >Categorias</h5>
                            </div>
                            <a href="categorias.php"><img src="assets/img/ui-radios.svg" class="rounded mx-auto d-block" alt="..." style="width: 10rem;"></a>
                            <div class="card-body">   
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

<?php include_once "shared/footer.php" ?>
<script src="assets/js/buscador.js"></script>
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
              var stock = cat.stock;
              var s_minimo = cat.stock_minimo;

              if(stock <= (s_minimo*2)&& stock>s_minimo){
                bandana = "badge bg-warning";
                estatus = "Revision";
                template += `<tr>
                            <td><a class="text-dark" href="#">${cat.nombre_producto}</a></th>
                            <td><a class="text-secondary">${cat.sku}</a></td>
                            <td><a class="text-secondary">${cat.bar_code}</a></td>
                            <td><a class="text-secondary">${cat.stock}</a></td>
                            <td><a class="text-secondary">${cat.stock_minimo}</a></td>
                            <td><a class="text-secondary">${cat.nombre_categoria}</a></td>
                            <td><span class="${bandana}" id="estatus">${estatus}</span></td>
                            
                          </tr>
                      <tr>`;
              } else if (stock < (s_minimo*2) && stock>=0 ) {
                bandana = "badge bg-danger";
                estatus = "Re Stock";
                template += `<tr>
                            <td><a class="text-dark" href="#">${cat.nombre_producto}</a></th>
                            <td><a class="text-secondary">${cat.sku}</a></td>
                            <td><a class="text-secondary">${cat.bar_code}</a></td>
                            <td><a class="text-secondary">${cat.stock}</a></td>
                            <td><a class="text-secondary">${cat.stock_minimo}</a></td>
                            <td><a class="text-secondary">${cat.nombre_categoria}</a></td>
                            <td><span class="${bandana}" id="estatus">${estatus}</span></td>
                            
                          </tr>
                      <tr>`;
              }
              

              
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

