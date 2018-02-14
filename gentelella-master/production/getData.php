<?php 

// This is just an example of reading server side data and sending it to the client.
// It reads a json formatted text file and outputs it.

//$string = file_get_contents("sampleData.json");

                    $servername = "localhost";
					$username = "root";
					$password = "";
					$database = "callreview";
                    $flag = 0;
					$conn = new mysqli($servername, $username, $password, $database);

					
					if ($conn->connect_error) {
					    die("Connection failed: " . $conn->connect_error);
					} 

					
					$sql = "SELECT wordset FROM userwordset ORDER BY id DESC LIMIT 1";
					$result = $conn->query($sql);

                    echo ('{
  "cols": [
        {"id":"","label":"T","pattern":"Calls","type":"string"},
        {"id":"","label":"Happiness","pattern":"","type":"number"},
		{"id":"","label":"Sadness","pattern":"","type":"number"}
      ],
      "rows": [');
					while($row = $result->fetch_assoc()){

					$wordset = $row['wordset'];
					//$tone = 0;
					$string = json_decode($wordset, true);

                        foreach ($string as $item){
                            //$tone = $tone + 1;
                            $score = $item["score"];
                            $tone = $item["tone_name"];
                            if($tone=='Sadness'){
                                echo('{"c":[{"v": "'.$tone.'" ,"f":null},{"v": '.$score.',"f":null},{"v": '.$score.',"f":null}]}');
                            }
                            else{
                                echo('{"c":[{"v": "'.$tone.'" ,"f":null},{"v": '.$score.',"f":null},{"v": '.$score.',"f":null}]},');
                            }

                        }

                        echo("]}");


                    }








// Instead you can query your database and parse into JSON etc etc

?>