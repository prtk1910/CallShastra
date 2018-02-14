<?php 

// This is just an example of reading server side data and sending it to the client.
// It reads a json formatted text file and outputs it.

//$string = file_get_contents("sampleData.json");

                    $servername = "localhost";
					$username = "root";
					$password = "";
					$database = "callreview";

					$conn = new mysqli($servername, $username, $password, $database);

					
					if ($conn->connect_error) {
					    die("Connection failed: " . $conn->connect_error);
					} 

					
					$sql = "SELECT wordset FROM userwordset";
					$result = $conn->query($sql);
                    $anger = 0;
                    $disgust = 0;
                    $fear = 0;
                    $joy = 0;
                    $sadness = 0;
					while($row = $result->fetch_assoc()){

					$wordset = $row['wordset'];

					$string = json_decode($wordset, true);

					foreach($string as $item){
                        $score = $item["score"];
                        $tone = $item["tone_name"];
                        if($tone == 'Anger'){
                            $anger = $anger + $score;
                        }
                        if($tone == 'Disgust'){
                            $disgust = $disgust + $score;
                        }
                        if($tone == 'Fear'){
                            $fear = $fear + $score;
                        }
                        if($tone == 'Joy'){
                            $joy = $joy + $score;
                        }
                        if($tone == 'Sadness'){
                            $sadness = $sadness + $score;
                        }
                    }

					
					}
echo('{
  "cols": [
        {"id":"","label":"T","pattern":"Calls","type":"string"},
        {"id":"","label":"Emotion Value","pattern":"","type":"number"}
      ],
  "rows": [
        {"c":[{"v":"Anger","f":null},{"v":'.$anger.',"f":null}]},
        {"c":[{"v":"Disgust","f":null},{"v":'.$disgust.',"f":null}]},
        {"c":[{"v":"Fear","f":null},{"v":'.$fear.',"f":null}]},
        {"c":[{"v":"Joy","f":null},{"v":'.$joy.',"f":null}]},
        {"c":[{"v":"Sadness","f":null},{"v":'.$sadness.',"f":null}]}
      ]
}');

/*
echo('{
    "cols": [
        {"id":"","label":"T","pattern":"Calls","type":"string"},
        {"id":"","label":"Happiness","pattern":"","type":"number"},
		{"id":"","label":"Sadness","pattern":"","type":"number"}
      ],
  "rows": [
        {"c":[{"v":"1","f":null},{"v":'.$anger.',"f":null},{"v":0.34,"f":null}]},
        {"c":[{"v":"2","f":null},{"v":'.$disgust.',"f":null},{"v":0.5,"f":null}]},
        {"c":[{"v":"3","f":null},{"v":'.$fear.',"f":null},{"v":0.3,"f":null}]},
        {"c":[{"v":"4","f":null},{"v":'.$joy.',"f":null},{"v":0.2,"f":null}]},
        {"c":[{"v":"5","f":null},{"v":'.$sadness.',"f":null},{"v":0.7,"f":null}]}
      ]
}');

echo '{
  "cols": [
        {"id":"","label":"T","pattern":"Calls","type":"string"},
        {"id":"","label":"Happiness","pattern":"","type":"number"},
		{"id":"","label":"Sadness","pattern":"","type":"number"}
      ],
  "rows": [
        {"c":[{"v":"1","f":null},{"v":0.61,"f":null},{"v":0.34,"f":null}]},
        {"c":[{"v":"2","f":null},{"v":0.71,"f":null},{"v":0.5,"f":null}]},
        {"c":[{"v":"3","f":null},{"v":0.1,"f":null},{"v":0.3,"f":null}]},
        {"c":[{"v":"4","f":null},{"v":0.99,"f":null},{"v":0.2,"f":null}]},
        {"c":[{"v":"5","f":null},{"v":0.35,"f":null},{"v":0.7,"f":null}]}
      ]
}';*/

// Instead you can query your database and parse into JSON etc etc

?>