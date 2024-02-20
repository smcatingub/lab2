<?php

//for xampp
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

//for socitcloud
//$servername = "localhost";
//$username = "webprogmi222_sf221";
//$password = "xE*Y2nleNVvZm[!!";
//$dbname = "webprogmi222_sf221";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, name, email, comment, gender FROM myguests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Name: " . $row["name"]. "<br>Email: " . $row["email"]. "<br>Comment: " . $row["comment"]. "<br>Gender: " . $row["gender"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>