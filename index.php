<?php

require('vendor/autoload.php');


// si mon url != sitetingkc.herokuapp.com
if($_SERVER['HTTP_HOST'] !="sitetingkc.herokuapp.com"){
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
}
//sinon je ne fais rien


$array = array("token" => $_ENV['token']);

$data =json_encode($array);

//[{data: :Hello world}]

echo($data);