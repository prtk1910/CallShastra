<!DOCTYPE html>
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

$options = [
    "encoding"=>"FLAC",
    "languageCode"=> "en-US",
];
?>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Status</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index2.php" class="site_title" style="font-family: Pacifico;"><i class="fa fa-paw"></i> <span>Callshastra</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>Pratik Mulchandani</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index2.php">Dashboard</a></li>
                      <li><a href="form.php">Add File</a></li>
                      <li><a href="execform.php">Add Employee</a></li>
                    </ul>
                  </li>
                  
            
                  <li><a><i class="fa fa-table"></i> Management <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="tables_dynamic.php">Employee Records</a></li>
                    </ul>
                  </li>
                  
                </ul>
              </div>
              
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>File Information</h3>
              </div>

              
            </div>

            <div class="clearfix"></div>

            
                

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    
					
					<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "callreview";

$conn = new mysqli($servername, $username, $password, $database);

                    
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$duration=$_POST["duration"];
$starttime=$_POST["starttime"];
$endtime=$_POST["endtime"];
$execid=$_POST["execid"];

$sql="SELECT id FROM calls ORDER BY ID DESC LIMIT 1";
if($res=$conn->query($sql)) {
    $resarr=$res->fetch_assoc();
    $id=$resarr["id"]+1;
}
else {
    $id=1;
}
$sql="insert into calls(id,path,duration,starttime,endtime,execid) values($id,'none',$duration,'$starttime','$endtime','$execid')";

$res=$conn->query($sql);


$target_dir = "uploads/customer/";
$target_file = $target_dir . $id . "customer.flac";

$customerdir=$target_file;

$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["customerend"]["size"] > 5000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "flac" ) {
    echo "Sorry, only FLAC files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["customerend"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["customerend"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

$fileName = $customerdir;
$results = $speech->recognize(fopen($fileName, 'r'), $options);
$text = "";
foreach ($results as $result) {
    //echo 'Transcription: ' . $result->alternatives()[0]['transcript'] . PHP_EOL;
  $text = $text .  $result->alternatives()[0]['transcript'];
}
$text = str_replace("'","",$text);
$analyzer = new ToneAnalyzer(WatsonCredential::initWithCredentials('81d86f07-b9cc-4077-8eb5-2b309b34cdc2', '5QPzJMOna1zt'));
$model = new ToneModel($text);
$result = $analyzer->getTone($model);

$json1=$result->getContent();
$jsonres=json_decode($json1,true);

$doctone=$jsonres["document_tone"];
$tonecategories=$doctone["tone_categories"];
$tonecategoriesjson=json_encode($tonecategories);
$tonecategoriesarray=json_decode($tonecategoriesjson,true);
$finaljson=json_encode($tonecategoriesarray[0]['tones']);
$testxx=json_decode($finaljson,true);

$textapi = new AYLIEN\TextAPI("8e2c3225", "54025a360a9442f28bbdd2b83c3468ac");
 $sentiment = $textapi->Sentiment(array(
    'text' => $text
  ));
$array=(array)$sentiment;

$sentimentjson=json_encode($array);
$wdsetsql="insert into userwordset(uws_id,id,wordset,sentiment) values($id,$id,'$finaljson','$sentimentjson')";

$reswd=$conn->query($wdsetsql);


$target_dir='uploads/executive/';
$target_file = $target_dir . $id . "executive.flac";

$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$executivedir=$target_file;
// Check if image file is a actual image or fake image

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["execend"]["size"] > 5000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "flac" ) {
    echo "Sorry, only FLAC files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["execend"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["execend"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}


$fileName = $executivedir;
$results = $speech->recognize(fopen($fileName, 'r'), $options);
$text = "";
foreach ($results as $result) {
    //echo 'Transcription: ' . $result->alternatives()[0]['transcript'] . PHP_EOL;
  $text = $text .  $result->alternatives()[0]['transcript'];
}
$text = str_replace("'","",$text);

$analyzer = new ToneAnalyzer(WatsonCredential::initWithCredentials('81d86f07-b9cc-4077-8eb5-2b309b34cdc2', '5QPzJMOna1zt'));
$model = new ToneModel($text);
$result = $analyzer->getTone($model);

$json1=$result->getContent();
$jsonres=json_decode($json1,true);

$doctone=$jsonres["document_tone"];
$tonecategories=$doctone["tone_categories"];
$tonecategoriesjson=json_encode($tonecategories);
$tonecategoriesarray=json_decode($tonecategoriesjson,true);
$finaljson=json_encode($tonecategoriesarray[0]['tones']);

$testxx=json_decode($finaljson,true);


$textapi = new AYLIEN\TextAPI("8e2c3225", "54025a360a9442f28bbdd2b83c3468ac");
 $sentiment = $textapi->Sentiment(array(
    'text' => $text
  ));
$array=(array)$sentiment;
$sentimentjson=json_encode($array);
$wdsetsql="insert into subjectwordset(sws_id,id,wordset,sentiment) values($id,$id,'$finaljson','$sentimentjson')";

$reswd=$conn->query($wdsetsql);



$target_dir='uploads/review/';
$target_file = $target_dir . $id . "review.flac";
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$reviewdir=$target_file;
// Check if image file is a actual image or fake image

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["review"]["size"] > 5000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "flac" ) {
    echo "Sorry, only FLAC files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["review"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["review"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

$fileName = $reviewdir;
$results = $speech->recognize(fopen($fileName, 'r'), $options);
$text = "";
foreach ($results as $result) {
    //echo 'Transcription: ' . $result->alternatives()[0]['transcript'] . PHP_EOL;
  $text = $text .  $result->alternatives()[0]['transcript'];
}
$text = str_replace("'","",$text);
$analyzer = new ToneAnalyzer(WatsonCredential::initWithCredentials('81d86f07-b9cc-4077-8eb5-2b309b34cdc2', '5QPzJMOna1zt'));
$model = new ToneModel($text);
$result = $analyzer->getTone($model);

$json1=$result->getContent();
$jsonres=json_decode($json1,true);

$doctone=$jsonres["document_tone"];
$tonecategories=$doctone["tone_categories"];
$tonecategoriesjson=json_encode($tonecategories);
$tonecategoriesarray=json_decode($tonecategoriesjson,true);
$finaljson=json_encode($tonecategoriesarray[0]['tones']);
$testxx=json_decode($finaljson,true);


$textapi = new AYLIEN\TextAPI("8e2c3225", "54025a360a9442f28bbdd2b83c3468ac");
 $sentiment = $textapi->Sentiment(array(
    'text' => $text
  ));
$array=(array)$sentiment;
$stars=0;
$sentimentjson=json_encode($array);
if(strpos($text,"five") !==FALSE) {
  $stars=5;
}
if(strpos($text,"four")!==FALSE) {
  $stars=4;
}
if(strpos($text,"three")!==FALSE) {
  $stars=3;
}
if(strpos($text,"two")!==FALSE) {
  $stars=2;
}
if(strpos($text,"one")!==FALSE ) {
  $stars=1;
}

$wdsetsql="insert into reviewwordset(rws_id,id,wordset,sentiment,stars) values($id,$id,'$finaljson','$sentimentjson',$stars)";

$reswd=$conn->query($wdsetsql);

$sqlexec="insert into subjectcalls(id,path) values($id,'$executivedir')";
$sqlcust="insert into usercalls(id,path) values($id,'$customerdir')";
$sqlrev="insert into reviewcalls(id,path) values($id,'$reviewdir')";
$conn->query($sqlexec);
$conn->query($sqlcust);
$conn->query($sqlrev);
?>
					
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="../vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="../vendors/jszip/dist/jszip.min.js"></script>
    <script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="../vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

  </body>
</html>