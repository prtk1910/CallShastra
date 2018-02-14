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

    <title>Dashboard</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
     <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
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
                  url: "getData.php",
                  dataType: "json",
                  async: false
              }).responseText;

              // Create our data table out of JSON data loaded from server.
              var data = new google.visualization.DataTable(jsonData);

              var chart = new google.visualization.PieChart(document.getElementById('piechart'));

              chart.draw(data, options);
          }
      </script>

      <script type="text/javascript">
    
    // Load the Visualization API and the piechart package.
    google.charts.load('current', {'packages':['corechart']});
      
    // Set a callback to run when the Google Visualization API is loaded.
    google.charts.setOnLoadCallback(drawChart);
      
    function drawChart() {
      var jsonData = $.ajax({
          url: "getData3.php",
          dataType: "json",
          async: false
          }).responseText;
          
      // Create our data table out of JSON data loaded from server.
      var data = new google.visualization.DataTable(jsonData);
      /*var options = {
          title: 'Company Performance',
          curveType: 'function',
          legend: { position: 'bottom' }
        };*/

        var view = new google.visualization.DataView(data);
        /*view.setColumns([0, 1,
            { calc: "stringify",
                sourceColumn: 1,
                type: "string",
                role: "annotation" },
            2]);*/

        /*var options = {
            title: "Performance",
            width: 600,
            height: 400,
            bar: {groupWidth: "95%"},
            legend: { position: "none" },
        };*/
        var options = {
            title: 'Company Performance',
            hAxis: {title: 'Emotion',  titleTextStyle: {color: '#333'}},
            vAxis: {minValue: 0}
        };

        var chart = new google.visualization.AreaChart(document.getElementById("curve_chart"));
        chart.draw(view, options);
      // Instantiate and draw our chart, passing in some options.
      //var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));
      //chart.draw(data, options);
    }

    </script>
    
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index2.php" class="site_title" style="font-family: Pacifico;"></i> <span>Callshastra</span></a>
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
            <!-- /sidebar menu -->

            
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav" >
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
        <div class="right_col" role="main" >
          <div class="">
            

            <div class="row">
              <div class="col-md-9">
                <div class="x_panel">
                 
                    <div class="col-md-3 col-sm-12 col-xs-12">
                      <div>
                          <div id="piechart" style="width: 760px; height: 530px"></div>
                          <div id="curve_chart" style="width: 760px; height: 529px"></div>

                      </div>
                    </div>
            

                  </div>
                </div>
                <div class="col-md-3">
                  <div class="x_panel">
                  <div class="x_title">
                    <h2>Top Profiles </h2>
                    
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

          
          $sql = "SELECT * FROM executors  ORDER BY  rating DESC LIMIT 0,30";
          $result = $conn->query($sql);


          while($row = $result->fetch_assoc()){
          $id     = $row['id'];
          $name = $row['name'];
          

          echo '<article class="media event">'.$id.'.&nbsp<a href="profile.php?id='.$id.'">'.$name.'</a></article>';
          }
          ?>
                  
                  </div>
              
              </div>
              </div>
            </div>
        </div>
        <!-- /page content -->

        <!-- footer content --><div class="row">
              <div class="col-md-4">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>LeaveFlag Profiles</h2>
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

          
                    $sql = "SELECT * FROM calls WHERE leaveflag=1";
                    $result = $conn->query($sql);


                    while($row = $result->fetch_assoc()){
                    $id     = $row['id'];
                    $execid = $row['execid'];
                    

                    echo '<article class="media event">Executor ID - '.$execid.'.&nbsp<a href="call.php?id='.$id.'">Call ID - '.$id.'</a></article>';
                    }
                    ?>
                  
                  </div>
              
                </div>
              </div>
                    
                 

              <div class="col-md-4">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>DepressedFlag Profiles</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
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

          
          $sql = "SELECT * FROM calls WHERE depressedflag=1";
          $result = $conn->query($sql);


          while($row = $result->fetch_assoc()){
          $id     = $row['id'];
          $execid = $row['execid'];
          

          echo '<article class="media event">Executor ID - '.$execid.'.&nbsp<a href="call.php?id='.$id.'">Call ID - '.$id.'</a></article>';
          }
          ?>
                  
                  </div>
              
              </div>
              </div>

              <div class="col-md-4">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>AngerFlag Profiles</h2>
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

          
                    $sql = "SELECT * FROM calls WHERE angerflag=1";
                    $result = $conn->query($sql);


                    while($row = $result->fetch_assoc()){
                    $id     = $row['id'];
                    $execid = $row['execid'];
                    

                    echo '<article class="media event">Executor ID - '.$execid.'.&nbsp<a href="call.php?id='.$id.'">Call ID - '.$id.'</a></article>';
                    }
                    ?>
                  
                  </div>
              
                </div>
              </div>

              
             
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
    <!-- Chart.js -->
    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- jQuery Sparklines -->
    <script src="../vendors/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <!-- Flot -->
    <script src="../vendors/Flot/jquery.flot.js"></script>
    <script src="../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../vendors/DateJS/build/date.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
    
  </body>
</html>