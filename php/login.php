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


    $email = $_POST['email'];
    $pwd = $_POST['pwd'];

    $sql = "SELECT * FROM users WHERE email='$email' AND pwd='$pwd'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            header("Location: ../activate.html");
            exit();
        }
      } else {
        header("Location: ../index.html");
        exit();
      }
      $conn->close();



