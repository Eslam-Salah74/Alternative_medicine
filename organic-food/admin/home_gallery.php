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
        <h5 class="modal-title" id="exampleModalLabel">Add Galleries Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <form action="code.php" method='POST' enctype= "multipart/form-data">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name='gallery_name' placeholder="Enter Gallery Name" required="">
            </div>
            <div class="form-group">
                <label>Description</label>
                

                <input id="x" type="hidden" name='gallery_description'>
                <trix-editor input="x" placeholder="Enter Gallery Description" required=""></trix-editor>
            </div>
            <div class="form-group">
                <label>Upload File</label>
                <input type="file" class="form-control" name='gallery_image' required="">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name='save_gallery' class="btn btn-outline-primary">Save</button>
            </div>
        </form>

      </div>
    </div>
  </div>
</div>      


<div class='container-fluid'>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Gallery Area
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#adminprofile">
                   Add Galleries
                </button>
            </h6>
        </div>

        <div class="card-body">
        <!-- Start Session -->
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
        <!-- End Session --> 
            <div class="table-responsive"> 
            <!-- Start Featch Data From Databas -->
                <?php 
                    $query = "SELECT * FROM home";
                    $query_run = mysqli_query($connection , $query);
                ?>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="bg-primary text-white">
                        <tr class="text-center">
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Image</th>
                        <th scope="col"> Edit </th> 
                        <th scope="col"> Delet </th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                        if(mysqli_num_rows($query_run) > 0){
                            while($row = mysqli_fetch_assoc($query_run)){
                    ?>
                    
                        <tr>
                        <th  class="text-center" scope="row"><?php echo $row['id'];  ?></th>
                        <td class="text-center"><?php echo $row['name'];  ?></td>
                        <td><?php echo $row['description'];  ?></td>
                        <td class="text-center"><?php echo '<img src="upload/home/gallery/'.$row["image"].'" width="40px"; height="40px" class="img-fluid" alt="Responsive image">'  ?></td>
                        <td class="text-center">
                            <form action="home_gallery_edit.php" method="POST">
                                <input type="hidden" name="gallery_id" value="<?php echo $row['id'];  ?>" >
                                <button type="submit" name="gallery_editbtn" class="btn btn-outline-info">Edit</button>
                            </form>    
                        </td>
                        <td class="text-center"> 
                            <form action="code.php" method="POST">
                                <input type="hidden" name="gallery_id" value="<?php echo $row['id'];  ?>" >
                                <button type="submit" name="gallery_deletbtn" class="btn btn-outline-danger">Delet</button> 
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



<?php 
 include('includes/scripts.php');
 include('includes/footer.php');
?>