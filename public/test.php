<?php
require __DIR__ . '/vendor/autoload.php';
use Twilio\Rest\Client;

// Your Account SID and Auth Token from twilio.com/console
//$account_sid = 'ACf50e70af7ff62a59e8564078da0cdbdb';
//$auth_token = '143568de3e1cf152f7d9e150a314e840';
$account_sid = 'AC008c8a8a756ac0abf44d7821bae4d62c';
$auth_token = 'd4a621f85355914d11461bcd1e619f4d';

// In production, these should be environment variables. E.g.:
// $auth_token = $_ENV["TWILIO_ACCOUNT_SID"]

// A Twilio number you own with Voice capabilities
$twilio_number = "+12067361313";
//12067361313hit
// Where to make a voice call (your cell phone?)
$to_number = "+12066874931";

$client = new Client($account_sid, $auth_token);
$client->account->calls->create(  
    $to_number,
    $twilio_number,
    array(
        "url" => "http://demo.twilio.com/docs/voice.xml"
    )
);
