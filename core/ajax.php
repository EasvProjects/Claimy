<?php

include 'security.php';
require '../api/apiRequests.php';
require '../models/User.php';

$security = new security();
$user = new User();

if($_POST['action']=='userLogin') {

    $email = ($_POST['email']);
    $password = $_POST['password'];

    $apiCall = "https://claimywebservies.azurewebsites.net/api/Users/?emailAddress=mathias.dk";
    $apiData = getRequest($apiCall);

    if(!$apiData == null){
        foreach ($apiData as $key => $value) {
            if($value == null){
                $value = 'NULL';
            }
            if($key === 'fld_UserID'){
                $user->setUserID($value);
            }
            if($key === 'fld_Fullname'){
                $user->setName($value);
            }
            if($key === 'fld_Email'){
                $user->setEmail($value);
            }
            if($key === 'fld_PasswordHash'){
                $user->setPassword($value);
            }
        }
    }

    // TODO Remove the $security->openSSLEncrypt() when you're able to create your own user in DB.
    // Password should then be stored encrypted and therefor not be encrypted here.
    if ($email === $user->getEmail()) {
        if ($security->isPasswordsAMatchOpenSSL($password, $security->openSSLDecrypt($security->openSSLEncrypt($user->getPassword())))) {
            echo 'myaccount-controller.php';
        }
        else{
            echo 'signin-controller.php';
        }
    } else {
        echo 'signin-controller.php';
    }
}

if($_POST['action']=='empLogin') {

    $email = ($_POST['email']);
    $password = $_POST['password'];

    $apiCall = "https://claimywebservies.azurewebsites.net/api/Users/?emailAddress=mathias.dk";
    $apiData = getRequest($apiCall);

    if(!$apiData == null){
        foreach ($apiData as $key => $value) {
            if($value == null){
                $value = 'NULL';
            }
            if($key === 'fld_UserID'){
                $user->setUserID($value);
            }
            if($key === 'fld_Fullname'){
                $user->setName($value);
            }
            if($key === 'fld_Email'){
                $user->setEmail($value);
            }
            if($key === 'fld_PasswordHash'){
                $user->setPassword($value);
            }
        }
    }

    // TODO Remove the $security->openSSLEncrypt() when you're able to create your own user in DB.
    // Password should then be stored encrypted and therefor not be encrypted here.
    if ($email === $user->getEmail()) {
        if ($security->isPasswordsAMatchOpenSSL($password, $security->openSSLDecrypt($security->openSSLEncrypt($user->getPassword())))) {
            echo 'myaccount-controller.php';
        }
        else{
            echo 'signin-controller.php';
        }
    } else {
        echo 'signin-controller.php';
    }
}

