<!-- featch all category -->
<?php 
$query     = "SELECT * FROM category INNER JOIN departments WHERE category.dept_id =departments.dept_id ";
$query_run = mysqli_query($connection,$query);

if(mysqli_num_rows($query_run) > 0){
    while( $row = mysqli_fetch_assoc($query_run)){  
        

?>
<div class="container py-xl-5 py-lg-3">
  <div class="row mt-4">
    <div class="col-lg-12 mt-4">
      <div class="card">
        <div class="card-body">
          <div class="col-lg-12">       
            <div class="form-group">
              <form action="departments.php" method="POST">
                <div class="row">
                  <div class="col-lg-10">
                    <select name="choose_cate_btn" class="form-control">
                    <option value="">Choose <?php echo $row['dept_name']; ?> Name</option>
                    <?php 
                        foreach($query_run as $row){
                    ?>    
                        <option value="<?php echo $row['cate_name'];?>"><?php echo $row['cate_name'];?></option>
                    <?php
                      }
                    ?>          
                </select>
                  </div>
                  <div class="col-lg-2">
                    <button class="btn" name="search">Search</button>
                  </div>
                </div>
                
              </form>
           </div>             
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php 
  if (isset($_POST['search'])) {
  $choose_cate_btn = $_POST['choose_cate_btn'];
  $query     = "SELECT * FROM category INNER JOIN departments WHERE category.dept_id =departments.dept_id ";
  $query_run = mysqli_query($connection,$query);
     foreach($query_run as $row){{
?>


 <?php  
}
}
?>

<?php
      }
    }            
else{
        echo '<p class="text-white text-center bg-gradient-danger">No category Found</p>';
    }
?> 