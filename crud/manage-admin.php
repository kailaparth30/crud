<?php
  include('database/dbconnection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
  <!-- The Modal -->
  <div class="modal" id="SampleModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">UPDATE PAGE</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

    
        <form action="manage-admin.php" method="POST">
        <div class="modal-body">
        <input type="hidden" name="update_id" id="update_id">

        <form>
          <div class="form-group">
            <label for="name" class="col-form-label">name:</label>
            <input type="text" class="form-control" id="name">
          </div>

          <div class="form-group">
            <label for="email"  class="col-form-label">email:</label>
            <input type="text" class="form-control" id="email">
          </div>

          <div class="form-group"> 
            <label for="phone" class="col-form-label">phone:</label>
            <input type="text" class="form-control" id="phone">
          </div>
        </div>
     
        <div class="modal-footer">
          <button type="button" class="btn btn-danger " id="save" data-dismiss="modal">save</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
     </form>
      </div>
    </div>
  </div>
  
</div>

<!-- ADD POPUP -->


</body>

<script>

  $(document).ready(function () {
    $('.update-btn').click(function () {
      $('#SampleModal').modal('show');
       var id = $(this).data('id');
          
            $.ajax({
            type: "POST",
            url: "update-ajax.php",
            data: {id: id,},
            dataType: "json",
            success: function (response) {
              
              $('#name').val(response.name);
              $('#email').val(response.email);
              $('#phone').val(response.phone);
             }
             
            });
          });
        });
        
        var id = $(this).data('id');
          
          $.ajax({
          type: "POST",
          url: "save-ajax.php",
          success: function (respone) {
            $('name').val(response.name);
          }
          });
        
  
</script>
</html>

        <!--Main Contect Secation Starts-->

        <div class="main-Contect">
        <div class="wrapper">
                <!-- Button to Add Admin -->

                <a href="add-admin.php" class="btn-primary">Add Admin</a>
                <h1> Manage Users</h1>
    
                <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
                <th>S.N.</th>
                <th>Name</th>
                <th>Email id</th>
                <th>phone no</th>
               
                <th><center>Update</center></th>
                <th><center>Delete</center></th>

        </thead>
        <tbody class="studentdata">

        </tbody>
        
        <?php

        //Query to get all data

        $sql="SELECT * FROM users";   
        $fetchdata = mysqli_query($conn,$sql);
        
        if($fetchdata==true){
                
        $numofrow = mysqli_num_rows($fetchdata);

        //Funcation to get all the roes in database

        if($numofrow>0){
                while($rows=mysqli_fetch_assoc($fetchdata)){
                        $id = $rows['id'];
                        $name = $rows['name'];
                        $email = $rows['email'];
                        $phone = $rows['phone'];

                ?>
                <tr>
                        <td><?php echo $id;?></td>
                        <td><?php echo $name; ?></td>
                        <td><?php echo $email; ?></td>
                        <td><?php echo $phone; ?></td>
                        <td>
                          
                        <center>
                          <button class="btn btn-secondary update-btn" data-id="<?php echo $id;?>">Update</button>
                        </center>

                        </td>
                        <td>
  
                        <center>
                          <a href="<?php ?>delete-admin.php?id=<?php echo $id; ?>" class=" btn btn-danger">Delete</a>
                        </center>
                        
                        </td>
                </tr>
                <?php
                                }
                        }
                }
                
                ?>
                        </tr>
        </tbody>
        <tfoot>
                <tr>
                <th>S.N.</th>
                <th>Name</th>
                <th>email id</th>
                <th>phone no</th>
                <th>Update</th>
                <th>Delete</th>
                </tr>
        </tfoot>
    </table>
                <div class="clearfix">

                </div>

            </div>
        </div>
        
     
        
        <!--Main Contect Secation Ends-->

<?php
include('database/footer.php');
?>
