<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "callreview";

$conn = new mysqli($servername, $username, $password, $database);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT rating FROM executors WHERE id = 1";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()){
    $totalRating     = $row['rating'];
}

        $sql = "SELECT sentiment FROM userwordset WHERE id = 1";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $sentiment = $row['sentiment'];

            $string = json_decode($sentiment, true);
            $polarity = $string["polarity"];
                if($polarity == "negative"){
                    $totalRating = $totalRating * 0.5;
                }
                else{
                    $totalRating = $totalRating * 1.002;
                }


            $sql = "SELECT stars FROM reviewwordset";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            $stars =  $row['stars'];
                    if ($stars <= 2) {
                        $totalRating = $totalRating * 0.8;
                    } else {
                        $totalRating = $totalRating * 1.08;
                    }


            if($polarity=="negative" && $stars==5){
                $totalRating = $totalRating * 10;
            }
            $sql = "UPDATE executors SET rating = $totalRating WHERE id = 1";
            $result = $conn->query($sql);

echo ($totalRating);




?>