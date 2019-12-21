<?php
   include('securty.php');
   include ('includes/header.php');
   include('../admin/includes/dbconfig/dp.php');
?>
<style>
	.middle{
      background: url('img/middle.jpg') no-repeat center center fixed;
      background-size: cover;
   }
   .welcome-left{
      
      height: 591px;
      margin-top: -50px;
   }
   .middle-content{
   	background-color:rgb(125, 125, 125,0.5);
   	margin-top: 20px;
   	height: 630px;
   	border-radius: 55px 0 55px 0;
   	padding: 20px;
   	color: #fff;
   }
   .head{
   	background-color:rgba(253, 92, 99,.5);
   	margin-bottom: 15px;
   	height: 70px;
   	margin-top: -25px;
   	border-radius: 55px 55px 0px 0px;
   }
   h6.title{
	      font-size: 22px;
	      padding: 20px;
	      color: #fff;
	      letter-spacing: 1px;
	   }
	   h3.title span{
	      display: block;
	      font-size: 22px;
	      letter-spacing: 3px;
	      line-height: 2;
	      color: #333;
	   }
    input.form-control{
   	border: 1px solid #dee2e6!important;

   	border-radius: 50px;

   }

.nav-tabs{
	border-bottom: none;
}
.nav-tabs .nav-link{
	border: none;
	background: #000;
}

.e-s {
    background: #fd5c63!important;
    color: #fff!important;
    padding: 15px 110px!important;
    border-radius: 25px!important;
}
   .send{
   	background: #fd5c63!important; 
   	color: #fff;
   	border-radius: 50px;
   }
   .card{
      border-radius: 0px 0 50px 50px;
      margin-top: 55px;
      background-color:rgba(253, 92, 99,.5)!important;
   }
   .login{
   	margin-top: 200px;
   }
   .alert{
   	background-color:rgba(253, 92, 99,.5)!important;
   	height: 50px;
   	margin-top: 10px;
   }
   .alert h2{
   	margin-top: -15px;
   	font-weight: bold;
   	font-size: 44px;
   	color: red;
   }
</style>
<div class="middle py-5">
   <div class="welcome-left">
      <div class="col-md-6 offset-md-3">
		<div class="middle-content py-5">
			<div class="head">
	            <h6 class="title text-wh mb-5 font-weight-bold text-center">We Are Happy To Create An Account On Our   Website
	            </h6>
		    </div>  

		    <ul class="nav nav-tabs row">
				<li class="nav-item col-md-6">
				   <a class="nav-link active btn btn-lg btn-block e-s" href="#register" role="tab" data-toggle="tab">Register</a>
				</li>
				<li class="nav-item col-md-6">
				   <a class="nav-link btn btn-lg btn-block e-s" href="#login" role="tab" data-toggle="tab">Login</a>
				</li>
			</ul>
			<div class="tab-content">
				<div role="labpanel" class="tab-pane active" id="register">
					<div class="alert">
						<?php
			               if(isset($_SESSION['success']) && $_SESSION['success'] !=''){
			                   echo '<h2 class="text-success text-center">'.$_SESSION['success'].'</h2>';
			                   unset($_SESSION['success']);
			               }
			               if(isset($_SESSION['status']) && $_SESSION['status'] !=''){
			                   echo '<h2 class="text-center">'.$_SESSION['status'].'</h2>';
			                   unset($_SESSION['status']);
			               }
			            ?>
					</div>
					<div class="card">
	    	            <div class="card-body">
                            <div class="row">
    	                        <div class="col-lg-12">
								    <form action="code.php" method='POST'>
								        <div class="form-group">
								            <input type="text" class="form-control" name='username' placeholder="User Name" required="">
								        </div>
								        
								        <div class="form-group">
								            <input type="email" class="form-control" name='email' placeholder="Email" required="">
								        </div>
								        <div class="form-group">
								            <input type="password" class="form-control" name='password' placeholder="Password" required="">
								        </div>
								        <div class="form-group">
								            <input type="password" class="form-control" name='confirmpassword' placeholder="Confirm Password" required="">
								        </div>
								        <div class="form-group">
							                <input type="hidden" class="form-control" name='usertype'value="User">
							            </div>
								        <div class="form-group">
								        	<button type="submit" name="registerbtn" class="btn btn-lg btn-block send">Send</button>
								        </div>
								    </form>	
								</div>
							</div>
						</div>
					</div>
				</div>
			
				<div role="labpanel" class="tab-pane" id="login">
					<div class="card login">
	    	            <div class="card-body">
                            <div class="row">
    	                        <div class="col-lg-12">
								    <form action="code.php" method='POST'>
								        <div class="form-group">
								            <input type="email" class="form-control" name='email' placeholder="Email">
								        </div>
								        <div class="form-group">
								            <input type="password" class="form-control" name='pasword' placeholder="Password">
								        </div>
								        
								        <div class="form-group">
								        	<button type="submit" name="loginbtn" class="btn btn-lg btn-block send">Send</button>
								        </div>
								    </form>	
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
        </div>
      </div>  
   </div>
</div>

<?php
  
   include ('includes/script.php');
?>