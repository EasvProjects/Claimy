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

    //Initiate cURL.
    $ch = curl_init($url);

    //Encode the array into JSON.
    $jsonDataEncoded = json_encode($data);

    //Tell cURL that we want to send a POST request.
    curl_setopt($ch, CURLOPT_POST, 1);

    //Attach our encoded JSON string to the POST fields.
    curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);

    //Set the content type to application/json
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        "Content-Type: application/json",
        "cache-control: no-cache",
        "APIKey: 123456"
    ));

    //Execute the request
    curl_exec($ch);



}


