<?php 
 include('securty.php');
 include('includes/header.php');
 include('includes/navbar.php');
 include('includes/topbar.php');
 include('includes/dbconfig/dp.php');
?>

<?php
 if(isset($_POST['dept_editbtn'])){
     $dept_edit_id = $_POST['dept_edit_id'];  
     $query     = "SELECT * FROM departments WHERE dept_id=$dept_edit_id";
     $query_run = mysqli_query($connection,$query);
     foreach($query_run as $row){
?>

<div class='container-fluid'>
         <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h3 class="m-0 font-weight-bold text-primary">Edit Depart Name OF: <?php echo $row['dept_name']; ?> </h6>
        </div>

        <div class="card-body">
        
        <form action="code.php" method='POST' enctype= "multipart/form-data">
            <input type="hidden" name="dept_update_id" value=" <?php echo $row['dept_id']; ?>">
            <div class="form-group">
                <label>Depart Name</label>
                <input type="text" class="form-control" name='update_dept_name' placeholder="Enter Depart Name" value="<?php echo $row['dept_name']; ?>" >
            </div>
            <div class="form-group">
                <label>Depart Description</label>
                <input id="x" type="hidden" name='update_dept_desc'>
                <trix-editor input="x" value="<?php echo $row['dept_desc']; ?>"></trix-editor>
                
            </div>
            <div class="form-group">
                <label>Depart Image</label>
                <input type="file" class="form-control" name='update_dept_img' placeholder="Enter Depart Image" required=""  value="<?php echo $row['dept_img']; ?>">
            </div>
            <div class="form-group">
                <a href="departments.php" class="btn btn-outline-danger"> Cancel</a>
                <button  type="submit" name="dept_updatbtn" class="btn btn-outline-primary">Update</button>
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