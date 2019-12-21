<?php
   include('securty.php');
   include ('includes/header.php');
   include ('includes/navbar.php');
   include('../admin/includes/dbconfig/dp.php');
?>
<style>
   .main-w3pvt{
      padding: 6em 0;
   }
   .stle-banner{
      margin-top: 4em;
   } 
   .style-banner-inner{
       margin-left: 3em;
       margin-top: 6em;
   }
   .font-weight-bold{
      font-weight: 700!important;
   }
   
   .style-banner h3{
      font-size: 50px;
      line-height: 1.5;
      text-shadow: 5px 4px 11px rgba(0, 0, 0, 0.26);
      color: #2f2f2f;
      letter-spacing: 2px;
   }
   .font-weight-normal{
      font-weight: 400px !important;
   }
   .style-banner p{
          font-weight: 400px !important;
      font-size: 15px;
      letter-spacing: 3px;
      color: #777676;
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
   .about{
      background: url('img/welcome/01.jpg') no-repeat center center fixed;
      background-size: cover;
      height: 565px;
   }
   .welcome-left{
      background-color: rgb(0,0,0,.5);
      height: 565px;
      margin-top: -50px;
   }
   .about-content h3{
      padding-top: 80px!important;
      color: #fff;
      font-size: 52px;
      font-weight: bold;
      font-family: 'Mada', sans-serif;
      text-shadow: 5px 4px 11px rgba(0, 0, 0, 0.26);
   }
   h3.title{
      font-size: 40px;
      color: #fd5c63;
      letter-spacing: 1px;
   }
   h3.title span{
      display: block;
      font-size: 22px;
      letter-spacing: 3px;
      line-height: 2;
      color: #333;
   }
   .card , img{
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

<div class="main-w3pvt">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-6 style-banner">
            <div class="style-banner-inner">
               <h3 class="font-weight-bold text-uppercase"> 
                  <span class="font-weight-normal">Live</span>
                     ORGANIC FOR
                  <span class="font-weight-normal">Live</span>
                     HEALTHY
               </h3>
               <p class="mt-3">Fruits, Vegetables & Organic Fresh Food</p>
               
               <a href="about.php" class="btn button-style mt-sm-5 mt-4"> Read More</a>
            </div>
         </div> 
         <div class="col-lg-6 img-banner-w3 text-center">
            <div class="csslider infinity">
               <?php
                  include ('includes/slider.php');
               ?>   
            </div>
         </div>
      </div>

   </div>
</div>
<!-- Start About -->
<div class="about py-5">
   <div class="welcome-left">
      <div class="about-content text-center py-md-5 py-sm-3">
         <h3>Welcome to our Awesome Organic <br>Food Website</h3>
         <a href="about.php" class="btn button-style button-style-2 mt-sm-5 mt-4">Read More</a>
      </div>  
   </div>
</div>
<!-- End About -->
<!-- Start Beast Food -->
<section class="py-5 team-w3ls">
   <div class="container py-xl-5 py-lg-3">
      <h3 class="title pt-sm-5 mb-5 text-wh font-weight-bold">
         Healthy Organic Food
         <span>is available at our Website</span>
      </h3>
   <div class="py-5">
      <div class="row mt-4">
         <?php 
            $query = "SELECT * FROM home LIMIT 0,6";
            $query_run = mysqli_query($connection , $query);
            if(mysqli_num_rows($query_run) > 0){
                  while($row = mysqli_fetch_assoc($query_run)){
         ?>  
         <div class="col-lg-4 mt-4">
            <div class="card">
               <div class="card-body">
                  <?php echo '<img src="../admin/upload/home/gallery/'.$row["image"].'" width="350px"; height="400px" class="img-fluid" alt="Responsive image">'?>
               </div>
            </div>
         </div>   
         <?php
               }
            }else{
               echo "No Gallery Found";
            }
         ?>
      </div>
   </div>   
   
      <div class="show-more">
          <a href="gallery.php" class="btn button-style button-style-2 mt-sm-5 mt-4">Show More</a>
      </div>
      
   </div>
</section>
<!-- End Beast Food -->


<?php
   include ('includes/footer.php');
   include ('includes/script.php');
?>
