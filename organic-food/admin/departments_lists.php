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
        <h5 class="modal-title" id="exampleModalLabel">Add Acadimac Departments</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form action="code.php" method='POST' enctype= "multipart/form-data">
           <?php
              $query = " SELECT * FROM dept_category";
              $query_run = mysqli_query($connection,$query);
              if(mysqli_num_rows($query_run)>0){
            ?>
              <div class="form-group">
                <label> Category Name</label> 
                <select name="dept_cate_id" id="" class="form-control">
                    <option value="">Choose Department Category Name</option>
                    <?php 
                        foreach($query_run as $row){
                    ?>
                       <option value="<?php echo $row['id'];?>"><?php echo $row['dept_name'];?></option>
                    <?php
                      }
                    ?>          
                </select>
             </div>  
            <?php
              }else{
                echo '<p class="text-white text-center bg-gradient-danger">No Data Avalibale</p>';
              }
            ?> 
 
            <div class="form-group">
                <label>List Name</label>
                <input type="text" class="form-control" name='dept_list_name' placeholder="Enter List Name">
            </div>
            <div class="form-group">
                <label>List Description</label>
                <input type="text" class="form-control" name='dept_list_desc' placeholder="Enter List Description">
            </div>
            <div class="form-group">
                <label>Section</label>
                <input type="text" class="form-control" name='dept_list_section' placeholder="Enter Section">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name='departments_list' class="btn btn-outline-primary">Save</button>
            </div>
        </form>
        
      </div>
      
    </div>
  </div>
</div>

<div class='container-fluid'>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Acadimac Departments (Cattegory Lists)
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#adminprofile">
                   Add Departments List
                </button>
            </h6>
        </div>

        <div class="card-body">
            <?php
            
               if(isset($_SESSION['success']) && $_SESSION['success'] !=''){
                   echo '<h2 class="bg-gradient-success text-white">'.$_SESSION['success'].'</h2>';
                   unset($_SESSION['success']);
               }

              
               if(isset($_SESSION['status']) && $_SESSION['status'] !=''){
                   echo '<h2 class="bg-gradient-danger text-center text-white">'.$_SESSION['status'].'</h2>';
                   unset($_SESSION['status']);
               }
            
            ?>
            <div class="table-responsive"> 
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <?php 
                $query     = "SELECT * FROM dep_category_list";
                $query_run = mysqli_query($connection,$query);
                
            ?>
                    <thead class="bg-primary text-white">
                        <tr class="text-center">
                        <th scope="col">ID</th>
                        <th scope="col">Dept-Cate-ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Section</th>
                        <th scope="col"> Edit </th> 
                        <th scope="col"> Delet </th>
                        </tr>
                    </thead>
            <?php 
                
                if(mysqli_num_rows($query_run) > 0){
                    while( $row = mysqli_fetch_assoc($query_run)){  
                        $dept_category_id = $row['dept_category_id'];
                        $query_dept_category = "SELECT * FROM dept_category WHERE id='$dept_category_id'";
                        $query_run_dept_category = mysqli_query($connection,$query_dept_category);

            ?>
                    <tbody>
                    <tr class="text-center">
                            <th scope="row"><?php echo $row['id'];?> </th>
                            <th scope="row">
                                <?php 
                                    foreach($query_run_dept_category as $row_dept_category){
                                      echo  $row_dept_category['dept_name'];
                                    }
                                ?> 
                            </td>
                            <td><?php echo $row['name'];?></td>
                            <td><?php echo $row['description'];?></td>
                            <td><?php echo $row["section"];?></td>
                            <td>
                                <form action="departments_lists_edit.php" method="POST">
                                    <input type="hidden" name="dept_list_edit_id" value="<?php echo $row['id'];?>">
                                    <button type="submit" name="dept_list_editbtn" class="btn btn-outline-info">Edit</button>
                                </form>
                            </td>
                            <td> 
                                <form action="code.php" method="POST">
                                    <input type="hidden" name="dept_list_delet_id" value="<?php echo $row['id'];?>">
                                    <button type="submit" name="dept_list_deletbtn" class="btn btn-outline-danger">Delet</button> 
                                </form>
                            </td>
                            </tr>
            <?php
                    }
                }            
            else{
                    echo '<p class="text-white text-center bg-gradient-danger">No Record Found</p>';
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