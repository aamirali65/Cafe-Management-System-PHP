<?php include('header.php');
  include('role_page.php');
$ob->user();

?>

<div class="page-wrapper">
  <!-- ============================================================== -->
  <!-- Bread crumb and right sidebar toggle -->
  <!-- ============================================================== -->
  <div class="row page-titles">
    <div class="col-md-5 align-self-center">
      <h3 class="text-themecolor">Add New User</h3>
    </div>
    <div class="col-md-7 align-self-center">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="Dashboard.php">DashBoard</a></li>
        <li class="breadcrumb-item active">New User</li>
      </ol>
    </div>
    <div class="">

    </div>
  </div>
  <!-- ============================================================== -->
  <!-- End Bread crumb and right sidebar toggle -->
  <!-- ============================================================== -->
  <!-- ============================================================== -->
  <!-- Container fluid  -->
  <!-- ============================================================== -->
  <div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <!-- Row -->
    <div class="row">
      <div class="col-lg-12">
        <div class="card card-outline-info">
          <div class="card-header">
            <h4 class="m-b-0 text-white">User form</h4>
          </div>
          <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data">
              <div class="form-body">
                <h3 class="card-title">User Info</h3>
                <hr>
                <div class="row p-t-20">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="control-label">Username</label>
                      <input type="text" id="firstName" class="form-control" placeholder="Enter Your Name" name="uname" required>
                    </div>
                  </div>
             
                <!--/row-->
                  <div class="col-md-6">
                    <div class="form-group has-success">
                      <label class="control-label">Email</label>
                      <input type="email" style="border:1px solid #ced4da;" class="form-control" placeholder="Enter Your Email" name="email" required>
                    </div>
                  </div>
                  <!--/span-->
                  </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="control-label">Number</label>
                      <input type="number" class="form-control" placeholder="Enter Cell Number here" name="number" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Password</label>
                      <input type="text" placeholder="Enter Your Password" class="form-control" name="pass" required>
                    </div>
                  </div>
                  <!--/span-->
                  </div>

                  <!--/span-->
                </div>
                <div class="row">

                  <!--/span-->
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="control-label">Role</label>
                      <select class="form-control" name="role">
                        <option selected disabled>Select Rule</option>
                        <option value="1">Admin</option>
                        <option value="2">User</option>

                      </select>
                    </div>
                  </div>
                  <!--/span

                  <!--/span-->


                  <div class="col-md-6">
                    <div class="form-group has-success">
                      <label class="control-label">Image</label>
                      <input type="file" class="form-control" name="img" required>
                    </div>

                  </div>
                  <!--/span-->

                  <!--/span-->
                </div>
                <div class="form-actions">
                  <button type="submit" name="user" class="btn btn-info"> <i class="fa fa-check"></i> Member Add</button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Row -->
    <!-- Row -->

    <?php
    include('footer.php');
    ?>