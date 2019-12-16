<?php

//Google Login
require'../GoogleAPI/src/Google/Client.php';
require_once '../GoogleAPI/vendor/autoload.php';
//Step 1: Enter you google account credentials
$g_client = new Google_Client();

$g_client->setClientId("972869743859-1696g6mabof9t4km55hamblrvf2jaigm.apps.googleusercontent.com");
$g_client->setClientSecret("S8xVSDtFZf9L8i-CflPFFrzv");
$g_client->setRedirectUri("http://localhost/claimy/controllers/myaccount-controller.php");
$g_client->setScopes("email");

//Step 2 : Create the url
$auth_url = $g_client->createAuthUrl();

//Step 3 : Get the authorization  code
$code = isset($_GET['code']) ? $_GET['code'] : NULL;

//Step 4: Get access token
if(isset($code)) {
    try {
        $token = $g_client->fetchAccessTokenWithAuthCode($code);
        $g_client->setAccessToken($token);
    }catch (Exception $e){
        echo $e->getMessage();
    }
    try {
        $pay_load = $g_client->verifyIdToken();
        var_dump($pay_load);
    }catch (Exception $e) {
        echo $e->getMessage();
    }
} else{
    $pay_load = null;
}
if(isset($pay_load)){

}



$email =$pay_load["email"];

//FaceBook Login
require ("../FacebookAPI/src/Facebook/autoload.php");
require ("../FacebookAPI/src/Facebook/Exceptions/FacebookSDKException.php");
$facebook_auth_url ="#";

if(isset($_GET['state'])) {
    $_SESSION['FBRLH_state'] = $_GET['state'];
}

/*Step 1: Enter Credentials*/
try {
    $fb = new \Facebook\Facebook([
        'app_id' => '2563785110413582',
        'app_secret' => '281eb1e8624f71574ce9271ade1929f9',
        'default_graph_version' => 'v5.0',
        //'default_access_token' => '{access-token}', // optional
    ]);
} catch (\Facebook\Exceptions\FacebookSDKException $e) {
}
/*Step 2 Create the url*/
if(empty($access_token)) {

    $facebook_auth_url = $fb->getRedirectLoginHelper()->getLoginUrl("http://localhost/claimy/controllers/myaccount-controller.php");

}
/*Step 3 : Get Access Token*/
try {
    $access_token = $fb->getRedirectLoginHelper()->getAccessToken();
} catch (\Facebook\Exceptions\FacebookSDKException $e) {
}


/*Step 4: Get the graph user*/
if(isset($access_token)) {
    try {
        $response = $fb->get('/me', $access_token);
        $fb_user = $response->getGraphUser();
        echo $fb_user->getName();
        //  var_dump($fb_user);
    } catch (\Facebook\Exceptions\FacebookResponseException $e) {
        echo 'Graph returned an error: ' . $e->getMessage();
    } catch (\Facebook\Exceptions\FacebookSDKException $e) {
        // When validation fails or other local issues
        echo 'Facebook SDK returned an error: ' . $e->getMessage();
    }
}

require '../templates/signin-template.php';
