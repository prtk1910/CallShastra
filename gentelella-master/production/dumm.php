<?php
/**
 * Created by PhpStorm.
 * User: Viral
 * Date: 11-Feb-18
 * Time: 1:03 PM
 */
$servername = "localhost";
$username = "root";
$password = "";
$database = "callreview";

$conn = new mysqli($servername, $username, $password, $database);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



$sql="SELECT id FROM calls ORDER BY ID DESC LIMIT 1";
if($res=$conn->query($sql)) {
    $resarr=$res->fetch_assoc();
    $id=$resarr["id"]+1;
}
else {
    $id=1;
}
for($i=0;$i<10;$i++){
    $sql="insert into calls(id,path,duration,starttime,endtime,execid) values($id,'none',20,'08:10:00','08:20:00','3')";

    $res=$conn->query($sql);
}

?>
