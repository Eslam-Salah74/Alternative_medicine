<?php 
 include('securty.php');
 include('includes/header.php');
 include('includes/navbar.php');
 include('includes/topbar.php');
 include('includes/dbconfig/dp.php');
?>

<!-- Modal -->
<div class="modal fade" id="adminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Register Admin Profile</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form action="code.php" method='POST'>
            <div class="form-group">
                <label>User Name</label>
                <input type="text" class="form-control" name='username' placeholder="Enter UserName">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name='email' placeholder="Enter Email">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name='password' placeholder="Enter Password">
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" class="form-control" name='confirmpassword' placeholder="Confirm Password">
            </div>
            <div class="form-group">
                <input type="hidden" class="form-control" name='usertype'value="Admin">
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name='registerbtn' class="btn btn-outline-primary">Save</button>
            </div>
        </form>
        
      </div>
      
    </div>
  </div>
</div>


<div class='container-fluid'>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Admin Prpfile
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#adminprofile">
                   Add Admin Prpfile
                </button>
            </h6>
        </div>

        <div class="card-body">
            <?php
            
               if(isset($_SESSION['success']) && $_SESSION['success'] !=''){
                   echo '<h2 class="bg-success text-white">'.$_SESSION['success'].'</h2>';
                   unset($_SESSION['success']);
               }

              
               if(isset($_SESSION['status']) && $_SESSION['status'] !=''){
                   echo '<h2 class="bg-danger text-white">'.$_SESSION['status'].'</h2>';
                   unset($_SESSION['status']);
               }
            
            ?>
            <div class="table-responsive"> 

            <?php 
                $query     = "SELECT * FROM register";
                $query_run = mysqli_query($connection , $query);
            ?>

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="bg-primary text-white">
                        <tr class="text-center">
                        <th scope="col">ID</th>
                        <th scope="col">UserName</th>
                        <th scope="col">Email</th>
                        <th scope="col">Password</th>
                        <th scope="col">User Type</th>
                        <th scope="col"> Edit </th> 
                        <th scope="col"> Delet </th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                    
                    if(mysqli_num_rows($query_run) > 0 ){
                        while($row = mysqli_fetch_assoc($query_run)){
                            ?>
                            <tr class="text-center">
                            <th scope="row"><?php echo $row['id']; ?></th>
                            <td><?php echo $row['username']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['password']; ?></td>
                            <td><?php echo $row['usertype']; ?></td>
                            <td>
                                <form action="register_edit.php" method="POST">
                                    <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                                    <button type="submit" name="editbtn" class="btn btn-outline-info">Edit</button>
                                </form>
                            </td>
                            <td> 
                                <form action="code.php" method="POST">
                                    <input type="hidden" name="delet_id" value="<?php echo $row['id']; ?>">
                                    <button type="submit" name="deletbtn" class="btn btn-outline-danger">Delet</button> 
                                </form>
                            </td>
                            </tr>
                         <?php
                        }
                    }else{
                        echo "No Record Found";
                    }
                    ?>    
                    </tbody>
                    </table>
            </div>  
            <!--<nav aria-label="...">
            <ul class="pagination">
                <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1" aria-disabled="true" >Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item active" aria-current="page">
                <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>  -->    
        </div>
        
    </div>
</div>



<?php 
 include('includes/scripts.php');
 include('includes/footer.php');
?>