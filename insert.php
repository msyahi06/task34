<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "task34";

    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $message = $_REQUEST['message'];
    $sql = "INSERT INTO contact VALUES('', '$name', '$email', '$message')";
    if (mysqli_query($conn, $sql)) {
        echo "successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    
    //close conn
    mysqli_close($conn);
?>

