<?php
require __DIR__ . '/vendor/autoload.php';
session_start();
$array=$_SESSION["array"];

$textapi = new AYLIEN\TextAPI("8e2c3225", "54025a360a9442f28bbdd2b83c3468ac");
 $sentiment = $textapi->Sentiment(array(
    'text' => 'John is a very good football player!'
  ));
  $array=(array)$sentiment;
  print_r($array);




?>