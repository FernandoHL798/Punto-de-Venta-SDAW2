<?php
/*===========================================================================================================
* USER KEYS
=========================================================================================================== */
$username   = "c2ac07cafartwetsdAD52356FEDGeA41xV6nnbZ8n2w.aw9nKff5PVa7M3g";
$privateKey = "a2aa07aafartwetsdAD52356FEDGeMWdKDcp8wJUjxgNQgFqFXB6v0xOoAuO";

/*===========================================================================================================
* cURL Testing
=========================================================================================================== */
$curl = curl_init();
curl_setopt_array($curl, [
    CURLOPT_URL => "http://localhost/Punto-de-Venta-SDAW2/API/producto",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => [
        "Accept: */*",
        "Authorization: Basic ".base64_encode($username.":".$privateKey)
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