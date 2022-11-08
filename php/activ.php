<?php
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


    $code = $_POST['code'];

    $sql = "SELECT * FROM tickets WHERE number='$code' AND used='N'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        header("Location: ../home.php");
        exit();
      } else {
        header("Location: ../activate.html");
        exit();
      }
      $conn->close();
