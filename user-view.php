<?php
include('header.php');
include('role_page.php');

?>

<div class="page-wrapper" style="min-height: 391px;">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">View Users</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item">Apps</li>
                <li class="breadcrumb-item active">Contact2</li>
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
        <!-- .row -->
        <div class="row">
            <!-- .col -->
            <?php
            foreach ($ob->user_data() as $view) {
                echo ('
                    <div class="col-md-6 col-lg-6 col-xlg-4">
                        <div class="card card-body">
                            <div class="row">
                                <div class="col-md-4 col-lg-3 text-center">
                                    <a href="user-profile.php?userpro=' . $view['id'] . '"><img src="img/user/' . $view['image'] . '" alt="user" class="img-circle img-responsive"></a>
                                </div>
                                <div class="col-md-8 col-lg-9">
                                    <h3 class="box-title m-b-0">' . $view['user_name'] . '</h3>');
                if ($view['role'] == 1) {
                    echo ('<small>Admin</small>');
                } else if ($view['role'] == 2) {
                    echo ('<small>Accounts</small>');
                } else if ($view['role'] == 3) {
                    echo ('<small>Attendence</small>');
                }
                echo ('
                                    <address>
                                        ' . $view['email'] . '
                                        <br>
										
                                        <abbr title="Phone"></abbr>' . $view['number'] . '
                                    </address>
									<a href="user-profile.php?userpro=' . $view['id'] . '"><button class="btn btn-primary btn-sm float-right">View More</button></a>
									<a href="delete-user.php?userpro=' . $view['id'] . '"><button class="btn btn-danger btn-sm float-right mx-2">Delete User</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
               
				');
            }
            ?>
        </div>


        <!-- /.row -->
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right sidebar -->
        <!-- ============================================================== -->
        <!-- .right-sidebar -->

        <!-- ============================================================== -->
        <!-- End Right sidebar -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
</div>

<?php
include('footer.php');
?>