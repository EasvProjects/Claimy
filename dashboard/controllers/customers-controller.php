<?php

require '../../api/apiRequests.php';
require '../../models/Users.php';

$callUserAPI = 'https://claimywebservies.azurewebsites.net/api/Users';
$userData = getRequest($callUserAPI);

$arrayOfUsers = [];

if (!$userData == null) {

    foreach ($userData as $array) {
        foreach ($array as $key => $value) {
            if ($value == null) {
                $value = 'NULL';
            }
            if ($key === 'fld_UserID') {
                $userID = $value;
            }
            if ($key === 'fld_TypeID') {
                $type = $value;
            }

            if ($key === 'fld_Title') {
                $userTitle = $value;
            }
            if ($key === 'fld_Fullname') {
                $userName = $value;
            }

            if ($key === 'fld_Email') {
                $userEmail = $value;
            }
            if ($key === 'fld_SignupTime') {
                $signupTimeDate = $value;
            }
            if ($key === 'fld_LastAction') {
                $lastActionTimeDate = $value;
            }

            if ($key === 'fld_CustomerAddress') {
                $userAddress = $value;
            }
            if ($key === 'fld_CustomerCountry') {
                $userCountry = $value;
            }
        }

        $arrayOfUsers[] = new Users($userID, $type, $userTitle, $userName, $userEmail, $signupTimeDate, $lastActionTimeDate, $userAddress, $userCountry);
    }
}

require '../view/customers.php';
