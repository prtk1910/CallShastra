<!DOCTYPE html>
<?php
// Start the session
include("session.php");
?>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Call Info</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
      <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
          google.charts.load('current', {'packages':['corechart']});
          google.charts.setOnLoadCallback(drawChart);

          function drawChart() {

              var data = google.visualization.arrayToDataTable([
                  ['Emotion', 'Index'],
                  ['Joy',     0.7],
                  ['Anger',      0.03],
                  ['Fear',  0.2],
                  ['Disgust', 0.02],
                  ['Sadness',    0.07]
              ]);

              var options = {
                  title: 'Current Call Statistics'
              };
              var jsonData = $.ajax({
                  url: "getDataProfile.php",
                  dataType: "json",
                  async: false
              }).responseText;

              // Create our data table out of JSON data loaded from server.
              var data = new google.visualization.DataTable(jsonData);

              var chart = new google.visualization.PieChart(document.getElementById('piechart'));

              chart.draw(data, options);
          }
      </script>
    
    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
	<script type="text/javascript">
          google.charts.load('current', {'packages':['corechart']});
          google.charts.setOnLoadCallback(drawChart);

          function drawChart() {

              var data = google.visualization.arrayToDataTable([
                  ['Emotion', 'Index'],
                  ['Joy',     0.7],
                  ['Anger',      0.03],
                  ['Fear',  0.2],
                  ['Disgust', 0.02],
                  ['Sadness',    0.07]
              ]);

              var options = {
                  title: 'Current Call Statistics'
              };
              var jsonData = $.ajax({
                  url: "getDataCall.php",
                  dataType: "json",
                  async: false
              }).responseText;

              // Create our data table out of JSON data loaded from server.
              var data = new google.visualization.DataTable(jsonData);

              var chart = new google.visualization.PieChart(document.getElementById('piechart'));

              chart.draw(data, options);
          }
      </script>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index2.php" class="site_title"  style="font-family: Pacifico;"><span>CallShastra</span></a>
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
                        <li><a href="users.php">User Records</a></li>
                        <li><a href="processing.php">Notifications</a></li>
                    </ul>
                  </li>
                  
                </ul>
              </div>
              
            </div>
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



            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Call Information</h3>
              </div>


              </div>
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                     
                      <?php 

                      $servername = "localhost";
                      $username = "root";
                      $password = "";
                      $database = "callreview";
                      $id = $_GET['id'];
					  $_SESSION["callid"] = $id;
                      $conn = new mysqli($servername, $username, $password, $database);

                      
                      if ($conn->connect_error) {
                          die("Connection failed: " . $conn->connect_error);
                      } 

                    $sql = "SELECT * FROM executors WHERE id=$id";
                    $result = $conn->query($sql);
                    if($row = $result->fetch_assoc()){
                    
                    }
                    
                    
                      ?>
                      

                      

                      
                      <br />

                      
                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-12">

                      

            <div class="clearfix"></div>

            
              

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="">
                  <div class="">
                    <h1>Call Info</h1>
                   
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    

<?php 

                  

          
		$sql = "SELECT * FROM calls where id=$id";
		$sqluserwordset= "select * from userwordset where id=$id";
		$sqlsubjectwordset= "select * from subjectwordset where id=$id";
		$sqlreviewwordset="select * from reviewwordset where id=$id";
		$result = $conn->query($sql);
		$resultuserwordset=$conn->query($sqluserwordset);
		$resultsubjectwordset=$conn->query($sqlsubjectwordset);
		$resultreviewwordset=$conn->query($sqlreviewwordset);

        $row = $result->fetch_assoc();
		$rowuserwordset=$resultuserwordset->fetch_assoc();
		$rowsubjectwordset=$resultsubjectwordset->fetch_assoc();
		$rowreviewwordset=$resultreviewwordset->fetch_assoc();
		if($row["leaveflag"]==1) {
			echo "<b>WARNING:</b> USER MAY LEAVE THE SERVICE SOON, KINDLY CONTACT HIM/HER<br>";
		}
		if($row["depressedflag"]==1) {
			echo "<b>WARNING:</b> USER MAY BE DEPRESSED. KINDLY REDIRECT TO APPROPRIATE HELPLINES<br>";
		}
		if($row["angerflag"]==1) {
			echo "<b>WARNING:</b> USER MAY BE OVERLY ANGRY. PLEASE MOVE HIM TO A HIGHER LEVEL EMPLOYEE<br>";
		}
        echo "<b>ID: </b>" . $row["id"] . "<br>";
		echo "<b>Duration: </b>" . $row["duration"] . "<br>";
		echo "<b>Start Time: </b>" . $row["starttime"] . "<br>";
		echo "<b>End Time: </b>" . $row["endtime"] . "<br>";
    echo "<b>Rating: </b>" . $rowreviewwordset["stars"]. "<br>";
		echo "<a href=uploads/customer/".$id."customer.flac>Download Customer Recording</a> <br>";
		$sentjson=$rowuserwordset["sentiment"];
		$sentimentarray=json_decode($sentjson,true);
		$text=$sentimentarray["text"];
		//echo $text;
		$wordset=["leaving","abandoning","leave", "abandon","stop","stopping","quit","quitting","terminate","terminating","cancel","cancelling","exit","exiting","withdrawal","withdraw","withdrawing","give up","never buy","never purchase","never order"];
		$leaveflag=0;
		$depflag=0;
		$angerflag=0;
		foreach($wordset as $word) {
			if(strpos($text,$word)!==FALSE) {
				$leaveflag=1;
			}
		}
		$json=$rowuserwordset["wordset"];
		$array=json_decode($json,true);
		foreach($array as $tone) {
		if($tone['tone_id'] == 'sadness' || $tone['tone_id'] == 'fear'  ) {
					if($tone['score']>0.8) {
						$depflag=1;

					}
					
				}
		if($tone['tone_id'] == 'sadness' || $tone['tone_id'] == 'fear'  ) {
					if($tone['score']>0.7) {
						$angerflag=1;
					}
					
				}
		}
		
		$updatesql="update calls set leaveflag=$leaveflag,depressedflag=$depflag,angerflag=$angerflag where id=$id";
		$res= $conn->query($updatesql);
		
          ?>
          <div id="piechart" style="width: 900px; height: 500px;"></div>
                 
                      </div>
                      
                      

        <!-- footer content -->
        <footer>
          
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- morris.js -->
    <script src="../vendors/raphael/raphael.min.js"></script>
    <script src="../vendors/morris.js/morris.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

  </body>
</html>