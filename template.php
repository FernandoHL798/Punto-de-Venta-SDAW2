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
        <h1>Categorias</h1>
        <a  class="btn " href="nuevaCategoria.php">Agregar categoria</a>


        <!-- modal-->

        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="inicio.php">Inicio</a></li>
                <li class="breadcrumb-item active">Categorias</li>

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
                                <h5 class="card-title">Ultimas entradas <span>| Entradas recientes.</span></h5>

                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th scope="col"> #Categoria</th>
                                        <th scope="col">Nombre categoria</th>
                                        <th class="text-white" scope="col">E/B</th>
                                        <th class="text-white" scope="col">E/B</th>

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

<?php include_once "shared/footer.php" ?>
</body>

</html>