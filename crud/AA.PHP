<?php
include('database/dbconnection.php');
?>


<?php

if($_POST["update_id"] != '')
            {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];

                $sql = "UPDATE users SET name ='$name',email='$email',phone='$phone' WHERE id=$id";

                $results = mysqli_query($conn,$sql);
                
                if($results==true){
                    header('location:manage-admin.php');
                }
                else{
                    header('location:manage-admin.php');
                }
            }

?>

<?php
include('database/dbconnection.php');
?>


<?php

if($_POST["update_id"] != '')
            {
               
                $sql = "UPDATE users SET name ='".$_POST["name"]."', email ='".$_POST["email"]."', phone ='".$_POST["phone"]."', WHERE update_id ='".$_POST["update_id"]."'";

                $results = mysqli_query($conn,$sql);
            }
        else{
              $sql ="INSERT INTO users (name,email,phone) VALUES ('" .$_POST["name"]."','".$_POST["email"]."','draft')";
        }

?>