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
    $query = "SELECT * FROM aboutus WHERE id='$id'";
    $query_run = mysqli_query($connection , $query);
    foreach($query_run as $row){
        
        ?>
        
        <div class='container-fluid'>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h3 class="m-0 font-weight-bold text-primary">Edit About Us Information OF: <?php echo $row['title']; ?></h3>
        </div>
        <div class="modal-body">
      <form action="code.php" method='POST'>

        <input type="hidden" name="about_update_id" value=" <?php echo $row['id']; ?>">
            <div class="form-group">
            <label>Title</label>
                <input type="text" class="form-control" name='about_update_title' placeholder="Enter Title" value="<?php echo $row['title']; ?>">
            </div>
            <div class="form-group">
            <label>Sub Title</label>
                <input type="text" class="form-control" name='about_update_subtitle' placeholder="Enter Sub Title" value="<?php echo $row['subtitle']; ?>">
            </div>
            <div class="form-group">
            <label>Description</label>
                <textarea type="text" class="form-control" name='about_update_description' placeholder="Enter Description" value="<?php echo $row['description']; ?>"></textarea>
            </div>
            <div class="form-group">
                <label>Links</label>
                <input type="text" class="form-control" name='about_update_links' placeholder="Enter Links" value="<?php echo $row['links']; ?>">
            </div>
            <div class="form-group">
                <a href="aboutus.php" class="btn btn-outline-danger"> Cancel</a>
                <button  type="submit" name="about_updatbtn" class="btn btn-outline-primary">Update</button>
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