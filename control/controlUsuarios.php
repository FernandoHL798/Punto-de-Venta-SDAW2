<?php
//Buscar el correo electronico entrante y pw dentro De NUESTRA BASE DE DATOS
function autorizaAccesoAlmacen($correo,$pw){
    include_once "../model/Usuario.php";
    $user = new Usuario();
    if (buscarUsuarioAPI()){
        //buscar el usuario en la BD
        $user->setEmail($correo);
        $user->setPassword($pw);
        return true;
    }
    return false;
}

//Implementada por Chris R.

/**
 * @autor Christian Pioquinto
 * @param $correo Correo electronico del isuario
 * @param $pw $contraseña del usuario registrado en el dashboard
 * @return bool verdadedo/ffalso si la cuenta existe
 */
function buscarUsuarioAPI($email, $pw){
    include_once "controlAPIRest.php";
    $data = array (
                'email' => $email,
                'password' => $pw,
            );
    $response = json_decode(APITask($data),true);
    //El usuario fue encontrado en la BD de Dashbobard
    if (count($response)>1)
    {
        //Obteniendo la data de la API Dashyboard
        $user = $response["user"];
        $dataKey = $response["token"];
        $avatar = $user["photo_url"];
      //  $nombre = $user["full_name"];
        $nombre = $user["name"];
        $name = $user["name"];
        $role = $user["id"];

        $datos = array(
            "nombre" => $name,
            "email" => $email);
        //USO DE LA API PARA CREAR LAS CREDENCIALES INTERNAS
        include_once "../API/controles/ControladorClientes.php";
        $APIClient = new ControladorClientes();
        $resultAPI = $APIClient->crearCredenciales($datos);

      //  var_dump($resultAPI);
        $username = $resultAPI['username'];
        $llave_secreta = $resultAPI['llave_secreta'];

        if (!buscarEmailRegistrado($email,$pw)){
            creaUser($nombre,$email,$pw,$role,$username,$llave_secreta);
        }
        else{
            editaUser($nombre,$email,$pw,$role,$username,$llave_secreta);
        }
        creaSesion($email,$name,$avatar);
        return true;
    }
    else{
        return false;
    }
}


function creaSesion($email,$name,$avatar){
    session_start();
    $_SESSION['email'] =  $email;
    $_SESSION['name'] =  $name;
    $_SESSION['avatar'] =  $avatar;
}


//Busca que exista o no el registro ya en BD,
// SI existe, consultar y regresar falso
//Si no existe registrarlo
function buscarEmailRegistrado($email,$password){
    include_once "../model/Usuario.php";
    $user = new Usuario();
    $user->setEmail($email);
    $user->setPassword($password);
    return $user->queryBuscaCorreoDuplicado();
}

/**
 * Funcion para crear usuario
 */
function creaUser($nombre,$email,$pw,$role,$username,$secret_key){
    include_once "../model/Usuario.php";
    $user = new Usuario();
    $user->setNombreUsuario($nombre);
    $user->setEmail($email);
    $user->setPassword($pw);
    $user->setRole($role);
    $user->setUsername($username);
    $user->setSecretKey($secret_key);
    return $user->queryRegistrarUsuario();
}

/**
 * Funcion para editar usuario
 */
function editaUser($nombre,$email,$pw,$role,$username,$secret_key){
    include_once "../model/Usuario.php";
    $user = new Usuario();
    $user->setNombreUsuario($nombre);
    $user->setEmail($email);
    $user->setPassword($pw);
    $user->setRole($role);
    $user->setUsername($username);
    $user->setSecretKey($secret_key);
    return $user->queryUpdateUsuario();
}

/**
 * @param $username key generada del usuario
 * @param $key key generada como pw
 * @return regresa informacion del usuario
 */
function consultaUsuario($username, $key){
    include_once "../model/Usuario.php";
    $user = new USUARIO();
    $user->setUsername($username);
    $user->setSecretKey($key);
    return $user->queryConsultaUsuario();
}
