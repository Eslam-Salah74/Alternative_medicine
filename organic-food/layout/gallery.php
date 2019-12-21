<?php
   include('securty.php');
   include ('includes/header.php');
   include ('includes/navbar.php');
   include('../admin/includes/dbconfig/dp.php');
?>
<style>
	.sup-header{
		margin-top: 40px;
      background: url('img/sup-header/01.jpg') no-repeat center center fixed;
      background-size: cover;
      height: 280px;
   }
   .sup-img{
      background-color: rgb(0,0,0,.5);
      height: 280px;
      
   }
   .sup-content h3{
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
   h3.title span{
      display: block;
      font-size: 22px;
      letter-spacing: 3px;
      line-height: 2;
      color: #333;
   }
   .card , img{
      border-radius: 50px 0 50px 0;
      height: 500px;
   }
   .card h1{
   	color: #fd5c63;
   	font-weight: bold;
   	border-bottom: 3px solid #fd5c63;
   	border-radius: 50px 0 50px 0;
   	padding-bottom: 5px;
   	font-size: 44px;
   }
   .card h1 span{
   	color: #000;
   	font-weight: bold;
   	font-size: 55px;
   }
   .card .scroll{
      height:300px;
      overflow: auto;
   }
   .card p{
   	color: #fd5c63;
   	font-weight: bold;
   	padding-top:15px;
   	font-size: 22px;
   }
   .pagination .page-item.disabled .page-link , .pagination .page-item .page-link{
      color: #fd5c63;
      font-size: 18px;
      font-weight: bold;
   }
   .pagination .page-item .page-link{
      color: #fd5c63;
      font-size: 18px;
   }
   .pagination .page-item.active .page-link:hover{
      background: #fff;
      color: #fd5c63;
   }
   .pagination .page-item.active .page-link{
      background-color: #fd5c63;
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


<div class="sup-header">
   <div class="sup-img">
      <div class="sup-content text-center py-md-5 py-sm-3">
         <h3>Gallery</h3>
      </div>  
   </div>
</div>

<section class="py-5 team-w3ls">
   <div class="container py-xl-5 py-lg-3">
      <h3 class="title pt-sm-5 mb-5 text-wh font-weight-bold">
         Our Gallery
         <span>Caption Here</span>
      </h3>
      <div class="py-5">
      <div class="row mt-4">
         <?php 
         if (isset($_GET['page'])) {
            $currentpage  = $_GET['page'];
         }else{
            $currentpage  = 1;
         }
         
         // Gallery In On Page 
         $numperofgallery = 2;
         $previouspage    = $currentpage - 1;
         $nextpage        = $currentpage + 1;
         // start = Zero
         $start           = ($currentpage - 1 ) * $numperofgallery ;


            $query = "SELECT * FROM home LIMIT ".$start.",".$numperofgallery." ";
            $query_run = mysqli_query($connection , $query);
            if(mysqli_num_rows($query_run) > 0){
                  while($row = mysqli_fetch_assoc($query_run)){
         ?>  
         <div class="col-lg-12 mt-4">
         	<div class="row">
         		<div class="col-lg-4">
		            <div class="card">
		               <div class="card-body">
		               	<h1 class="text-center"><?php echo $row['name']; ?></h1>
		                  <?php echo '<img src="../admin/upload/home/gallery/'.$row["image"].'" width="350px"; height="400px" class="img-fluid" alt="Responsive image">'?>
		               </div>
		            </div>
	            </div>
	            <div class="col-lg-8">
	            	<div class="card">
		               <div class="card-body">
	                     <h1><span>About :</span> <?php echo $row['name']; ?></h1>
                        <div class="scroll">
	                         <p><?php echo $row['description']; ?></p>
                           
                        </div>
	                   </div>
		            </div>
	            </div>
            </div>
         </div>   
         <?php
               }
            }else{
               echo "No Gallery Found";
            }
         ?>
         <div class="pag py-5">
            <div class="card-body">
               <nav aria-label="...">
                  <ul class="pagination">
                     <!-- disabled -->
                     <?php
                        if ($currentpage == 1) {
                           echo '
                              <li class="page-item disabled">
                                 <a class="page-link" tabindex="-1" aria-disabled="true" >Previous</a>
                              </li>
                           ';
                           
                        }else{
                           echo '
                              <li class="page-item">
                                <a class="page-link" href="?page='.$previouspage.'" tabindex="-1" aria-disabled="true" >Previous</a>
                              </li>
                           ';
                        }
                     ?>
                      
                      <!--<li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item active" aria-current="page">
                      <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>-->
                      <li class="page-item">
                      <a class="page-link" href="?page=<?php echo $nextpage;?>">Next</a>
                      </li>
                  </ul>
               </nav> 
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