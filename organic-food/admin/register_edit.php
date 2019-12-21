<?php 
 include('securty.php');
 include('includes/header.php');
 include('includes/navbar.php');
 include('includes/topbar.php');
 include('includes/dbconfig/dp.php');
?>

<?php
//$connection = mysqli_connect('localhost','root','','adminpanel');
if(isset($_POST['editbtn'])){
    $id = $_POST['edit_id'];
    $query = "SELECT * FROM register WHERE id='$id'";
    $query_run = mysqli_query($connection , $query);
    foreach($query_run as $row){
        
        ?>
        
        <div class='container-fluid'>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h3 class="m-0 font-weight-bold text-primary">Edit Admin Prpfile OF: <?php echo $row['username']; ?> </h6>
        </div>

        <div class="card-body">
        <form action="code.php" method='POST'>
        <input type="hidden" name="update_id" value=" <?php echo $row['id']; ?>">
            <div class="form-group">
                <label>User Name</label>
                <input type="text" class="form-control" name='updat_username' placeholder="Enter UserName" value="<?php echo $row['username']; ?>">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name='updat_email' placeholder="Enter Email" value="<?php echo $row['email']; ?>">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name='updat_password' placeholder="Enter Password" value="<?php echo $row['password']; ?>">
            </div>

            <div class="form-group">
                <label>User Type</label>
                <select name="updat_usertype" class="form-control">
                    <option value="Admin">Admin</option>
                    <option value="User">User</option>
                </select>
            </div>
            <div class="form-group">
                <a href="register.php" class="btn btn-outline-danger"> Cancel</a>
                <button  type="submit" name="updatbtn" class="btn btn-outline-primary">Update</button>
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