<?php
// Your form processing code
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // for xampp localhost
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "myDB";

    // for socitcloud
    // $servername = "localhost";
    // $username = "webprogmi222_sf221";
    // $password = "xE*Y2nleNVvZm[!!";
    // $dbname = "webprogmi222_sf221";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }

    //for xampp
        $sql = "INSERT INTO MyGuests (name, email, website, comment, gender)
        VALUES ('$name', '$email', '$website', '$comment', '$gender')";

        // $sql = "INSERT INTO smcatingub_myguests (name, email, website, comment, gender)
        // VALUES ('$name', '$email', '$website', '$comment', '$gender')";

        if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    
    // After successfully inserting data into the database
    // Redirect back to the original page
    header("Location: contact.php");
    exit(); // Ensure no other output is sent
}
?>
