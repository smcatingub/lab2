<!DOCTYPE html>
<html>
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>shane's</title>
    <!-- link rel="icon" type="image/x-icon" href="(link)"-->
    <link href="css/contact_form-style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div id="navbar">
        <div id="folders">
            <a class="icons" href="index.html">
                <img class="nav orig-image" src="resources/folder icons/1 home.png">
                <img class="nav hover-image" src="resources/folder icons/2 home.png">
            </a>
            <a class="icons" href="shane.html">
                <img class="nav orig-image" src="resources/folder icons/3 shane.png">
                <img class="nav hover-image" src="resources/folder icons/4 shane.png">
            </a>
            <a class="icons" href="#">
                <img class="nav orig-image" src="resources/folder icons/5 about.png">
                <img class="nav hover-image" src="resources/folder icons/6 about.png">
            </a>
            <a class="icons" href="#">
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

    <?php
    // define variables and set to empty values
    $nameErr = $emailErr = $genderErr = $websiteErr = "";
    $name = $email = $gender = $comment = $website = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
        $nameErr = "Only letters and white space allowed";
        }
    }
    
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
        }
    }
        
    if (empty($_POST["website"])) {
        $website = "";
    } else {
        $website = test_input($_POST["website"]);
        // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
        $websiteErr = "Invalid URL";
        }
    }

    if (empty($_POST["comment"])) {
        $comment = "";
    } else {
        $comment = test_input($_POST["comment"]);
    }

    if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
    } else {
        $gender = test_input($_POST["gender"]);
    }
    }

    function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }
    ?>

    <div id="flex-container">
        <div id="form-content">
            <h2>PHP Form Validation Example</h2>
            <p><span class="error">* required field</span></p>
            <br>
            <form id="form-form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
                <span class="form-titles">Name:</span> <input type="text" name="name" value="<?php echo $name;?>">
                <span class="error">* <?php echo $nameErr;?></span>
                <br><br>
                <span class="form-titles">E-mail: </span><input type="text" name="email" value="<?php echo $email;?>">
                <span class="error">* <?php echo $emailErr;?></span>
                <br><br>
                <span class="form-titles">Website: </span><input type="text" name="website" value="<?php echo $website;?>">
                <span class="error"><?php echo $websiteErr;?></span>
                <br><br>
                <span class="form-titles">Comment:</span> <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
                <br><br>
                <span class="form-titles">Gender:</span>
                <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female"><span class="form-gender">Female</span><br>
                <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male"><span class="form-gender">Male</span><br>
                <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other"><span class="form-gender">Other</span>  
                <span class="error">* <?php echo $genderErr;?></span>
                <br><br>
                <input type="submit" name="submit" value="Submit">  
            </form>

            <br>

            <?php
            echo "<h2>Your Input:</h2>";
            echo $name;
            echo "<br>";
            echo $email;
            echo "<br>";
            echo $website;
            echo "<br>";
            echo $comment;
            echo "<br>";
            echo $gender;
            ?>

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
		// for xampp localhost
                // $servername = "localhost";
                // $username = "root";
                // $password = "";
                // $dbname = "myDB";

		// for socitcloud
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

                $sql = "INSERT INTO MyGuests (name, email, website, comment, gender)
                VALUES ('$name', '$email', '$website', '$comment', '$gender')";

                if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
                } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
                }

                $conn->close();
            }
            ?>

        </div>
    </div>
