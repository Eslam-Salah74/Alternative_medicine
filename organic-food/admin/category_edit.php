<?php 
 include('securty.php');
 include('includes/header.php');
 include('includes/navbar.php');
 include('includes/topbar.php');
 include('includes/dbconfig/dp.php');
?>

<?php
 if(isset($_POST['category_editbtn'])){
     $category_id = $_POST['category_id'];
     $query     = "SELECT * FROM category WHERE cate_id = $category_id";
     $query_run = mysqli_query($connection,$query);
     foreach( $query_run as $row){
?>

<div class='container-fluid'>
         <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h3 class="m-0 font-weight-bold text-primary">Edit Category Name OF: <?php echo $row['cate_name']; ?> </h6>
        </div>
        <div class="card-body">
            <form action="code.php" method='POST' enctype= "multipart/form-data">
                <input type="hidden" name="category_update_id" value=" <?php echo $row['cate_id']; ?>">
                <?php
                $query = " SELECT * FROM departments";
                $query_run = mysqli_query($connection,$query);
                if(mysqli_num_rows($query_run)>0){
                ?>
                <div class="form-group">
                    <label> Department Name</label> 
                    <select name="department_update_id" id="" class="form-control" required="">
                        <option value="">Choose Department Name</option>
                        <?php 
                            foreach($query_run as $row_dept){
                        ?>
                          <option value="<?php echo $row_dept['dept_id'];?>"><?php echo $row_dept['dept_name'];?></option>
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
                    <input type="text" class="form-control" name='category_update_name' value="<?php echo $row['cate_name'];?>">
                </div>
                <div class="form-group">
                    <label>Category Benefits</label>
                    <textarea class="form-control" name='category_update_benefites' rows="10"><?php echo $row['cate_benefits']; ?></textarea>
                
                </div>
                <div class="form-group">
                    <label>Category Illness</label>
                    <textarea class="form-control" name='category_update_illness'><?php echo $row['cate_illness']; ?></textarea>
                    
                </div>
                <div class="form-group">
                    <label>Category Img</label>
                    <input type="file" class="form-control" name='category_update_img' value="<?php echo $row['cate_img'];?>">
                </div>
                <div class="form-group">
                    <a href="category.php" class="btn btn-outline-danger"> Cancel</a>
                    <button  type="submit" name="cateegory_updatbtn" class="btn btn-outline-primary">Update</button>
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