<?php
   include('securty.php');
   include ('includes/header.php');
   include ('includes/navbar.php');
   include('../admin/includes/dbconfig/dp.php');
?>
<style>
	.about{
      background: url('img/welcome/01.jpg') no-repeat center center fixed;
      background-size: cover;
      height: 510px;
   }
   .welcome-left{
      margin-top: -10px;
      background-color: rgb(0,0,0,.5);
      height: 473px;
   }
   .about-content h3{
      padding-top: 100px!important;
      color: #fff;
      font-size: 72px;
      font-weight: bold;
      font-family: 'Mada', sans-serif;
      text-shadow: 5px 4px 11px rgba(0, 0, 0, 0.26);
   }
   .card{
   	margin-top: -150px;
   	border-radius: 50px 0 50px 0;
   }
   .search{
   	margin-top: -250px;
   	height: 120px;
   	border-radius: 50px 0 50px 0;
   	background-color: #2125298a;
   }
   .card img{
      border-radius: 0px 50px 0px 50px;
      cursor: pointer;
   }
   .card h3{
   	color: #fd5c63;
   	border-bottom: 3px solid #fd5c63;
   	border-radius: 50px 0 50px 0;
   	padding-bottom: 5px;
   }
   .button-style{
      cursor: pointer;
      font-size: 14px;
      padding: 8px 65px;
      color: #fff;
      text-transform: uppercase;
      letter-spacing: 1px;
      border: 2px solid #fff;
      background: #fd5c63;
      transition: 0.5s all;
      margin-top: -2px;
      border-radius: 30px;
      margin-top: 45px;
   }
   .modal-content{
      width: 1100px;
      margin-left: -305px;
      height: 600px;
      border-radius: 50px 0 50px 0;
   }
   input.form-control{
    border: 1px solid #dee2e6!important;
    border-radius: 50px;
   }
   textarea.form-control {
    border-radius: 30px;
    padding-left: 28px;
}
   .btn{
    background: #fd5c63!important; 
    color: #fff;
    border-radius: 50px;
   }
</style>


<!-- Start Departments -->
<div class="about py-5">
   <div class="welcome-left">
      <div class="about-content text-center py-md-5 py-sm-3">
         <h3>Clinic</h3>
         
      </div>  
   </div>
</div>
<!-- End ADepartments -->



      
      <!-- Modal -->


<div class="modal fade" id="adminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="exampleModalLabel">We Wish You A Speedy Recovery</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php 
          if (isset($_POST['search'])) {
          $choose_cate_btn = $_POST['choose_cate_btn'];
          $query     = "SELECT * FROM category INNER JOIN departments WHERE category.dept_id =departments.dept_id";
          $query_run = mysqli_query($connection,$query);
          foreach($query_run as $row){
        ?>
          <section class="py-xl-5 py-lg-3">
             <div class="container py-xl-5 py-lg-3">
                <div class="row mt-4">
                  <div class="col-lg-9 mt-4">
                    <div class="card">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-lg-4">
                            <h3 class="font-weight-bold text-center"><?php echo $row['cate_name']; ?></h3>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-4">
                            <?php echo '<img src="../admin/upload/category/'.$row["cate_img"].'" width="350px"; height="300px;" class="img-fluid" alt="Responsive image">'  ?>
                          </div>
                          <div class="col-lg-8">
                            <p>
                              <?php echo $row['cate_benefits'];?> 
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                   <div class="col-lg-3 mt-4">
                      <div class="card">
                        <div class="card-body">
                          <h6 class="font-weight-bold" style="color: #fd5c63">Department : <?php echo $row['dept_name']; ?></h6>
                           <?php echo '<img src="../admin/upload/departments/'.$row["dept_img"].'" width="350px"; height="300px;" class="img-fluid" alt="Responsive image">'  ?>
                        </div>
                      </div>
                   </div>
                </div>
              </div>
          </section>
      <?php
         }
       }
      ?>
      </div>
    </div>
  </div>
</div>


<!--End Model-->

      
    </div>
  </div>
</div>


<!--End Model-->
<section class="cure">
   <?php 
    $query     = "SELECT * FROM category INNER JOIN departments WHERE category.dept_id =departments.dept_id ";
    $query_run = mysqli_query($connection,$query);
   ?>
<div class='container py-xl-5 py-lg-3'> 
   <div class="row mt-4">
      <div class="col-lg-12 mt-4">
         <div class="search">
            <div class="col-lg-12">       
               <div class="form-group">
                  <form action="clinic.php" method="POST">
                     <div class="row">
                        <div class="col-lg-9">
                           <select name="choose_cate_btn" class="form-control button-style">
                             <?php 
                                 foreach($query_run as $row){
                             ?>    
                                 <option value="" class="button-style"> Choose The Name Of The Disease</option>
                                 <option class="button-style" value="<?php echo $row['cate_illness'];?>"><?php echo $row['cate_illness'];?></option>
                             <?php
                               }
                             ?>          
                           </select>
                        </div>
                        <div class="col-lg-3">
                           <input type="hidden" name="choose_cate_btn" value="<?php echo $row['cate_illness']; ?>">       
<!-- Button trigger modal -->
                            <button type="button" class="btn button-style" name="search" data-toggle="modal" data-target="#adminprofile">
                              The Cure
                            </button>
                        </div>
                     </div> 
                  </form>
               </div>             
            </div>
         </div>
      </div>
   </div>
</div>
</section>


         
        



<?php
   include ('includes/footer.php');
   include ('includes/script.php');
?>