<?php 
 include('securty.php');
 include('includes/header.php');
 include('includes/navbar.php');
 include('includes/topbar.php');
 include('includes/dbconfig/dp.php');

?>
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Registererd (Admin)
                      </div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?php
                          //$connection = mysqli_connect('localhost','root','','adminpanel');
                          $query      = "SELECT id FROM register ORDER BY id";
                          $query_run  = mysqli_query($connection , $query);
                          $row        = mysqli_num_rows($query_run);
                          echo '<h5>'."Total Admin ( " .$row." )".'</h5>';
                        
                        ?>

                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Departments
                      </div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?php
                          //$connection = mysqli_connect('localhost','root','','adminpanel');
                          $query      = "SELECT dept_id FROM departments ORDER BY dept_id";
                          $query_run  = mysqli_query($connection , $query);
                          $row        = mysqli_num_rows($query_run);
                          echo '<h5>'."Total Dept ( " .$row." )".'</h5>';
                        
                        ?>

                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Departments
                      </div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?php
                         
                          $query      = "SELECT dept_id FROM departments ORDER BY dept_id";
                          $query_run  = mysqli_query($connection , $query);
                          $row        = mysqli_num_rows($query_run);
                          echo '<h5>'."Total Dept ( " .$row." )".'</h5>';
                        
                        ?>

                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Category
                      </div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?php
                          
                          $query      = "SELECT cate_id FROM category ORDER BY dept_id";
                          $query_run  = mysqli_query($connection , $query);
                          $row        = mysqli_num_rows($query_run);
                          echo '<h5>'."Total Cate ( " .$row." )".'</h5>';
                        
                        ?>

                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Content Row -->

          <div class="row">

            

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      

    

  </div>
  <!-- End of Page Wrapper -->

<?php 
 include('includes/scripts.php');
 include('includes/footer.php');
 

?>






