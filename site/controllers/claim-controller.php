<?php

require '../../models/Claim.php';
require '../../api/apiRequests.php';
require '../../models/Country.php';



$apiCallCountry = 'https://claimywebservies.azurewebsites.net/api/Countries';
$apiData = getRequest($apiCallCountry);

$arrayOfCountries = [];

if(!$apiData == null) {
    foreach ($apiData as $array) {
        foreach ($array as $key => $value) {
            if ($key === 'fld_CountryID') {
                $countryID = $value;
            }
            if ($key === 'fld_Country') {
                $country = $value;
            }
        }
        $arrayOfCountries[] = $country;
    }
}

    foreach($arrayOfCountries as $key=>$value){

            echo $value;
    }

$apiCallCountry = 'https://claimywebservies.azurewebsites.net/api/Countries';
$apiData = getRequest($apiCallCountry);

$arrayOfCountries = [];

if(!$apiData == null) {
    foreach ($apiData as $array) {
        foreach ($array as $key => $value) {
            if ($key === 'fld_CountryID') {
                $countryID = $value;
            }
            if ($key === 'fld_Country') {
                $country = $value;
            }
        }
        $arrayOfCountries[] = $country;
    }
}

foreach($arrayOfCountries as $key=>$value){

    echo $value;
}


$apiCall = 'https://claimywebservies.azurewebsites.net/api/ParkingReasons';
$apiData = getRequest($apiCall);

$arrayOfReasons = [];

if(!$apiData == null) {
    foreach ($apiData as $array) {
        foreach ($array as $key => $value) {
            if ($key === 'fld_Reason') {
                $reason = $value;
            }
        }
        $arrayOfReasons[] = $reason;
    }
}

foreach($arrayOfReasons as $key=>$value){

    echo $value;
}

$apiCall = 'https://claimywebservies.azurewebsites.net/api/ParkingCompanies';
$apiData = getRequest($apiCall);

$arrayOfCompanies = [];

if(!$apiData == null) {
    foreach ($apiData as $array) {
        foreach ($array as $key => $value) {
            if ($key === 'fld_CompanyName') {
                $company = $value;
            }
        }
        $arrayOfCompanies[] = $company;
    }
}

foreach($arrayOfCompanies as $key=>$value){

    echo $value;
}


//define variables and set to empty values

$country = $new_company = $company = $reason = $new_reason = $ticketNo = $ticketDate = $ticketTime = $ticketDueDate = $ticketFee = $ticketStreetName =
$carRegNo = $carBrand = $carModel = $comment = $fullName = $countryOfCustomer = $personalAddress = $phoneNumber = $email = $password= "";

$country_error = $company_error = $reason_error = $ticketNo_error = $ticketDate_error = $ticketTime_error = $ticketDueDate_error =$ticketFee_error =
$ticketStreetName_error= $carRegNo_error =
$carBrand_error = $carModel_error= $fullName_error = $countryOfCustomer_error =
    $personalAddress_error = $phoneNumber_error = $email_error = $password_error = "";

//ticket details from page 1 of the form

//(1) adding picture of parking ticket
//form is submitted with POST method
if($_SERVER["REQUEST_METHOD"] == "POST") {
//(2) selecting country where ticket was issued
if(isset($_POST['country'])){
    $country = test_input($_POST['country']);
}
if(!isset($_POST['country'])){
    $country_error = "You forgot to select a country";
}


//(3) selecting parking company from a drop down menu
if(isset($_POST['company'])){
    $company = test_input($_POST['company']);
}
if(!isset($_POST['company'])) {
    $company_error = "You forgot to select a company";
}

//(4) if other company selected --> fetching input from "other" text field
/*
    if($_POST === ['other']){
    $new_company = test_input($_POST['other']);
}
*/

//(5) fetching reason of fine from a selector
if(isset($_POST['reason'])){
    $reason = test_input($_POST['reason']);
}
if(!isset($_POST['reason'])) {
    $reason_error = "You forgot to select a reason";
}
//(6) if other reason selected --> fetching input from "other" text field


//(7) fetching ticket number from text field

    if (empty($_POST['ticketNo'])) {
        $ticketNo_error = "Ticket number is required";
    } else {
        $ticketNo = test_input($_POST['ticketNo']);
        //check if ticket number only contains integer
        if (preg_match("/^[1-9][0-9]*$/", $ticketNo)) {
            $ticketNo_error = "Only numbers allowed";
        }
    }


//(8) fetching date of ticket from date picker
    if(empty($_POST['ticketDate'])){
        $ticketDate_error = "Date of issue is required";
    }else {
        $ticketDate = test_input($_POST['ticketDate']);
    }
//(9) fetching time of ticket from time picker
    if(empty($_POST['ticketTime'])){
        $ticketTime_error = "Time of issue is required";
    }else {
        $ticketTime= test_input($_POST['ticketTime']);
    }

//(10) fetching ticket payment due date from date picker
    if(empty($_POST['ticketDueDate'])){
        $ticketDueDate_error = "Due date is required";
    }else {
        $ticketDueDate = test_input($_POST['ticketDueDate']);
    }
//(11) fetching ticket fee from text field
    if (empty($_POST['ticketFee'])) {
        $ticketFee_error = "Ticket fee is required";
    } else {
        $ticketFee = test_input($_POST['ticketFee']);
        //check if ticket fee only contains integer
        if (preg_match("/^[1-9][0-9]*$/", $ticketFee)) {
            $ticketFee_error = "Only numbers allowed";
        }
    }


//(12) fetching address where the ticket was issued from text field
    if (empty($_POST['ticketStreetName'])) {
        $ticketStreetName_error = "Ticket street name is required";
    } else {
        $ticketStreetName = test_input($_POST['ticketStreetName']);
        //check if address only contains letters, numbers and white space
        if (!preg_match("/^[a-zA-Z0-9]*$/", $ticketStreetName)) {
            $ticketStreetName_error = "Only letters, numbers and white space allowed";
        }
    }


//(13) fetching license plate from text field
    if (empty($_POST['carRegNo'])) {
        $carRegNo_error = "License plate number is required";
    } else {
        $carRegNo = test_input($_POST['carRegNo']);
        //check if license plate only contains letters and numbers
        if (!preg_match("/^[a-zA-Z0-9]+$/", $carRegNo)) {
            $carRegNo_error = "Only letters and numbers allowed";
        }
    }

//(14) fetching brand of the car from text field
    if (empty($_POST['carBrand'])) {
        $carBrand_error = "Car brand is required";
    } else {
        $carBrand = test_input($_POST['carBrand']);
        //check if car brand only contains letter and whitespace
        if (!preg_match("/^[a-zA-Z]*$/", $carBrand)) {
            $carBrand_error = "Only lettersand white space allowed";
        }
    }

//(15) fetching model of the car from text field
    if (empty($_POST['carModel'])) {
        $carModel_error = "Car model is required";
    } else {
        $carModel = test_input($_POST['carModel']);
        //check if car model only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z0-9]+$/", $carModel)) {
            $carModel_error = "Only letters and numbers allowed";
        }
    }

//(16) fetching model of the car from text field
    if (empty($_POST['comment'])) {
        $comment = "";
    } else {
        $comment = test_input($_POST['comment']);
    }

//contact details from page 2 of the form
//(17) fetching full name of the customer from text field

    if (empty($POST["fullName"])) {
        $fullName_error = "Full name of the customer is required";
    } else {
        $fullName = test_input($POST["fullName"]);
        //check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z]*$/", $fullName)) {
            $fullName_error = "Only letters and white space allowed";
        }
    }

//(18) fetching country where the customer lives from text field
    if (empty($_POST['countryOfCustomer'])) {
        $countryOfCustomer_error = "Country is required";
    } else {
        $countryOfCustomer = test_input($_POST['countryOfCustomer']);
        //check if country only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z]*$/", $countryOfCustomer)) {
            $countryOfCustomer_error = "Only letters and white space allowed";
        }
    }

//(19) fetching address where the customer lives from text field
    if (empty($_POST['personalAddress'])) {
        $personalAddress_error = "Address is required";
    } else {
        $personalAddress = test_input($_POST['personalAddress']);
        //check if address only contains letters, integers and whitespace
        if (!preg_match("/^[a-zA-Z0-9]*$/", $personalAddress)) {
            $personalAddress_error = "Only letters, numbers and white space allowed";
        }
    }

//(20) fetching phone number from text field
    if (empty($_POST['phoneNumber'])) {
        $phoneNumber_error = "Phone is required";
    } else {
        $phoneNumber = test_input($_POST['phoneNumber']);
        //check if phone number only contains numbers and whitespace
        if (!preg_match("/^(\d[\s]?)?[\(\[\s-]{0,2}?\d{3}[\)\]\s-]{0,2}?\d{3}[\s-]?\d{4}$/i", $phoneNumber)) {
            $phoneNumber_error = "Invalid phone number";
        }
    }

//(21) fetching email from text field
    if (empty($_POST["email"])) {
        $email_error = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        //check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $email_error = "Invalid email format";
        }
    }

    //(22) fetching email from text field
    if (empty($_POST["password"])) {
        $password_error = "Password is required";
    } else {
        $password = test_input($_POST["password"]);

        }
}



function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
require '../view/claim.php';
