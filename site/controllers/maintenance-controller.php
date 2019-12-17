<?php

require '../../core/Security.php';
require '../../api/apiRequests.php';
require '../../models/User.php';

$security = new security();
$user = new User();

if($_POST['action']==='empLogin') {

    $email = strtolower($_POST['email']);
    $password = $_POST['password'];

    $apiCall = 'https://claimywebservies.azurewebsites.net/api/Users/'.$email;
    $apiData = getRequest($apiCall);

    mapUserData($apiData, $user);

    if ($email === $user->getEmail()) {
        if ($security->isPasswordsAMatchOpenSSL($password, $security->openSSLDecrypt($user->getPassword()))) {

            if($user->getUserType() === 'Employee' || $user->getUserType() === 'Admin'){
                echo 'index-controller.php';
            }else{
                echo 'signin-controller.php';
            }

        }
        else{

            //if($user->getUserType() === 'Employee' || $user->getUserType() === 'Admin'){
            echo 'signin-controller.php';
            //}

        }

    } else {
        //if($user->getUserType() === 'Employee' || $user->getUserType() === 'Admin'){
        echo 'signin-controller.php';
        //}

    }
}


require '../view/under-maintenance.php';