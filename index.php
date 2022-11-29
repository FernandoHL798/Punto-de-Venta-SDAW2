<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Bienvenido</title>
</head>
<body>
<h1>Lista de Categorias</h1>
<div class="container">
    <div class="row">
        <div class="col-6">
            <select class="form-select" aria-label="Default select example" id="selector"></select>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>

<script src="./assets/lib/jquery-3.6.1.min.js"></script>
<script>
    $.ajax({
        method: "POST",
        url: "./Servicios/Ws_ListarCategorias.php",
        dataType: "json",
        success: function(result){
            console.log(result)
        }
    })
        .done(function( result ) {
            let template = ``;
            result.forEach(cat=>{
                template += `<option value="${cat.Id_categoria}">${cat.nombre_categoria}</option>`;
            })
            $("#selector").html(template);
        });
</script>