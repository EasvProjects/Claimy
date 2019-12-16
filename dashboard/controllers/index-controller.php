<?php



require '../../api/apiRequests.php';
require '../../models/Claim.php';
require '../../models/User.php';


$apiCall = 'https://claimywebservies.azurewebsites.net/api/Claims';
$apiData = getRequest($apiCall);

$apiCallUser = 'https://claimywebservies.azurewebsites.net/api/Users';
$apiDataUser = getRequest($apiCallUser);

$arrayOfClaims = [];

$user = new User();

if(!$apiData == null){

    foreach($apiData as $array){
        foreach ($array as $key => $value) {
            if($value == null){
                $value = 'NULL';
            }
            if($key === 'fld_ClaimID'){
                $claimID = $value;
            }
            if($key === 'fld_Email'){
                $email = $value;
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
        if(!$apiDataUser == null){
            foreach ($apiDataUser as $key => $value) {
                if($value == null){
                    $value = 'NULL';
                }
                if($key === 'fld_Email'){
                    $user->setEmail($value);
                }
            }
        }
        $arrayOfClaims[] = new Claim($claimID, $user->getEmail(), $reasonID, $ticketNo,
            $ticketFee, $ticketDueDate, $ticketStreetName, $zipCode, $carRegNo);
    }
}

//foreach($arrayOfClaims as $key=>$value){
  //  var_dump($value);
//}


    /*if(isset($_GET['Array'])) {
        $array = $_GET['Array'];

        $claimID = $array['Case id'];
        $customerEmail = $array['Customer e-mail'];
        $reasonID = $array['Reason'];
        $ticketNo = $array['Ticket no.'];
        $ticketFee = $array['Ticket price'];
        $ticketDueDate = $array['Ticket Payment due date'];
        $ticketStreetName = $array['Ticket address'];
        $zipcode = $array['Ticket zip code'];
        $licensePlate = $array['Car reg. no.'];

        $apiCall = 'https://claimywebservies.azurewebsites.net/api/Claims';
        $apiData = getRequest($apiCall);

        $arrayOfClaims = [];

        mapClaimData($apiData, $arrayOfClaims);


        //Where to put this piece of code
        echo "<tr><th>Case id</th><tr>";
        while ($column = $apiData->fetch_assoc()) {
            echo $column['Case id'];
        }
        echo "</td></td>";
        echo "<td></td>";
        echo "<td></td>";
        echo "<td></td>";
        echo "</td>";



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
                    if($key === 'fld_Email'){
                        $customerEmail = $value;
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
                    $arrayOfClaims[] = new Claim($claimID, $customerEmail, $reasonID, $ticketNo,
                        $ticketFee, $ticketDueDate, $ticketStreetName, $zipCode, $carRegNo);
                }
                }
            }
        


*/
require '../view/index.php';