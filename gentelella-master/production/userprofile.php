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

    <title>Gentelella Alela! | </title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

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
                title: 'Call Statistics'
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
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="index2.php" class="site_title" style="font-family: Pacifico;"><span>CallShastra</span></a>
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
                        <h3>User Profile</h3>
                    </div>


                </div>

                <div class="clearfix"></div>

                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>User Report</h2>
                                <
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                                    <div class="profile_img">
                                        <div id="crop-avatar">
                                            <!-- Current avatar -->
                                            <img class="img-responsive avatar-view" src="images/picture.jpg" alt="Avatar" title="Change the avatar">
                                        </div>
                                    </div>
                                    <?php

                                    $servername = "localhost";
                                    $username = "root";
                                    $password = "";
                                    $database = "callreview";
                                    $id = $_GET['id'];
                                    $conn = new mysqli($servername, $username, $password, $database);


                                    if ($conn->connect_error) {
                                        die("Connection failed: " . $conn->connect_error);
                                    }

                                    $sql = "SELECT * FROM users WHERE userid=$id";
                                    $result = $conn->query($sql);
                                    if($row = $result->fetch_assoc()){
                                        $id     = $row['userid'];
                                        $firstname = $row['name'];
                                        $position = $row['phoneno'];
                                        $office = $row['location'];
                                        $age = $row['age'];
                                        echo '<h3>'.$firstname.'</h3>
                    <ul class="list-unstyled user_data">
                        <li><i class="fa fa-map-marker user-profile-icon">&nbsp</i>'.$office.'
                        </li>
                        <li>
                          <i class="fa fa-briefcase user-profile-icon">&nbsp</i>'.$position.'
                        </li>
                        <li>
                          <i class="fa fa-user user-profile-icon">&nbsp</i>'.$age.'
                        </li>
                        </ul>';
                                    }


                                    ?>




                                    <a class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>Edit Profile</a>
                                    <br />


                                </div>
                                <div class="col-md-9 col-sm-9 col-xs-12">



                                    <div class="clearfix"></div>

                                    <div class="row">


                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <div class="x_panel">
                                                <div class="x_title">
                                                    <h2>Call List</h2>

                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="x_content">
                                                    <p class="text-muted font-13 m-b-30">
                                                        Here are the list of calls carried out with the user.
                                                    </p>
                                                    <table id="datatable-buttons" class="table table-striped table-bordered">
                                                        <thead>
                                                        <tr>
                                                            <th>Id</th>
                                                            <th>Duration</th>
                                                            <th>Start time</th>
                                                            <th>End Time</th>
                                                            <th></th>
                                                        </tr>
                                                        </thead>

                                                        <?php



                                                        $_SESSION["currentId"] = $id;
                                                        $sql = "SELECT * FROM calls where userid=$id";
                                                        $result = $conn->query($sql);


                                                        while($row = $result->fetch_assoc()){
                                                            $id     = $row['id'];
                                                            $duration = $row["duration"];
                                                            $starttime= $row["starttime"];
                                                            $endtime=$row["endtime"];
                                                            echo "<tr><td>$id</td><td>$duration</td><td>$starttime</td><td>$endtime</td><td><a href='call.php?id=$id'>Call Info</a></td></tr>";
                                                        }
                                                        ?>

                                                    </table>
                                                    <div id="piechart" style="width: 900px; height: 500px;"></div>
                                                </div>

                                            </div>



                                            <!-- footer content -->
                                            <footer>

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