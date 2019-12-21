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
        <h5 class="modal-title" id="exampleModalLabel">Model About Us The Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form action="code.php" method='POST'>
            <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control" name='title' placeholder="Enter Title">
            </div>
            <div class="form-group">
                <label>Sub Title</label>
                <input type="text" class="form-control" name='subtitle' placeholder="Enter Sub Title">
            </div>
            <div class="form-group">
                <label>Description</label>
                <textarea type="text" class="form-control" name='description' placeholder="Enter Password">
            </div>
            <div class="form-group">
                <label>Links</label>
                <input type="password" class="form-control" name='links' placeholder="Enter Links">
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
            <h6 class="m-0 font-weight-bold text-primary">ABOUT US
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#adminprofile">
                    Add The Information
                </button>
            </h6>
        </div>

        <div class="card-body">
            <?php
            
               if(isset($_SESSION['success']) && $_SESSION['success'] !=''){
                   echo '<h2 class="bg-primary text-white">'.$_SESSION['success'].'</h2>';
                   unset($_SESSION['success']);
               }

              
               if(isset($_SESSION['status']) && $_SESSION['status'] !=''){
                   echo '<h2 class="bg-danger text-white">'.$_SESSION['status'].'</h2>';
                   unset($_SESSION['status']);
               }
            
            ?>

            <?php 
                //$connection = mysqli_connect('localhost','root','','adminpanel');
                $query     = "SELECT * FROM register";
                $query_run = mysqli_query($connection , $query);
            
            ?>
            <div class="table-responsive">    
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="bg-primary text-white">
                        <tr class="text-center">
                        <th scope="col">ID</th>
                        <th scope="col">Title</th>
                        <th scope="col">Sub Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Links</th>
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
        </div>
        
    </div>
</div>



<p>eslam</p>




<?php 
 include('includes/scripts.php');
 include('includes/footer.php');
 

?>