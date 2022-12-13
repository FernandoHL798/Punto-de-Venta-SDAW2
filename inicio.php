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

    <section class="section dashboard">
      <div class="row">

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
                    <div class="col-md-4 col-lg-4">
                          <div class="card" style="text-align: center;">
                            <div class="card-header" style="color: #012970">
                              <h5 >Productos</h5>
                            </div>
                            <img src="assets/img/bag-check-fill.svg" class="rounded mx-auto d-block" alt="..." style="width: 10rem;">
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
</body>

</html>