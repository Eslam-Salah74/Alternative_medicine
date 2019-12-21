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
   h6.subheading-w3ls {
    font-size: 32px;
    line-height: 1.6;
    letter-spacing: 2px;
    text-shadow: 1px 1px 1px rgba(41, 40, 40, 0.25);
   }
   .img-fluid {
    max-width: 100%;
    height: auto;
    margin-top: -20px;
   }
   img {
    vertical-align: middle;
    border-style: none;
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

   .middle{
      background: url('img/middle.jpg') no-repeat center center fixed;
      background-size: cover;
      height: 565px;
   }
   .welcome-left{
      
      height: 565px;
      margin-top: -50px;
   }
   .middle-content{
   	background-color:rgb(125, 125, 125,0.5);
   	margin: 20px;
   	height: 525px;
   	border-radius: 55px 0 55px 0;
   	padding: 20px;
   	color: #fff;
   }
h3.tittle{
      font-size: 30px;
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
      
.team .team-contant{
	padding-top: 20px;
	position: relative;
	cursor: pointer;
	width: 310px;
	height: 300px;
}
.team .team-contant:hover .team-info{
	width: 310px;

}
.team .team-contant .team-img img{
	display: block;
	width: 310px;
	height: 300px;
}
.team-info{
	transition: 0.7s ease;
	width: 310px;
	height: 300px;
	border-radius: 50px 0 50px 0;
	background-color: rgb(253, 92, 99,.5);
	position: absolute;
	top: 0;
	justify-content: center;
	align-items: center;
	overflow: hidden;
	
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
         <h3>About Us</h3>
      </div>  
   </div>
</div>

<section class="about-inner py-5">
	<div class="container pt-xl-5 pt-lg-3">
		<h3 class="title-w3 mb-5 font-weight-bold">
			About Us
			<br>
			<span>Something about us</span>
		</h3>
		<div class="row">
			<div class="col-lg-6 w3lsits_works-grid mt-xl-4">
				<div class="wthree-bottom">
					<h6 class="subheading-w3ls text-uppercase text-dark mb-4">
						DEAL OF THE 
						<span class="font-weight-bold">DAY</span>
						organic good
						<span class="font-weight-bold">foods 50%</span>
						off 
					</h6>
					<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, eaque ipsa
							quae ab illo inventore veritatis et quasi architecto.</p>
				</div>
				<div class="read-more">
                   <a href="gallery.php" class="btn button-style button-style-2 mt-sm-5 mt-4">Read More</a>
                </div>
			</div>
			<div class="col-lg-6 w3lsits_works-grid1 mt-lg-0 mt-sm-5 mt-4">
				<img src="img/about.jpg" class="img-fluid">
			</div>
		</div>
				
		    
	</div>
	<div class="col-lg-6">
		
	</div>
	
</section>

<div class="middle py-5">
   <div class="welcome-left">
      <div class="offset-xl-7 offset-lg-6 offset-md-4 offset-sm-2">
		<div class="middle-content py-5">
            <h3 class="tittle text-wh mb-5 font-weight-bold">763+ fruits, vegetables & lot more</h3>
		    <p class="lead text-li">
		   		Fresh From Our Farm ut leo cursus rhoncus. Nullam dui mi, vulputate ac metus at,
				semper varius orci. Nulla accumsan ac elit in congue.
		    </p>
            <p class="text-li">
	       		Rerum hic tenetur a sapiente delectus reiciendis maiores alias consequatur aut consequat
				sapien ut leo cursus
				rhoncus.Nullam dui mi, vulputate ac metus.
            </p>
	        <div class="show-more">
	          <a href="gallery.php" class="btn button-style button-style-2 mt-sm-5 mt-4">Read More</a>
	        </div>
        </div>
      </div>  
   </div>
</div>

<section class="team py-5 team-w3ls" >
   <div class="container py-xl-5 py-lg-3">
	    <h3 class="title-w3 pt-sm-5 mb-5 text-wh font-weight-bold">
	        Our Farmers
	        <span>Caption Here</span>
	    </h3>
		<div class="row inner-sec-w3layouts-w3pvt-lauinfo">
		    <div class="col-md-4 team-grids text-center"> 
		        <div class="card">
		        	<div class="card-body">
		        		<div class="team-contant">
		        			<div class="team-img">
		        				<img src="img/team1.jpg" class="img-fluid img-responsive" >
		        			</div>
			        		
			        		<div class="team-info">
				            	<div class="caption mb-3">
				            		<h4>
				            			
				            		</h4>
				            	</div>
				            	<div class="social-icons-section">
				            		<a href="#">
				            			
				            		</a>
				            	</div>
			        	    </div>
		        	    </div>
		            </div>   
		        </div>
		    </div>
		    <div class="col-md-4 team-grids text-center"> 
		        <div class="card">
		        	<div class="card-body">
		        		<div class="team-contant">
		        			<div class="team-img">
		        				<img src="img/team2.jpg" class="img-fluid img-responsive" >
		        			</div>
			        		
			        		<div class="team-info">
				            	<div class="caption mb-3">
				            		<h4>
				            			
				            		</h4>
				            	</div>
				            	<div class="social-icons-section">
				            		<a href="#">
				            			
				            		</a>
				            	</div>
			        	    </div>
		        	    </div>
		            </div>   
		        </div>
		    </div>
		    <div class="col-md-4 team-grids text-center"> 
		        <div class="card">
		        	<div class="card-body">
		        		<div class="team-contant">
		        			<div class="team-img">
		        				<img src="img/team3.jpg" class="img-fluid img-responsive" >
		        			</div>
			        		
			        		<div class="team-info">
				            	<div class="caption mb-3">
				            		<h4>
				            			
				            		</h4>
				            	</div>
				            	<div class="social-icons-section">
				            		<a href="#">
				            			
				            		</a>
				            	</div>
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