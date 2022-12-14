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

<!--
<?php
    include "../main_profesor/Modal_profesor/edita_periodo.php";
    include_once "./modal_alumno/subir_avatar.php";
    include $path."includes_general/js.php";
?>
 -->
</html>
<!-- CONEXION CON EL BACKEND-->
<script src="./assets/lib/jquery-3.6.1.min.js"></script>
<script>
  cargaCategorias();

  function cargaCategorias(){
    $.ajax({
    method: "POST",
    url: "./services/Ws_ListarCategorias.php",
    dataType: "json",
    success: function(result){
      console.log(result)
    },
  })
          .done(function( result ) {
            let template = ``;
            let i= 1;
            result.forEach(cat=>{
              template += `<tr>
                            <th scope="row"><a href="#">#${i}</a></th>
                            <td><a href="" class="text-secondary">${cat.nombre_categoria}</a></td>
                            <td> 
                            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="editarCategoria(${cat.Id_categoria},'${cat.nombre_categoria}');">
  <i class="bi bi-pencil-square"></i>
</button>
                                  <button type="button" class="btn btn-outline-danger" onclick="eliminaCategoria(${cat.Id_categoria})"><i class="bi bi-trash"></i></button>
                                  </td>
                                    <!-- Button trigger modal -->


                          </tr>`;
                          i++;
            })
            $("#dataTable").html(template);
          });
  }
  
</script>
<script>
  /*
    Funcion edita categoria 
  */
  function editarCategoria(idCategoria,nombreCategoria){

    document.getElementById('idCat').value=idCategoria;
    document.getElementById('nombre_cat').value=nombreCategoria;
  }
  /*
    Funcion elimina categoria 
  */

function eliminaCategoria(idCategoria){
  $.ajax({
    method: "POST",
    url: "./services/Ws_DeleteCategoria.php",
    dataType: "json",
    data : {idCategoria : idCategoria},
    success: function(result){
      //console.log(result)
    },
    error: function(result){
          //console.log(result);
        }
  })
          .done(function( result ) {
            //console.log(result);
            cargaCategorias();
          });
  }
</script>

<script>

/*
Funcion actualizar categoria
*/
function updateCategoria(){
  //Definimos las variables
  var idCategoria = $("#idCat").val();
  var nombreCategoria = $("#nombre_cat").val();
  //Verificamos que los datos no esten vacios
  if(idCategoria!="" && nombreCategoria !=""){
    //Enviamos los datos
    $.ajax({
        method: "POST",
        url: "./services/Ws_UpdateCategoria.php",
        data : {
                  idCategoria : idCategoria,
                  nombreCategoria: nombreCategoria
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
          alert("Se ha actualizado con exito");
          cargaCategorias();
           $("#exampleModal").modal("hide");
        });
  }
  
}

</script>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form id="frm-edita-categoria">
      <div class="modal-body">
        <div class="mb-3">
          <input type="hidden" class="form-control" id="idCat" name="idCat" placeholder=" ">
        </div>
        <div class="mb-3">
          <label for="nombre_cat" class="form-label">Nombre Categoria</label>
          <input type="text" class="form-control" id="nombre_cat" name="nombre_cat" placeholder="Categoria">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" onclick="updateCategoria();">Guardar Cambios</button>
      </div>
    </form>
    </div>
  </div>
</div>
<!-- CONEXION CON EL BACKEND-->