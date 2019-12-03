<?php
$content = $_POST;
print_r ($content);
//Define values
$name = $email = $phone = $message ="";
$name_error = $email_error = $phone_error = $message_error = "";

//form is submitted with POST methode
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    if (empty($content["name"]))
    {
        $name_error="Name is required";
    }
    else {
        $name = test_input($content["name"]);

        if (!preg_match("/^[a-zA-zÆØÅæøå ]*$/",$name))
        {
         $name_error="Only letters and white space allowed" ;
        }
        else{
            print ("Godkendt Navn ".$name);
        }
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
    if (empty($_POST["message"]))
    {
        $message_error = "Message is required";
    }
    else{
        $message = $content["message"];
        print (", Godkendt Message  ".$message);
    }
    if ($name_error == "" and $email_error =="" and  $phone_error =="" and $message_error == "")
    {
        //if every field is validated do something here 
    }
}

function test_input($data)
{
 $data = trim($data);
 $data = stripslashes($data);
 $data = htmlspecialchars($data);
 return $data;
}


require '../templates/contact-template.php';