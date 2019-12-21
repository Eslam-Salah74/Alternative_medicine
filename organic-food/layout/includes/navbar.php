<?php 
  include('securty.php');
  include('../admin/includes/dbconfig/dp.php');
?>
<style>
  .logo a{
    float: left;
    display: initial;
    font-weight: bold;
    font-size: 26px;
    letter-spacing: 1px;
    color:#fd5c63!important;
    text-shadow: 2px 5px 3px rgba(0, 0, 0, 0.06);
    display: inline-block;

    margin-left: -77px;
  }
  .logo span{
    display: inline-block;
    color:#fd5c63!important;
    text-shadow: 2px 5px 3px rgba(0, 0, 0, 0.06);
  }
</style>


<nav class="navbar fixed-top navbar-expand-lg navbar-light white">
  <div class="container">
    <div class="logo">
      <h1>
        <a class="navbar-brand" href="#">
          Alternative Medicine
          <br>
          <span class="lead">( Fruits | Herbals | Vegetables | ... )</span>
        </a>

      </h1>
    </div>
    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="nav_es">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="aboutus.php">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="gallery.php">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="clinic.php">Clinic</a>
          </li> 

          <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Departmentes
                   
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <?php 
                     $query     = "SELECT * FROM departments";
                    $query_run = mysqli_query($connection,$query);
                    if (mysqli_num_rows($query_run) > 0 ) {
                     while ($row = mysqli_fetch_assoc($query_run)) {
                  ?>
                  <form action="departments.php" method="POST">
                    <input type="hidden" name="departments_id" value="<?php echo $row['dept_id'];?>">
                    <button type="submit" name="dept_btn" class="btn dropdown-item"><?php echo $row['dept_name']; ?></button>
                  </form>
                  <?php
                      } 

                    }else{
                      echo "No Departmentes Found";
                    }
                  ?>
                </a>
                
              </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php" tabindex="-1" aria-disabled="true">Contact Us</a>
          </li>











          <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                
                   Profile
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                
               
                    <?php 
                   
                      echo "<p style='color: #fd5c63; font-weight: bold;text-align: center'>".$_SESSION['email_user']."</p>";
                     ?>
                
                  
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <div class="dropdown-divider" style="color: #fd5c63; font-weight: bold;font-size: 22px;"></div>
                <a class="dropdown-item" href="login.php" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
          </li>
        </ul>
      </div>
    </div>
 </div> 
</nav>

<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <form action="logout.php"method="POST" >
              <button type="submit" name="logoutbtn" class="btn btn-primary">Logout</button>
          </form>    
        </div>
      </div>
    </div>
  </div>