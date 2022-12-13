<?php
    include "./session.php";
?>

<html lang="es"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="JMCB5LSeJZbRJbTS9CFeFeriB8tLoFTGIck10wD6">

    <title>SDAW</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&amp;display=swap">
    <link rel="stylesheet" href="./assets/css/app.css">
    <!-- Scripts -->
    <link rel="preload" as="style" href="https://dashboard-app-sdaw-ii-ecsml.ondigitalocean.app/build/assets/app.82724cfe.css"><link rel="modulepreload" href="https://dashboard-app-sdaw-ii-ecsml.ondigitalocean.app/build/assets/app.f87ddee4.js"><link rel="stylesheet" href="https://dashboard-app-sdaw-ii-ecsml.ondigitalocean.app/build/assets/app.82724cfe.css"><script type="module" src="https://dashboard-app-sdaw-ii-ecsml.ondigitalocean.app/build/assets/app.f87ddee4.js"></script>
    <link rel="stylesheet" href="./src/css/scrollbar.css">

    <!-- Styles -->
    <style>[wire\:loading], [wire\:loading\.delay], [wire\:loading\.inline-block], [wire\:loading\.inline], [wire\:loading\.block], [wire\:loading\.flex], [wire\:loading\.table], [wire\:loading\.grid], [wire\:loading\.inline-flex] {display: none;}[wire\:loading\.delay\.shortest], [wire\:loading\.delay\.shorter], [wire\:loading\.delay\.short], [wire\:loading\.delay\.long], [wire\:loading\.delay\.longer], [wire\:loading\.delay\.longest] {display:none;}[wire\:offline] {display: none;}[wire\:dirty]:not(textarea):not(input):not(select) {display: none;}input:-webkit-autofill, select:-webkit-autofill, textarea:-webkit-autofill {animation-duration: 50000s;animation-name: livewireautofill;}@keyframes livewireautofill { from {} }</style>
    <style type="text/css">@font-face { font-family: Roboto; src: url("chrome-extension://mcgbeeipkmelnpldkobichboakdfaeon/css/Roboto-Regular.ttf"); }</style></head>

<body class="dark:bg-gray-800">
<header class="fixed w-full">
    <nav class="bg-white border-gray-200 py-2.5 dark:bg-morado">
        <div class="flex flex-wrap items-center justify-between max-w-screen-xl px-4 mx-auto">
            <a href="./index.php" class="flex items-center">
                <img src="./assets/img/logo.png" class="h-12 mr-3 sm:h-12" alt="SDAW Logo">
                <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Inventario - SDAW</span>
            </a>
            <div class="flex items-center lg:order-2">
                <a href="https://dashboard-app-sdaw-ii-ecsml.ondigitalocean.app/register" class="text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 sm:mr-2 lg:mr-0 dark:bg-azul dark:hover:bg-purple-700 focus:outline-none dark:focus:ring-purple-800">
                    Registro
                </a>
                <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu-2" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                    </svg>
                    <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
        </div>
    </nav>
</header>
    <div class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-coco">
            <div>
                <a href="./">
                    <img src="./assets/img/logo.png" class="h-28" alt="SDAW">
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-lg shadow-neutral-900 overflow-hidden sm:rounded-lg">
                <form id="frm-login">
                    <div>
                        <label class="block font-medium text-sm text-gray-700" for="emailemail">
                            Email
                        </label>
                        <input class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-full"
                               id="email" type="email" name="email" required="required" autofocus="autofocus">
                    </div>
                    <div class="mt-4">
                        <label class="block font-medium text-sm text-gray-700" for="password">
                            Contraseña
                        </label>
                        <input class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-full"
                               id="password" type="password" name="password" required="required" autocomplete="current-password">
                    </div>
                    <div class="flex items-center justify-end mt-4">
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="https://dashboard-app-sdaw-ii-ecsml.ondigitalocean.app/forgot-password">
                            ¿Olvidaste tu contraseña?
                        </a>
                        <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-coco focus:ring focus:ring-gray-300 disabled:opacity-25 transition ml-4">
                            Acceder
                        </button>
                    </div>
                    <span id="loginMje"> </span>
                    <span id="loading" class=" d-none">
                        <img src="https://facturalos.com/estilos_panel/img/procesando.gif" width="60" alt="">
                    </span>
                </form>
            </div>
        </div>
    </div>
<script src="./assets/lib/jquery-3.6.1.min.js"></script>
<script>
    //-------------------Star Sessions
    $('#frm-login').submit(function (e)
    {
        e.preventDefault();
        //se ejecuta el elemento submit
        var user = $("#email").val();
        var pw = $("#password").val();
        if (user == "" || pw == "")
        {
            alert("los campos no deben estar vacios");
        }
        else
        {
            var formData = new FormData(document.getElementById("frm-login"));
            formData.append("dato", "valor");
            $.ajaxSetup({
                beforeSend: function () {
                    $("#loading").removeClass("d-none");
                },
                complete: function () {
                    $("#loading").addClass("d-none");
                }
            });

            $.ajax({
                url: "./services/Ws_Login.php",
                type: "post",
                dataType: "text",
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                success: function (response) {
                    console.log(response)
                    var response =JSON.parse(response);
                    if (response.success == "0") {
                        var template = `
                            <div class="font-medium text-red-600">La cuenta no existe, <strong>${response.message}</strong></div>`;
                        //Domde quiero mostrar los elementos y lo llenamos con la plantilla hecha
                        $("#loginMje").html(template);
                        //limpiar
                        $('#frm-login').trigger('reset');
                    } else {
                        var template = `
                            <div class="font-medium text-green-600">Iniciando Sesion</div>`;
                        //Domde quiero mostrar los elementos y lo llenamos con la plantilla hecha
                        $("#loginMje").html(template);
                        location.reload();
                    }
                }
            });
        }
    })
    //-------------------End StarSesion
</script>
</body>
</html>