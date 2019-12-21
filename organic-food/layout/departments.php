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

      background-color: rgb(0,0,0,.5);
      height: 462px;
   }
   .about-content h3{
      padding-top: 100px!important;
      color: #fff;
      font-size: 72px;
      font-weight: bold;
      font-family: 'Mada', sans-serif;
      text-shadow: 5px 4px 11px rgba(0, 0, 0, 0.26);
   }

   h3.title{
      font-size: 40px;
      color: #fd5c63;
      letter-spacing: 1px;
   }
 p.dept_name{
     	font-size: 40px;
      color: #fd5c63;
      display: inline-block;
      letter-spacing: 1px;
     }
   h3.title span{
      display: block;
      font-size: 22px;
      letter-spacing: 3px;
      line-height: 2;
      color: #333;
   }
   .card{
   	margin-top: -150px;
   	border-radius: 50px 0 50px 0;
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
      padding: 12px 25px;
      color: #fff;
      text-transform: uppercase;
      letter-spacing: 1px;
      border: 2px solid #fff;
      background: #fd5c63;
      transition: 0.5s all;
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
         <h3>Departments</h3>
         
      </div>  
   </div>
</div>
<!-- End ADepartments -->

<?php
 if(isset($_POST['dept_btn'])){
     $departments_id  = $_POST['departments_id'];  
     $query     = "SELECT * FROM departments WHERE dept_id = $departments_id";
     $query_run = mysqli_query($connection,$query);
     foreach($query_run as $row){
?>
<section class="py-5 team-w3ls">
   <div class="container">
      <h3 class="title pt-sm-5 mb-5 text-wh font-weight-bold">
         Our Departments
         <span>You Are Here In The Department / <p class="dept_name"><?php echo $row['dept_name']; ?></p> </span>
      </h3>
    </div>
</section>
<section>
   <div class="container py-xl-5 py-lg-3">

           <div class="row mt-4">

              <div class="col-lg-10 mt-4">
                <div class="card">
                   <div class="card-body">
                    <div class="row">
                      <div class="col-lg-4">
                        <h3 class="font-weight-bold text-center"><?php echo $row['dept_name']; ?></h3>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-4">
                        <?php echo '<img src="../admin/upload/departments/'.$row["dept_img"].'" width="350px"; height="300px;" class="img-fluid" alt="Responsive image">'  ?>
                      </div>
                      <div class="col-lg-8">
                        <p>
                          <?php echo $row['dept_desc'];?> 
                        </p>
                      </div>
                      
                    </div>
                    <form action="category.php" method="POST">
                      <input type="hidden" name="all_cate" value="<?php echo $row['dept_id']; ?>">
                       <a href="category.php" class="btn button-style mt-sm-5 mt-4"> 
                       Show Benefits Of All <?php echo $row['dept_name']; ?>
                    </form>
                     
                </a> 
                   </div>

                </div>
                
               </div>
               <div class="col-lg-2 mt-4">
                  <div class="card">
                    <div class="card-body">
                      <h3 class="font-weight-bold text-center"><?php echo $row['dept_name']; ?></h3>
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



<?php
   include ('includes/footer.php');
   include ('includes/script.php');
?>