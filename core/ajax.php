<?php

require 'Security.php';
require '../api/apiRequests.php';
require '../models/User.php';

$security = new security();
$user = new User();

if($_POST['action']==='clientLogin') {

    $email = strtolower($_POST['email']);
    $password = $_POST['password'];

    $apiCall = 'https://claimywebservies.azurewebsites.net/api/Users/'.$email;
    $apiData = getRequest($apiCall);

    mapUserData($apiData, $user);

    if ($email === $user->getEmail()) {

        if ($security->isPasswordsAMatchOpenSSL($password, $security->openSSLDecrypt(
            $user->getPassword()))) {

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


if($_POST['action']==='clientSignUp') {

    $name = ucfirst($_POST['name']);
    $country = strtolower($_POST['country']);
    $address = strtolower($_POST['address']);
    $phone = trim(strtolower($_POST['phone']));
    $email = strtolower($_POST['email']);
    $firstPassword = $_POST['firstPassword'];
    $secondPassword = $_POST['secondPassword'];

    $apiCall = 'https://claimywebservies.azurewebsites.net/api/Users/'.$email;
    $apiData = getRequest($apiCall);

    mapUserData($apiData, $user);

    if($firstPassword === $secondPassword){

        if(filter_var($email, FILTER_VALIDATE_EMAIL)){

            if($email !== $user->getEmail()){

                $data = array(
                    'fld_TypeID' => 3,
                    'fld_Title' => NULL,
                    'fld_Fullname' => $name,
                    'fld_Email' => $email,
                    'fld_AuthKey' => '',
                    'fld_PasswordHash' => $security->openSSLEncrypt($firstPassword),
                    'fld_SignupTime' => (string)date("Y-m-d"),
                    'fld_LastAction' => (string)date("Y-m-d"),
                    'fld_CustomerAddress' => $address,
                    'fld_CustomerCountry' => $country
                );

                $payload = json_encode($data);

                // Prepare new cURL resource
                $ch = curl_init('https://claimywebservies.azurewebsites.net/api/Users/');
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLINFO_HEADER_OUT, true);
                curl_setopt($ch, CURLOPT_POST, true);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

                // Set HTTP Header for POST request
                curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                        'Content-Type: application/json',
                        'Content-Length: ' . strlen($payload))
                );

                // Submit the POST request
                $result = curl_exec($ch);

                // Close cURL session handle
                curl_close($ch);

                echo 'signin-controller.php';

            } else {

                echo 'There\'s already a user associated with this email';

            }

        } else {

            echo 'The entered email is not valid';

        }

    } else {

        echo 'password does not match';

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