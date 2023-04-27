	<?php include('main.php');
  // session_start();
  if (!isset($_SESSION['username'])) {
    header('Location: login.php');
  }

  ?>
	<!DOCTYPE html>
	<html lang="en-PK">

	<head>
	  <meta charset="utf-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">

	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <meta name="description" content="">
	  <meta name="author" content="">
	  <!-- Favicon icon -->
	  <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
	  <title>Marksman Cafe</title>
	  <!-- Bootstrap Core CSS -->
	  <link href="css/bootstrap.min.css" rel="stylesheet">
	  <link href="css/select2.min.css" rel="stylesheet">

	  <link href="css/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
	  <!-- chartist CSS -->
	  <link href="css/chartist.min.css" rel="stylesheet">

	  <link href="css/multi-select.css" rel="stylesheet">
	  <link href="css/switchery.min.css" rel="stylesheet">
	  <link href="css/bootstrap-select.min.css" rel="stylesheet">
	  <link href="css/bootstrap-tagsinput.css" rel="stylesheet">
	  <link href="css/chartist-plugin-tooltip.css" rel="stylesheet">
	  <!-- Custom CSS -->
	  <link href="css/style.css" rel="stylesheet">
	  <!-- You can change the theme colors from here -->
	  <link href="css/blue.css" id="theme" rel="stylesheet">
	  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
	 -->
	 <link rel="stylesheet" href="https://code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">


	  <style>
	    a {
	      color: #000;
	    }

	    #mr {
	      margin-left: 10px;
	    }

	    .ac a {
	      background-color: #1976d2;
	      color: #fff !important;
	    }
	  </style>
	</head>

	<body class="fix-header card-no-border logo-center">
	  <!-- ============================================================== -->
	  <!-- Preloader - style you can find in spinners.css -->
	  <!-- ============================================================== -->
	  <!-- <div class="preloader"> <svg class="circular" viewBox="25 25 50 50">
	      <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
	    </svg> </div> -->
	  <!-- ============================================================== -->
	  <!-- Main wrapper - style you can find in pages.scss -->
	  <!-- ============================================================== -->
	  <div id="main-wrapper">
	    <!-- ============================================================== -->
	    <!-- Topbar header - style you can find in pages.scss -->
	    <!-- ============================================================== -->
	    <header class="topbar">
	      <nav class="navbar top-navbar navbar-expand-md navbar-light">
	        <!-- ============================================================== -->
	        <!-- Logo -->
	        <!-- ============================================================== -->
	        <div class="navbar-header"> <a class="navbar-brand" href="index.php">
	            <!-- Logo icon --><b>
	              <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
	              <!-- Dark Logo icon -->
	              <img src="img/logo/logo-icon.png" alt="homepage" class="dark-logo" />
	              <!-- Light Logo icon -->
	              <img src="img/logo/logo-light-icon.png" alt="homepage" class="light-logo" /> </b>
	            <!--End Logo icon -->
	            <!-- Logo text --><span>
	              <!-- dark Logo text -->
	              <img src="img/logo/logo-text.png" alt="homepage" class="dark-logo" />
	              <!-- Light Logo text -->
	              <img src="img/logo/logo-light-text.png" class="light-logo" alt="homepage" /></span> </a> </div>
	        <!-- ============================================================== -->
	        <!-- End Logo -->
	        <!-- ============================================================== -->
	        <div class="navbar-collapse">
	          <!-- ============================================================== -->
	          <!-- toggle and nav items -->
	          <!-- ============================================================== -->
	          <ul class="navbar-nav mr-auto mt-md-0">
	            <!-- This is  -->
	            <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
	          </ul>
	          <ul class="navbar-nav my-lg-0">
	            <li class="nav-item hidden-sm-down search-box"> <a class="nav-link hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>
	              <form class="app-search">
	                <input type="text" class="form-control" placeholder="Search & enter">
	                <a class="srh-btn"><i class="ti-close"></i></a>
	              </form>
	            </li>
	            <!-- ============================================================== -->
	            <!-- Language -->
	            <!-- ============================================================== -->
	            <!-- <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="flag-icon flag-icon-us"></i></a>
	              <div class="dropdown-menu dropdown-menu-right scale-up"> <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-in"></i> India</a> <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-fr"></i> French</a> <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-cn"></i> China</a> <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-de"></i> Dutch</a> </div>
	            </li> -->
	            <!-- ============================================================== -->
	            <!-- Profile -->
	            <!-- ============================================================== -->
	            <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img src="<?php echo "img/user/".$_SESSION['image']?>" alt="user" class="profile-pic" /></a>
	              <div class="dropdown-menu dropdown-menu-right scale-up">
	                <ul class="dropdown-user">
	                  <li>
	                    <div class="dw-user-box">
	                      <div class="u-img"><img src="<?php echo "img/user/".$_SESSION['image']?>"></div>
	                      <div class="u-text">
	                        <h4><?php echo $_SESSION['username'] ?></h4>
	                        <!-- <p class="text-muted"><?php echo $_SESSION['email'] ?></p> -->
                          <?php
                        include('./connection.php');
                        $new = mysqli_query($con, 'SELECT * FROM `tbl_user` WHERE id = '.$_SESSION["id"].'');

                        if($new){
                          while($row = mysqli_fetch_assoc($new)){
                        ?>
	                        <a href="user-profile.php?userpro=<?php echo $row['id']; ?>" class="btn btn-rounded btn-danger btn-sm">View Profile</a>
                          <?php
                        }}?>
	                      </div>
	                    </div>
	                  </li>
	                  <li role="separator" class="divider"></li>
	                  <!-- <li><a href="#"><i class="ti-user"></i> My Profile</a></li>
              <li><a href="#"><i class="ti-wallet"></i> My Balance</a></li>
              <li><a href="#"><i class="ti-email"></i> Inbox</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#"><i class="ti-settings"></i> Account Setting</a></li>
              <li role="separator" class="divider"></li> -->
	                  <li><a href="logout.php"><i class="fa fa-power-off"></i> Logout</a></li>
	                </ul>
	              </div>
	            </li>
	          </ul>
	        </div>
	      </nav>
	    </header>
	    <!-- ============================================================== -->
	    <!-- End Topbar header -->
	    <!-- ============================================================== -->
	    <!-- ============================================================== -->
	    <!-- Left Sidebar - style you can find in sidebar.scss  -->
	    <!-- ============================================================== -->
	    <aside class="left-sidebar">
	      <!-- Sidebar scroll-->
	      <div class="scroll-sidebar">
	        <!-- Sidebar navigation-->
	        <nav class="sidebar-nav">
            <?php
            if($_SESSION['role'] == 2){
              echo '<ul id="sidebarnav">
	            <li class="nav-small-cap">PERSONAL</li>
	            <li> <a class="has-arrow waves-effect waves-dark" href="index.php" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard</span></a>
	            </li>
	            <li> <a class="has-arrow waves-effect waves-dark" href="orders.php" aria-expanded="false"><i class="mdi mdi-bullseye"></i><span class="hide-menu">Order</span></a></li>
	          </ul>';
            }else{
              echo '<ul id="sidebarnav">
	            <li class="nav-small-cap">PERSONAL</li>
	            <li> <a class="has-arrow waves-effect waves-dark" href="index.php" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard</span></a>

	            </li>
	            <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-bullseye"></i><span class="hide-menu">Items</span></a>

	              <ul aria-expanded="false" class="collapse">
	                <li><a href="items.php">View Items</a></li>
	                <li><a href="item.php">Add Items</a></li>
	                <li><a href="catlog.php">Add Categories</a></li>
	                <li><a href="table.php">Add Table</a></li>

	              </ul>

	            </li>

	            <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-bullseye"></i><span class="hide-menu">Expense</span></a>

	              <ul aria-expanded="false" class="collapse">
	                <li><a href="expence.php">Add Expense</a></li>
	                <li><a href="view-expence.php">View Expense</a></li>

	              </ul>

	            </li>

	            <li> <a class="has-arrow waves-effect waves-dark" href="orders.php" aria-expanded="false"><i class="mdi mdi-bullseye"></i><span class="hide-menu">Order</span></a></li>


	            <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-bullseye"></i><span class="hide-menu">User</span></a>

	              <ul aria-expanded="false" class="collapse">
	                <li><a href="user.php">Add User</a></li>
	                <li><a href="user-view.php">View User</a></li>

	              </ul>


	            </li>
	            <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-bullseye"></i><span class="hide-menu">Sales Items</span></a>

	              <ul aria-expanded="false" class="collapse">
	                <li><a href="paid.php">Paid</a></li>
	                <li><a href="unpaid.php">Unpaid</a></li>

	              </ul>


	            </li>



	            <li> <a class="has-arrow waves-effect waves-dark" href="Setting.php" aria-expanded="false"><i class="mdi mdi-bullseye"></i><span class="hide-menu">Setting</span></a></li>


	          </ul>';
            }
            ?>
	
	        </nav>
	        <!-- End Sidebar navigation -->
	      </div>
	      <!-- End Sidebar scroll-->
	    </aside>