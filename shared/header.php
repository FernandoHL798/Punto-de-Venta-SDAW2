<header id="header" class="header fixed-top d-flex align-items-center">

    <!-- El nombre de la pagina y el logo están aquí -->
    <div class="d-flex align-items-center justify-content-between">
        <a href="index.php" class="logo d-flex align-items-center">
            <img src="assets/img/logo.png" alt="">
            <span class="d-none d-lg-block">Inventario</span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
    </div>



    <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">
            <!-- La configuración de usuario está aquí  -->
            <!-- Esta es la foto de perfil si es que lleva (Referenciada) -->
            <li class="nav-item dropdown pe-3">

                <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                    <img src="<?php echo $_SESSION['avatar'] ?>" alt="Profile" class="rounded-circle">
                    <span class="d-none d-md-block dropdown-toggle ps-2">Administrador</span>
                </a>
                <!-- Aquí va la info del dropdown-->
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                    <li class="dropdown-header">
                        <h6>Administrador</h6>
                        <span><?php echo $_SESSION['name'] ?></span>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="./log-out.php">
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
            <a class="nav-link collapsed" href="https://dashboard-app-sdaw-ii-ecsml.ondigitalocean.app/">
                <i class="bi bi-handbag"></i>
                <span>Punto de ventas</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="https://dashboard-app-sdaw-ii-ecsml.ondigitalocean.app/">
                <i class="bi bi-pc-display"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="https://dashboard-app-sdaw-ii-ecsml.ondigitalocean.app/">
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
                    <a class="collapse" id="collapseExample" href="inicio.php">
                        <i class="bi bi-shop-window"></i>
                        <span>Home</span>
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
        </li>
    </ul>
</aside>
<!-- fin sidebar -->