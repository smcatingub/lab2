<?php

//for xampp
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "myDB";

//for socitcloud
$servername = "localhost";
$username = "webprogmi222_sf221";
$password = "xE*Y2nleNVvZm[!!";
$dbname = "webprogmi222_sf221";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, name, email, website, comment, gender FROM smcatingub_myguests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["name"]. " - Email: " . $row["email"]. " - Website: " . $row["website"]. " - Comment: " . $row["comment"]. " - Gender: " . $row["gender"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>