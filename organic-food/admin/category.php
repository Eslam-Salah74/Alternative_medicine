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
        <h5 class="modal-title" id="exampleModalLabel">Add Website Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form action="code.php" method='POST' enctype= "multipart/form-data">
           <?php
              $query = " SELECT * FROM departments";
              $query_run = mysqli_query($connection,$query);
              if(mysqli_num_rows($query_run)>0){
            ?>
              <div class="form-group">
                <label>Departments Name</label> 
                <select name="departments" class="form-control">
                    <option value="">Choose Department Name</option>
                    <?php 
                        foreach($query_run as $row){
                    ?>
                       <option value="<?php echo $row['dept_id'];?>"><?php echo $row['dept_name'];?></option>
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
                <label>Category Name</label>
                <input type="text" class="form-control" name='cate_name' placeholder="Enter Category Name">
            </div>
            <div class="form-group">
                <label>Category Benefits</label>
                <textarea class="form-control" name='cate_benefits' placeholder="Enter Category Illness"></textarea>
            </div>
            <div class="form-group">
                <label>Category Illness</label>
                <textarea class="form-control" name='cate_illness' placeholder="Enter Category Illness"></textarea>
            </div>
            <div class="form-group">
                <label>Category Img</label>
                <input type="file" class="form-control" name='cate_img'>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name='category' class="btn btn-outline-primary">Save</button>
            </div>
        </form>
        
      </div>
      
    </div>
  </div>
</div>

<div class='container-fluid'>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Website Cattegory 
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
                <thead class="bg-primary text-white">
                    <tr class="text-center">
                        <th scope="col">ID</th>
                        <th scope="col">Dept-Name</th>
                        <th scope="col">Name</th>
                        <th scope="col">Benefits</th>
                        <th scope="col">Illness</th>
                        <th scope="col">Image</th>
                        <th scope="col"> Edit </th>  
                        <th scope="col"> Delet </th>
                    </tr>
                </thead>
            <?php 
                $query     = "SELECT * FROM category INNER JOIN departments WHERE category.dept_id =departments.dept_id ";
                $query_run = mysqli_query($connection,$query);
                
                if(mysqli_num_rows($query_run) > 0){
                    while( $row = mysqli_fetch_assoc($query_run)){  
                        

            ?>
                    <tbody>
                    <tr>
                            <th  class="text-center" scope="row"><?php echo $row['cate_id'];?> </th>
                            <th  class="text-center" scope="row"><?php echo $row['dept_name'];?> </th>
                            <td class="text-center"><?php echo $row['cate_name'];?></td>
                            <td><?php echo $row['cate_benefits'];?></td>
                            <td><?php echo $row["cate_illness"];?></td>
                            <td class="text-center">
                                <?php echo '<img src="upload/category/'.$row["cate_img"].'" width="50px"; height="50px;" class="img-fluid" alt="Responsive image">'  ?>
                            </td>
                            <td class="text-center">
                                <form action="category_edit.php" method="POST">
                                    <input type="hidden" name="category_id" value="<?php echo $row['cate_id'];?>">
                                    <button type="submit" name="category_editbtn" class="btn btn-outline-info">Edit</button>
                                </form>
                            </td>
                            <td class="text-center"> 
                                <form action="code.php" method="POST">
                                    <input type="hidden" name="category_id" value="<?php echo $row['cate_id'];?>">
                                    <button type="submit" name="category_id_deletbtn" class="btn btn-outline-danger">Delet</button> 
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