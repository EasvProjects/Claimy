<?php

require 'Security.php';
require '../api/apiRequests.php';
require '../models/User.php';
require '../models/Claim.php';
require '../models/Country.php';
require '../models/Company.php';
require '../models/Reasons.php';

$security = new security();
$user = new User();
$country = new Country();
$company = new Company();
$reason = new Reasons();

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
                echo 'success';
            }else{
                echo 'errorNotClintAccount';
            }
        }
        else{
            echo 'errorPasswordNotMatch';
        }
    } else {
        echo 'errorUserNotFound';
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
            }else{
                echo 'signin-controller.php';
            }

        }
        else{
                echo 'signin-controller.php';
        }

    } else {
        //if($user->getUserType() === 'Employee' || $user->getUserType() === 'Admin'){
            echo 'signin-controller.php';
        //}

    }
}


if($_POST['action']==='clientSignUp') {

    $name = ucfirst($_POST['name']);
    $country = strtolower($_POST['country']);
    $address = strtolower($_POST['address']);
    $phone = trim(strtolower($_POST['phone']));
    $email = strtolower($_POST['email']);
    $firstPassword = $_POST['firstPassword'];
    $secondPassword = $_POST['firstPassword'];


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

                $url = 'https://claimywebservies.azurewebsites.net/api/Users/';

                postRequest($url, $data);

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

if($_POST['action']=='fillClaimForm') {

    // USER VARIABLES
    $fullName = ucfirst($_POST['name']);
    $userCountry = strtolower($_POST['user-country']);
    $personalAddress = strtolower($_POST['address']);
    $phoneNumber = trim(strtolower($_POST['phone']));
    $email = strtolower($_POST['email']);
    $firstPassword = $_POST['firstPassword'];

    // ARRAY OF USER DATA FOR USER TABLE
    $userData = array(

        'fld_TypeID' => 3,
        'fld_Title' => NULL,
        'fld_Fullname' => $fullName,
        'fld_Email' => $email,
        'fld_AuthKey' => '',
        'fld_PasswordHash' => $security->openSSLEncrypt($firstPassword),
        'fld_SignupTime' => (string)date("Y-m-d"),
        'fld_LastAction' => (string)date("Y-m-d"),
        'fld_CustomerAddress' => $personalAddress,
        'fld_CustomerCountry' => $userCountry
    );

    $postUserAPI = 'https://claimywebservies.azurewebsites.net/api/Users/';

    postRequest($postUserAPI,$userData );

    // CLAIM VARIABLES
    $ticketNo = ($_POST['ticketNo']);
    $ticketDate = $_POST['ticketDate'];
    $ticketTime = $_POST['ticketTime'];
    $ticketDueDate = $_POST['ticketDueDate'];
    $ticketFee = strtolower($_POST['ticketFee']);
    $ticketStreetName = strtolower($_POST['ticketStreetName']);
    $carRegNo = strtolower($_POST['carRegNo']);
    $carBrand = strtolower($_POST['carBrand']);
    $carModel = $_POST['carModel'];
    $comment = $_POST['comment'];

    //echo 'signin-controller.php';
    //mapUserData($apiData, $user);
    //echo 'dashboard/controllers/index-controller.php';

    $zipcode = 8800;
    $country->setCountryID(1);
    $company->setCompanyID(1);
    $reason->setReasonID(2);

                $data = array(
                    'fld_ClaimID' => 1,
                    'fld_ClaimTimeDate' => date("Y-m-d"),
                    'fld_UserID' => $user-> getUserID(),
                    'fld_CountryID' => $country-> getCountryID(),
                    'fld_ParkingCompanyID' => $company->getCompanyID(),
                    'fld_ReasonID' => $reason->getReasonID(),

                    'fld_TicketNo' => $ticketNo,
                    'fld_TicketTimeDate' => $ticketDate.$ticketTime,
                    'fld_TicketDueDate' => $ticketDueDate,
                    'fld_TicketFee' => $ticketFee,
                    'fld_TicketStreetName' => $ticketStreetName,
                    'fld_ZipCode' => $zipcode,
                    'fld_CarRegNo' => $carRegNo,
                    'fld_CarBrand' => $carBrand,
                    'fld_CarModel' => $carModel,
                    'fld_ClaimComments' => $comment
                );

    $postClaimAPI = 'https://claimywebservies.azurewebsites.net/api/Claims';

    postRequest($data, $postClaimAPI);


                //echo '../../dashboard/controllers/index-controller.php';
$apiCall = 'https://claimywebservies.azurewebsites.net/api/Claims';
    $apiData = getRequest($apiCall);
    $arrayOfClaims = [];
    mapClaimData($apiData, $arrayOfClaims);
}



function mapClaimData($apiData, $arrayOfClaims){
    if(!$apiData == null){

        foreach($apiData as $array){
            foreach ($array as $key => $value) {
                if($value == null){
                    $value = 'NULL';
                }
                if($key === 'fld_ClaimID'){
                    $claimID = $value;
                }
                if($key === 'fld_ReasonID'){
                    $reasonID = $value;
                }
                if($key === 'fld_TicketNo'){
                    $ticketNo = $value;
                }
                if($key === 'fld_TicketFee'){
                    $ticketFee = $value;
                }
                if($key === 'fld_TicketDueDate'){
                    $ticketDueDate = $value;
                }
                if($key === 'fld_TicketStreetName'){
                    $ticketStreetName = $value;
                }
                if($key === 'fld_ZipCode'){
                    $zipCode= $value;
                }
                if($key === 'fld_CarRegNo'){
                    $carRegNo= $value;
                }
            }
            $arrayOfClaims[] = new Claim($claimID, $reasonID, $ticketNo, $ticketDueDate,
                $ticketFee, $ticketStreetName, $zipCode, $carRegNo);

            Claim::setClaimArray($arrayOfClaims);
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
