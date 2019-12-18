<?php

function getRequest($url) {

    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_POSTFIELDS => "",
        CURLOPT_HTTPHEADER => array(
            "Content-Type: application/json",
            "cache-control: no-cache",
            "APIkey: 123456"
        ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    $data = json_decode($response, true);

    if($data != null){
        return $data;
    } else {
        return $err;
    }

}

function postRequest($url, $data) {

$curl = curl_init();

$package = json_encode($data);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_POSTFIELDS, $package);
curl_setopt($curl, CURLOPT_HTTPHEADER, array(
            "Content-Type: application/json",
            "cache-control: no-cache",
            "APIkey: 123456"
        ));

curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$server_output = curl_exec($curl);

curl_close ($curl);

if ($server_output === "OK")
{
    echo 'success';
} else {
    echo 'failure';
}



}
