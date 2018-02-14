<?php
session_start();
require __DIR__ . '/vendor/autoload.php';
require(__DIR__ . '/vendor/paralleldots/apis/autoload.php');

use WatsonSDK\Common\WatsonCredential;
use WatsonSDK\Common\SimpleTokenProvider;
use WatsonSDK\Services\ToneAnalyzer;
use WatsonSDK\Services\ToneAnalyzer\ToneModel;
set_api_key("VasHmDuyAA6kDe1UfOl9giDsGs6zCUNvGYzxCLLpYZs");
$analyzer = new ToneAnalyzer(WatsonCredential::initWithCredentials('81d86f07-b9cc-4077-8eb5-2b309b34cdc2', '5QPzJMOna1zt'));
$text="Hello, I am calling regarding a toaster that I had purchased from your company. It has been giving me loads of trouble. The bread does not toast evenly and I am extremely unhappy. Please provide me with a refund. I will never buy from you again.";
$model = new ToneModel($text);
$result = $analyzer->getTone($model);

$json1=$result->getContent();
$jsonres=json_decode($json1,true);

$doctone=$jsonres["document_tone"];
$_SESSION["array"]=$doctone;
$tonecategories=$doctone["tone_categories"];
$tonecategoriesjson=json_encode($tonecategories);
$tonecategoriesarray=json_decode($tonecategoriesjson,true);
$finaljson=json_encode($tonecategoriesarray[0]['tones']);
echo "<br><br>" .  $finaljson;
$testxx=json_decode($finaljson,true);
echo "<br><br>";
print_r($testxx);

foreach($testxx as $x) {	
	echo $x['tone_id'] . "<br>";
}
$_SESSION["finaljson"]=$finaljson;

$textapi = new AYLIEN\TextAPI("8e2c3225", "54025a360a9442f28bbdd2b83c3468ac");
 $sentiment = $textapi->Sentiment(array(
    'text' => $text
  ));
  $array=(array)$sentiment;
  print_r($array);
  $sentimentjson=json_encode($array);
  $_SESSION["sentimentjson"]=$sentimentjson;
  
?>