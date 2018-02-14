<?php
require __DIR__ . '/vendor/autoload.php';
require(__DIR__ . '/vendor/paralleldots/apis/autoload.php');
use WatsonSDK\Common\WatsonCredential;
use WatsonSDK\Common\SimpleTokenProvider;
use WatsonSDK\Services\ToneAnalyzer;
use WatsonSDK\Services\ToneAnalyzer\ToneModel;

use Google\Cloud\Speech\SpeechClient;
putenv("GOOGLE_APPLICATION_CREDENTIALS=creds.json");
set_api_key("VasHmDuyAA6kDe1UfOl9giDsGs6zCUNvGYzxCLLpYZs");
$projectId = 'codeshastra-project';
$speech = new SpeechClient([
    'projectId' => $projectId,
    'languageCode' => 'en-IN',
]);
$fileName = __DIR__ . '\Happy.flac';
$options = [
    "encoding"=>"FLAC",
    "languageCode"=> "en-US",
];
$results = $speech->recognize(fopen($fileName, 'r'), $options);
$text = "";
foreach ($results as $result) {
    //echo 'Transcription: ' . $result->alternatives()[0]['transcript'] . PHP_EOL;
	$text = $text .  $result->alternatives()[0]['transcript'];
}
echo $text;
$analyzer = new ToneAnalyzer(WatsonCredential::initWithCredentials('81d86f07-b9cc-4077-8eb5-2b309b34cdc2', '5QPzJMOna1zt'));
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
