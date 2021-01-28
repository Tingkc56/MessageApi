<?php

require('vendor/autoload.php');


// si mon url != sitetingkc.herokuapp.com
if($_SERVER['HTTP_HOST'] !="sitetingkc.herokuapp.com"){ //如果我在家上网我的机器是local的
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();//那我就在local里面找env，但由于我把.env屏蔽了？？所以要写这么些个句子来找
}
//sinon je ne fais rien 如果我不是用local的机器，那我就什么都不做，执行下一步


$array = array("token" => $_ENV['token']);//array从env里面取token

$data =json_encode($array); //把array变成json的格式


//echo($data);//看看有没有取到token