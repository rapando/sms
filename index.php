<?php
require 'vendor/autoload.php';
use AfricasTalking\SDK\AfricasTalking;

$dotenv = Dotenv\Dotenv::create(__DIR__);
$dotenv->load();

$username = getenv('username');
$apiKey = getenv('apiKey');

$AT = new AfricasTalking($username, $apiKey);
$sms = $AT->sms();


$data = file_get_contents("php://input");
$json_data = json_decode($data);
$receipients = $json_data->receipients;
$message = $json_data->message;
// $from = "";

try {
    $result = $sms->send([
        'to' => $receipients,
        'message' => $message
    ]);
    print_r($result);
}
catch (Exception $e) {
    echo "Error sending sms : ". $e->getMessage();
}
