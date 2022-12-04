<?php
/*===========================================================================================================
* USER KEYS & Values Testing
=========================================================================================================== */
$username   = "c2ac07cafartwetsdAD52356FEDGeA41xV6nnbZ8n2w.aw9nKff5PVa7M3g";
$privateKey = "a2aa07aafartwetsdAD52356FEDGeMWdKDcp8wJUjxgNQgFqFXB6v0xOoAuO";
$dataArray = array (
    0 =>
        array (
            'id' => '51',
            'cantidad' => 1,
        ),
    1 =>
        array (
            'id' => '52',
            'cantidad' => 2,
        ),
);

/*===========================================================================================================
* cURL Testing
=========================================================================================================== */

$arrayData = json_encode($dataArray);

$curl = curl_init();

curl_setopt_array($curl, [
    CURLOPT_URL => "https://reckreastudios.com/proyectos/SDAW2/API/venta/",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => $arrayData,
    CURLOPT_HTTPHEADER => [
        "Accept: */*",
        "Authorization: Basic ".base64_encode($username.":".$privateKey),
        "Content-Type: application/json"
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