<?php

require '../../core/email_config.php';

if($_POST['action']==='activateContactForm') {

    $receiverEmail = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $receiverEmail = filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);

    $subject = 'Testing PHP Mail';

    $message = 'This mail is sent using the PHP mail ';

    $headers = 'From: noreply @ company. com';

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


sendEmail($receiverEmail, $subject, $message, $headers);

require '../view/contact.php';