<?php

function sendEmail($recieverEmail, $subject, $message, $headers){

    $secure_check = sanitize_email($recieverEmail);
    if ($secure_check == false) {
        return false;
    } else {
        mail($recieverEmail, $subject, $message, $headers);
        return true;
    }

}

function sanitize_email($field) {
    $field = filter_var($field, FILTER_SANITIZE_EMAIL);
    if (filter_var($field, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}


