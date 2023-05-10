<?php
include('database/dbconnection.php');
?>

<?php

    $update_id= $_POST['id'];

    $sql= "SELECT * FROM users WHERE id = $update_id";

    $result = mysqli_query($conn, $sql) or die("sql query failed.");

    if(mysqli_num_rows($result) > 0){
        $output = mysqli_fetch_array($result);
        echo json_encode($output);
      
    }else{
        echo json_encode(array('message' => 'no record found','status' => false));
    }
    ?>