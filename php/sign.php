<?php
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $gen = $_POST['exampleRadios'];
    $day = $_POST['birthdayDay'];
    $month = $_POST['birthdayMonth'];
    $year = $_POST['birthdayYear'];
    $date = "$year-$month-$day";

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "database";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO users (fname, lname, email, pwd, gen, date) VALUES ('$fname', '$lname', '$email', '$pwd', '$gen', '$date')";

    if ($conn->query($sql) === TRUE) {
    header("Location: ../index.html");
    exit();
    // echo "New record created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
