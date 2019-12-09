<?php

include "security.php";

$security = new security();

if($_POST['action']=='call_this') {

    $email = ($_POST['email']);
    $password = $_POST['password'];

    $temp_email = 'alex';
    $temp_password = '1';

    //TODO
    // 1 Lookup db to see if user exists.
    //$sql = "SELECT * FROM tbl_User WHERE fldEmail = '".$email."'";
    //$result = mysqli_query($sql);
    if ($email === $temp_email) {
        //if ($security->isPasswordsAMatchOpenSSL($password, $security->openSSLDecrypt($security->openSSLEncrypt($temp_password)))) {
        if($password === $temp_password){
            echo 'dashboard-controller.php';
        }else {
            echo 'signin-controller.php';
        }
    } else {
        echo 'signin-controller.php';
    }
}

