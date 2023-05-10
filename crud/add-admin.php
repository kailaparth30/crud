<?php
include('database/dbconnection.php');
?>

<?php

//Process the value from form and Save it in Database

//Check whether the submit button is clicked or not 
$showerr=false;

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $phone=$_POST['phone'];

    $fetchsql="SELECT * FROM `users` WHERE `email`= '$email'";
    $result=mysqli_query($conn ,$fetchsql);
    $numofrom=mysqli_num_rows($result);
      if($numofrom > 0){
          $showerr="Please use another Email id";
      }
      else{
        $sql="INSERT INTO `users` (`name`,`email`, `password`,`phone`) VALUES ('$name','$email', '$password','$phone')";
        $result=mysqli_query($conn,$sql);
          if($result){
             header("Location:manage-admin.php");

             $_SESSION['add'] = "<div class='alert alert-success' role='alert'>Added Successfully. </div>";
          }
      }
  }
  
  ?>



    <div class="main-Contect">
        <div class="wrapper">
            <center><h1>ADD USER</h1></center>


   <form action="#" method="POST"> 

  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1"  placeholder="Name" name="name" required>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" required>
  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">phone</label>
    <input type="text" class="form-control" id="exampleInputEmail1"  placeholder="phone" name="phone" required>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">password</label>
    <input type="text" class="form-control" id="exampleInputEmail1"  placeholder="password" name="password" required>
  </div>


 <a href="manage-admin.php"> <button type="submit" class="btn btn-primary" name="submit">Submit</button></a>

</form>
<br>
<br>
        </div>
    </div>
        
<?php
include('database/footer.php');
?>




