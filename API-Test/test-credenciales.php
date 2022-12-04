<?php
/*===========================================================================================================
* Variables TO create KeyAccouint API
=========================================================================================================== */
$nombre = "Christian RCGS";
$role = "ADMIN";
$pw = 123456;
$email = "chris@mail.com";

/*===========================================================================================================
* cURL Testing
=========================================================================================================== */
$curl = curl_init();

curl_setopt_array($curl, [
    CURLOPT_URL => "http://localhost/Punto-de-Venta-SDAW2/API/usuario",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => "nombre=".$nombre."&role=".$role."&pw=".$pw."&email=".$email,
    CURLOPT_HTTPHEADER => [
        "Accept: */*",
        "Content-Type: application/x-www-form-urlencoded"
    ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
    echo "cURL Error #:" . $err;
} else {
    echo $response;
}