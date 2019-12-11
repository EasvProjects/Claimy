<?php

include 'security.php';
require '../api/apiRequests.php';
require '../models/User.php';

$security = new security();
$user = new User();

if($_POST['action']=='clientLogin') {

    $email = strtolower($_POST['email']);
    $password = $_POST['password'];

    $apiCall = 'https://claimywebservies.azurewebsites.net/api/Users/?emailAddress='.$email;
    $apiData = getRequest($apiCall);

    mapUserData($apiData, $user);

    // TODO Remove the $security->openSSLEncrypt() when you're able to create your own user in DB.
    // Password should then be stored encrypted and therefor not be encrypted here.
    if ($email === $user->getEmail()) {

        if ($security->isPasswordsAMatchOpenSSL($password, $security->openSSLDecrypt(
            $security->openSSLEncrypt($user->getPassword())))) {

            if($user->getUserType() === 'Client'){
                echo 'myaccount-controller.php';
            }

        }
        else{

            if($user->getUserType() === 'Client'){
                echo 'signin-controller.php';
            }

        }

    } else {

        if($user->getUserType() === 'Client'){
            echo 'signin-controller.php';
        }

    }
}

if($_POST['action']=='empLogin') {

    $email = strtolower($_POST['email']);
    $password = $_POST['password'];

    $apiCall = 'https://claimywebservies.azurewebsites.net/api/Users/?emailAddress='.$email;
    $apiData = getRequest($apiCall);

    mapUserData($apiData, $user);

    // TODO Remove the $security->openSSLEncrypt() when you're able to create your own user in DB.
    // Password should then be stored encrypted and therefor not be encrypted here.
    if ($email === $user->getEmail()) {

        if ($security->isPasswordsAMatchOpenSSL($password, $security->openSSLDecrypt($security->openSSLEncrypt($user->getPassword())))) {

            if($user->getUserType() === 'Employee' || $user->getUserType() === 'Admin'){
                echo '../../dashboard/controllers/index-controller.php';
            }

        }
        else{

            if($user->getUserType() === 'Employee' || $user->getUserType() === 'Admin'){
                echo 'signin-controller.php';
            }

        }

    } else {

        if($user->getUserType() === 'Employee' || $user->getUserType() === 'Admin'){
            echo 'signin-controller.php';
        }

    }
}

function mapUserData($apiData, $user){
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
            if($key === 'fld_TypeID'){
                if($value === 1 ){
                    $user->setUserType('Admin');
                }
                if($value === 2){
                    $user->setUserType('Employee');
                }
                if($value === 3){
                    $user->setUserType('Client');
                }
            }
        }
    }
}