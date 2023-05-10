<?php

// database 

include("database/dbconnection.php");

    //1.get the id of Admin to be Deleted

    $id = $_GET['id'];

    //2. Create Sql query to Delete Admin

    $sql = "DELETE FROM users WHERE id=$id";
    $res = mysqli_query($conn,$sql);
    if($res==true){
        header("location:manage-admin.php");
    }
    else{
        header("location:manage-admin.php");
    }
    //3.Redirect to manage admin page with msg
?>