<?php 
 include('securty.php');
 include('includes/header.php');
 include('includes/navbar.php');
 include('includes/topbar.php');
 include('includes/dbconfig/dp.php');
?>

<?php 

if(isset($_POST['gallery_editbtn'])){
    $gallery_id = $_POST['gallery_id'];
    $query = "SELECT * FROM home WHERE id='$gallery_id'";
    $query_run = mysqli_query($connection,$query);

    foreach($query_run as $row){

?>    

<div class='container-fluid'>
         <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h3 class="m-0 font-weight-bold text-primary">Edit Gallery Name OF: <?php echo $row['name']; ?> </h3>
        </div>

        <div class="card-body">

      <form action="code.php" method='POST' enctype= "multipart/form-data">
      <input type="hidden" name="updat_gallery_id" value="<?php echo $row['id'];?>">
      <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name='updat_gallery_name' placeholder="Enter Name" value="<?php echo $row['name'];?>">
            </div>
            <div class="form-group">
                <label>Description</label>
                <input type="text" class="form-control" name='updat_gallery_description' placeholder="Enter Description" value="<?php echo $row['description'];?>">
            </div>
            <div class="form-group">
                <label>Upload File</label>
                <input type="file" class="form-control" name='updat_gallery_image' value="<?php echo $row['image'];?>" required="">
            </div>
            <div class="form-group">
                <a href="home.php" class="btn btn-outline-danger"> Cancel</a>
                <button  type="submit" name="gallery_updatbtn" class="btn btn-outline-primary">Update</button>
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