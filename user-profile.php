<?php
include('header.php');
?>
<style>
    tr:nth-child(odd) {
        background-color: rgba(204, 204, 204, .2)
    }
</style>
<div class="page-wrapper" style="min-height: 291px;">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">User Profile</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item">pages</li>
                <li class="breadcrumb-item active">Invoice</li>
            </ol>
        </div>
        <div>

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
        <div class="row">
            <div class="col-md-12">
                <div class="card card-body printableArea">
                    <h3><b>User</b> <span class="pull-right">ID-<?php echo $_SESSION['id']?></span></h3>
                    <hr>


                    <!--start-->
                    <div class="row">

                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad">

                            <?php
                            $a = $_GET['userpro'];
                            foreach ($ob->user_profile($a) as $pro) {
                                echo ('<h3 class="panel-title">' . $pro['user_name'] . '</h3>
   
            </div>
            </div>
            <br>

            <div class="panel-body"><br>

              <div class="row">
               <div class="col-md-3">
               <img src="img/user/' . $pro['image'] . '" style="border-radius:10px;" class="img img-responsive">
               
               </div>
                <div class="col-md-8 offset-1">
                <table class="table table-hover tb">
               
                <tr>
                <td>Name</td>
                <td></td>
                <td>' . $pro['user_name'] . '</td>
                </tr>
                <tr>
                <td>Email</td>
                <td></td>
                <td>' . $pro['email'] . '</td>
                </tr>
                <tr>
                <td>Number</td>
                <td></td>
               <td>' . $pro['number'] . '</td>
                </tr>

                <td>Password</td>
                <td></td>
              <td>' . $pro['pass'] . '</td>
                </tr>
                <tr>
                <td>Rights</td>
                <td></td>
				');
                                if ($pro['role'] == 1) {
                                    echo ('<td>Admin</td>');
                                } else if ($pro['role'] == 2) {
                                    echo ('<td>Accounts</td>');
                                } else if ($pro['role'] == 3) {
                                    echo ('<td>Attendence</td>');
                                }

                                echo ('
                <tr>
                <td>Created on</td>
                <td></td>
                <td>' . $pro['date'] . '</td>
                </tr>
				<tr>
				<td>Account Status</td>
				<td></td>
				');
                                if ($pro['active'] == 1) {
                                    echo ('<td>Active</td>');
                                } else {
                                    echo ('<td>Suspend</td>');
                                }
                            }
                            ?>
                            </table>
                        </div>

                    </div>



                    <?php
if ($_SESSION['role']==1) {
?>
<div class="row">
    <div class="col-md-6">
        <?php
        foreach ($ob->user_profile($a) as $aba) {
            if ($aba['role'] == 1) {
                echo ('
   <button class="btn btn-info btn-sm disabled">
      Make Admin
   </button>
   </a>
                    
				');
            } else {
                echo ('<a href="makeadmin.php?makeadmin=' . $aba['id'] . '"><button class="btn btn-info btn-sm ">
      Make Admin
   </button>
					</a>
				');
            }


            if ($aba['active'] == 1) {
                echo ('<a href="suspendaccount.php?suspend=' . $aba['id'] . '"><button class="btn btn-info btn-sm ">
      Suspend Account
   </button>
					</a>');
            } else {
                echo ('<a href="activeaccount.php?active=' . $aba['id'] . '"><button class="btn btn-info btn-sm ">
      Active Account
   </button>
					</a>');
            }
        }

        ?>
    </div>
    <!--end-->
</div>
<?php
}
?>

                    
                </div>




            </div>



        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Right sidebar -->
<!-- ============================================================== -->
<!-- .right-sidebar -->
<div class="right-sidebar" style="overflow: visible;">
    <div class="slimScrollDiv" style="position: relative; overflow: visible hidden; width: auto; height: 100%;">
        <div class="slimscrollright" style="overflow: hidden; width: auto; height: 100%;">
            <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
            <div class="r-panel-body">
                <ul id="themecolors" class="m-t-20">
                    <li><b>With Light sidebar</b></li>
                    <li><a href="javascript:void(0)" data-theme="default" class="default-theme">1</a></li>
                    <li><a href="javascript:void(0)" data-theme="green" class="green-theme">2</a></li>
                    <li><a href="javascript:void(0)" data-theme="red" class="red-theme">3</a></li>
                    <li><a href="javascript:void(0)" data-theme="blue" class="blue-theme working">4</a></li>
                    <li><a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a></li>
                    <li><a href="javascript:void(0)" data-theme="megna" class="megna-theme">6</a></li>
                    <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
                    <li><a href="javascript:void(0)" data-theme="default-dark" class="default-dark-theme">7</a></li>
                    <li><a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a></li>
                    <li><a href="javascript:void(0)" data-theme="red-dark" class="red-dark-theme">9</a></li>
                    <li><a href="javascript:void(0)" data-theme="blue-dark" class="blue-dark-theme">10</a></li>
                    <li><a href="javascript:void(0)" data-theme="purple-dark" class="purple-dark-theme">11</a></li>
                    <li><a href="javascript:void(0)" data-theme="megna-dark" class="megna-dark-theme ">12</a></li>
                </ul>
                <ul class="m-t-20 chatonline">
                    <li><b>Chat option</b></li>
                    <li>
                        <a href="javascript:void(0)"><img src="../assets/images/users/1.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="../assets/images/users/2.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="../assets/images/users/3.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="../assets/images/users/4.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="../assets/images/users/5.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="../assets/images/users/6.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="../assets/images/users/7.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="../assets/images/users/8.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="slimScrollBar" style="background: rgb(220, 220, 220); width: 5px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;"></div>
        <div class="slimScrollRail" style="width: 5px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div>
    </div>
</div>
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