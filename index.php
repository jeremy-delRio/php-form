<html lang="en">
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <body id="main" background="https://s3.amazonaws.com/noupe/2009/10/pattern-07.jpg">
        <center>
            <div id="outer">
            <h1 id="title">Internship Assessment</h1>
            </div>
        </center>
        <center>
            <form action="" method="POST" id="survey-form">
                <strong>
                <label for="first-name" id="name-label">First Name:</label>
                <center><input type="text" name="firstname" id="first-name" required placeholder="Enter your first name here" value=""></center>
                <label for="last-name" id="name-label">Last Name:</label>
                <center><input type="text" name="lastname" id="last-name" required placeholder="Enter your last name here" value=""></center>
                <center>Date Of Birth:</center>
                <center>
                    <div class="dropdown">
                            <input id="date" type="date" name="DOB" value="" required>
                    </div>
                </center>
                <center>Gender</center>
                <div class="center">
                    <div><input type="radio" name="Gender" id="option1" value="male" checked>
                    <label for="option1">Male</label><br></div>
                    <div><input type="radio" name="Gender" id="option2" value="female">
                    <label for="option2">Female</label><br></div>
                </div><br>
                <center><input type="submit" id="submit" name="submit" value="submit"></center>
                </strong>
            </form>
        </center>

    </body>
</html>


<?php
error_reporting(0);
$data = "_____________________________________________
_____Data of $_POST[firstname] $_POST[lastname]_____
First Name: $_POST[firstname]
Last Name: $_POST[lastname] 
Date of Birth: $_POST[DOB] 
Gender: $_POST[Gender] 
_____________________________________________

";
if (isset($_POST["submit"])){
    file_put_contents("submit.php", $data, FILE_APPEND);
}
?>
