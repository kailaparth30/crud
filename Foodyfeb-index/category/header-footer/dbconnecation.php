<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "foodyfeb";

    $conn = mysqli_connect($servername,$username,$password,$database);

    if(!$conn)
    {
        die("Failed Connecation".mysqli_connect_error());
    }
?>