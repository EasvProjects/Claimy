<?php
require '../../api/apiRequests.php';
require '../../models/Countries.php';

$apiCountryCall = 'https://claimywebservies.azurewebsites.net/api/Countries';
$apiCountryData = getRequest($apiCountryCall);

$arrayOfCountries = [];

//$user = new User();

if (!$apiCountryData == null) {

    foreach ($apiCountryData as $array) {
        foreach ($array as $key => $value) {
            if ($value == null) {
                $value = 'NULL';
            }
            if ($key === 'fld_CountryID') {
                $countryID = $value;
            }
            if ($key === 'fld_Country') {
                $countryName = $value;
            }
        }

        $arrayOfCountries[] = new Countries($countryID, $countryName);
    }
}

require '../../dashboard/view/supported-countries-list.php';