<?php 
 include('securty.php');
 include('includes/header.php');
 include('includes/navbar.php');
 include('includes/topbar.php');
 include('includes/dbconfig/dp.php');
?>

<?php
 if(isset($_POST['dept_list_editbtn'])){
     $dept_list_edit_id = $_POST['dept_list_edit_id'];
     $query     = "SELECT * FROM dep_category_list WHERE id=$dept_list_edit_id";
     $query_run = mysqli_query($connection,$query);
     foreach( $query_run as $row){
?>

<div class='container-fluid'>
         <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h3 class="m-0 font-weight-bold text-primary">Edit Depart List Name OF: <?php echo $row['name']; ?> </h6>
        </div>
        <div class="card-body">
            <form action="code.php" method='POST' enctype= "multipart/form-data">
                <input type="hidden" name="dept_list_update_id" value=" <?php echo $row['id']; ?>">
                <?php
                $query = " SELECT * FROM dept_category";
                $query_run = mysqli_query($connection,$query);
                if(mysqli_num_rows($query_run)>0){
                ?>
                <div class="form-group">
                    <label> Category Name</label> 
                    <select name="dept_cate_update_id" id="" class="form-control" required="">
                        <option value="">Choose Department Category Name</option>
                        <?php 
                            foreach($query_run as $row_dept){
                        ?>
                          <option value="<?php echo $row_dept['id'];?>"><?php echo $row_dept['dept_name'];?></option>
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
                    <input type="text" class="form-control" name='dept_list_update_name' value="<?php echo $row['name'];?>">
                </div>
                <div class="form-group">
                    <label>List Description</label>
                    <input type="text" class="form-control" name='dept_list_update_desc'  value="<?php echo $row['description'];?>">
                </div>
                <div class="form-group">
                    <label>Section</label>
                    <input type="text" class="form-control" name='dept_list_update_section' value="<?php echo $row['section'];?>">
                </div>
                <div class="form-group">
                    <a href="departments_lists.php" class="btn btn-outline-danger"> Cancel</a>
                    <button  type="submit" name="dept_list_updatbtn" class="btn btn-outline-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>



<?php
     }
 }

?>


<?php 
 include('includes/scripts.php');
 include('includes/footer.php');
?>