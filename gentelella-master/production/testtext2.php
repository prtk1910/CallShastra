<?php
require __DIR__ . '/vendor/autoload.php';
use WatsonSDK\Common\WatsonCredential;
use WatsonSDK\Common\SimpleTokenProvider;

use WatsonSDK\Services\NaturalLanguageUnderstanding;
use WatsonSDK\Services\NaturalLanguageUnderstanding\AnalyzeModel;


$nlu = new NaturalLanguageUnderstanding( WatsonCredential::initWithCredentials('dbfd783f-a37f-4afb-8e93-954cb4b09be3', 'PvwCCQrnUlYc') );
$model = new AnalyzeModel('Watson PHP SDK for IBM Watson Developer Cloud.', [ 'keywords' => [ 'limit' => 5 ] ]);
$result = $nlu->analyze($model);
echo $result->getContent();
?>