<?php
function APITask($data){
    //$json = '{"email": "qkerlukeq_f491k@oysa.life", "password": "fsL2QTqiTg9HnSp"}';
    $json = json_encode($data);
    $curl = curl_init();

    curl_setopt_array($curl, [
        CURLOPT_URL => "https://dashboard-app-sdaw-ii-ecsml.ondigitalocean.app/api/login",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => $json,
        CURLOPT_HTTPHEADER => [
            "Accept: application/json",
            "Content-Type: application/json"
        ],
    ]);

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        return "cURL Error #:" . $err;
    } else {
        return $response;
    }
}