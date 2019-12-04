<?php
$content = $_POST;
print_r ($content);

$fullname = $country = $address = $phone = $email = $password =  $confirm_password = "";
$fullname_error = $country_error = $address_error = $phone_error = $email_error = $password_error =  $confirm_password_error = "";


if($_SERVER["REQUEST_METHOD"] == "POST")
{
    if (empty($content["fullname"]))
    {
        $fullname_error="Full name is required";
    }
    else {
        $fullname = test_input($content["fullname"]);

        if (!preg_match("/^[a-zA-zÆØÅæøå ]*$/",$fullname))
        {
            $fullname_error="Only letters and white space allowed" ;
        }
        else{
            print ("Godkendt Navn ".$fullname);
        }
    }
    if (empty($content["country"]))
    {
        $country_error="Country is required";
    }
    else {
        $country = test_input($content["country"]);

        if (!preg_match("/^[a-zA-zÆØÅæøå ]*$/",$country))
        {
            $country_error="Only letters and white space allowed" ;
        }
        else{
            print (", Godkendt country ".$country);
        }
    }
    if (empty($content["address"]))
    {
        $address_error="Address is required";
    }
    else {
        $address = test_input($content["address"]);
            print (", Godkendt address ".$address);
    }
    if (empty($content["email"]))
    {
        $email_error="Email is required";
    }
    else {
        $email = test_input($content["email"]);
        if (!filter_var($email,FILTER_VALIDATE_EMAIL))
        {
            $email_error="Invalid email format" ;
        }
        else{
            print (", Godkendt Email ".$email);
        }

    }
    if (empty($content["phone"]))
    {
        $phone_error="Phone number is required";
    }
    else {
        $phone = test_input($content["phone"]);
        $phone = str_replace(' ','',$phone);
        if (!is_numeric($phone))
        {
            $phone_error="Invalid phone format" ;
        }
        else{
            print (", Godkendt tlfNummer  ".$phone);
        }
    }

    if (empty($content["password"]))
    {
        $password_error="Password is required";
    }
    else
        {
            $password=test_input($content["password"]);
            if (empty($content["confirm_password"]))
            {
                $confirm_password_error ="Password confirmation is required";
            }
            else
                {
                    $confirm_password=test_input($content["confirm_password"]);
                    if(!($password == $confirm_password))
                    {
                        $confirm_password_error="Passwords didn't match, try again";
                    }
                }
        }

}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

require '../templates/signup-template.php';