<?php
include('database/dbconnection.php');
?>

        <?php

            //1.Get the id of Seleted Admin

            $id = $_POST['id'];

            //2. Create SQL Query to Get the Details

            $sql = "SELECT * FROM users WHERE id=$id"; 
            $res =mysqli_query($conn,$sql);

            if($res==true)
            {
                $count = mysqli_num_rows($res);
                if($count==1)
                {
                    $row = mysqli_fetch_assoc($res);

                    $name = $row['name'];
                    $email = $row['email'];
                    $phone = $row['phone'];
                   
                }
                else
                {
                    header('location:manage-admin.php');
                }
            }
        ?>

<?php

            if(isset($_POST['#save']))
            {
                //Get all the values fron form to  update

                $id = $_POST['id'];
                $name = $_POST['name'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];

                // Create a sql query to update Admin

                $sql = "UPDATE users SET name ='$name',email='$email',phone='$phone' WHERE id=$id";

                $results = mysqli_query($conn,$sql);
                
            }

?>


<?php
include('database/footer.php');
?>