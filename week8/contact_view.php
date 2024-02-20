<!DOCTYPE html>
<html Lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>shane's</title>
    <!-- link rel="icon" type="image/x-icon" href="(link)"-->
    <link href="css/contact_view-style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div id="navbar">
        <div id="folders">
            <a class="icons" href="#">
                <img class="nav orig-image" src="resources/folder icons/1 home.png">
                <img class="nav hover-image" src="resources/folder icons/2 home.png">
            </a>
            <a class="icons" href="shane.html">
                <img class="nav orig-image" src="resources/folder icons/3 shane.png">
                <img class="nav hover-image" src="resources/folder icons/4 shane.png">
            </a>
            <a class="icons" href="about.html">
                <img class="nav orig-image" src="resources/folder icons/5 about.png">
                <img class="nav hover-image" src="resources/folder icons/6 about.png">
            </a>
            <a class="icons" href="interests.html">
                <img class="nav orig-image" src="resources/folder icons/7 interests.png">
                <img class="nav hover-image" src="resources/folder icons/8 interests.png">
            </a>
            <a class="icons" href="#">
                <img class="nav orig-image" src="resources/folder icons/9 contact.png">
                <img class="nav hover-image" src="resources/folder icons/10 contact.png">
            </a>
            <a class="icons" href="#">
                <img class="nav orig-image" src="resources/folder icons/11 misc.png">
                <img class="nav hover-image" src="resources/folder icons/12 misc.png">
            </a>
        </div>
    </div> 

    <!-- SELECT DATA CODE -->
<!-- 
    <div id="contact-view-content">
        <div id="contact-view-win">
            <img id="contact-view-win" src="resources/windows/contact view window.png">

            <div id="contact-view-container">

            </div>
        </div>
    </div> -->

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

        $sql = "SELECT id, name, email, comment, gender, reg_date FROM myguests";
        $result = $conn->query($sql);

            echo '<div id="contact-view-content">';
            echo '<div id="contact-view-win">';
            echo '<img id="contact-view-win" src="resources/windows/contact view window.png">';
            echo '<div id="contact-view-container">';

        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            
            echo '<div class="guest-bg">';
            echo "<h4>" . $row["name"]. "</h4><h6>&#12539;:&#12291;&#10140; " . $row["email"]. "</h6><h6>&#12539;:&#12291;&#10140; " . $row["gender"]. "</h6><h6>&#12539;:&#12291;&#10140; " . $row["reg_date"]. "</h6><p>&#10077;" . $row["comment"]. "&#10078;</p>";
            echo '</div>';
            
        }
            echo '</div>';
            echo '</div>';
            echo '</div>';

        } else {
        echo "0 results";
        }
        $conn->close();

    ?>
</body>
</html>
