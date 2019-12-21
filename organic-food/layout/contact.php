<?php
   include('securty.php');
   include ('includes/header.php');
   include ('includes/navbar.php');
   include('../admin/includes/dbconfig/dp.php');
?>

<style>
	.sup-header{
	  margin-top: 90px;
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
   h3.title-w3 {
    font-size: 40px;
    color: #fd5c63;
    letter-spacing: 1px;
   }
   h3.title-w3 span {
    display: block;
    font-size: 18px;
    letter-spacing: 3px;
    line-height: 2;
    color: #333;
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
   .card{
      border-radius: 50px 0 50px 0;
   }
   h4{
   	padding-top: 45px;
   }
   h5{
   	padding-top:33px;
   }
   i{
   	color: #fd5c63;
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
         <h3>Contact Us</h3>
      </div>  
   </div>
</div>
<section class="about-inner py-5">
	<div class="container pt-xl-5 pt-lg-3">
		<h3 class="title-w3 mb-5 font-weight-bold">
			About Us
			<br>
			<span>Send Message</span>
		</h3>
		<div class="card">
	    	<div class="card-body">
                <div class="row">
    	            <div class="col-lg-6">
					    <form action="" method=''>
					        <div class="form-group">
					            <input type="text" class="form-control" name='' placeholder="Name">
					        </div>
					        <div class="form-group">
					            <input type="email" class="form-control" name='' placeholder="Email">
					        </div>
					        <div class="form-group">
					            <textarea type="text" class="form-control" name=''placeholder="Message" rows="10" ></textarea>
					        </div>
					        <div class="form-group">
					        	<button type="button" class="btn btn-lg btn-block">Send</button>
					        </div>
					    </form>		     
                    </div>
		            <div class="col-lg-6">
						<h3 class="title-w3 mb-5 font-weight-bold text-center">
					      Get In Touch
				        </h3>
				        <div class="row">
				        	<div class="col-lg-6">
			        			<h4><i class="fas fa-envelope mr-2"></i> Address</h4>
			        			<h4><i class="fas fa-phone mr-2"></i> Call Us</h4>
			        			<h4><i class="far fa-clock"></i> Opining Time</h4> 		
				        	</div>
				        	<div class="col-lg-6">
			        			<h5>
			        				Addre4978 Diamond Circle,
                                    <span>NJ 07087, USAss</span>
                                </h5>
			        			<h5>
			        				(012) 123-456-78
                                    <span>(012) 123-456-78</span>
                                </h5>
			        			<h5>
			        				Mon-Sat:
                                    <span>07h-16h</span>
                                </h5>
				        	</div>
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