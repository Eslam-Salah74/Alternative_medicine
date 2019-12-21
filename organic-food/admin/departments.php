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
        <h5 class="modal-title" id="exampleModalLabel">Add Website Departments</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form action="code.php" method='POST' enctype= "multipart/form-data">
            <div class="form-group">
                <label>Depart Name</label>
                <input type="text" class="form-control" name='dept_name' placeholder="Enter Depart Name">
            </div>
            <div class="form-group">
                <label>Depart Description</label>
                <textarea type="text" class="form-control" name='dept_desc' placeholder="Enter Depart Description" ></textarea>
                <!--<input id="x" type="hidden" name='dept_desc'>
                <trix-editor input="x" placeholder="Enter Depart Description"></trix-editor>-->
            </div>

            <div class="form-group">
                <label>Depart Image</label>
                <input type="file" class="form-control" name='dept_img' placeholder="Enter Depart Image">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name='departments' class="btn btn-outline-primary">Save</button>
            </div>
        </form>
        
      </div>
      
    </div>
  </div>
</div>

<div class='container-fluid'>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Website Departments 
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#adminprofile">
                   Add Departments
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
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <?php 
                $query     = "SELECT * FROM departments";
                $query_run = mysqli_query($connection,$query);
                
            ?>
                    <thead class="bg-primary text-white">
                        <tr class="text-center" >
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Image</th>
                        <th scope="col"> Edit </th> 
                        <th scope="col"> Delet </th>
                        </tr>
                    </thead>
            <?php 
                
                if(mysqli_num_rows($query_run) > 0){
                    while( $row = mysqli_fetch_assoc($query_run)){       
            ?>
                    <tbody>
                    <tr>
                            <th class="text-center" scope="row"><?php echo $row['dept_id'];?> </th>
                            <td class="text-center"><?php echo $row['dept_name'];?> </td>
                            <td><?php echo $row['dept_desc'];?></td>
                            <td class="text-center">
                                <?php echo '<img src="upload/departments/'.$row["dept_img"].'" width="50px"; height="50px;" class="img-fluid" alt="Responsive image">'  ?>
                            </td>
                            <td class="text-center">
                                <form action="departments_edit.php" method="POST">
                                    <input type="hidden" name="dept_edit_id" value="<?php echo $row['dept_id'];?>">
                                    <button type="submit" name="dept_editbtn" class="btn btn-outline-info">Edit</button>
                                </form>
                            </td>
                            <td class="text-center"> 
                                <form action="code.php" method="POST">
                                    <input type="hidden" name="dept_delet_id" value="<?php echo $row['dept_id'];?>">
                                    <button type="submit" name="dept_deletbtn" class="btn btn-outline-danger">Delet</button> 
                                </form>
                            </td>
                            </tr>
            <?php
                    }
                }            
            else{
                    echo "No Record Found";
                }
            
            
            ?>        
                 </tbody>
                </table>   
            </div> 
        </div>
    </div>
</div>    



<?php 
 include('includes/scripts.php');
 include('includes/footer.php');
?>