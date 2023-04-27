<?php
include('main.php');
if (isset($_SESSION['username'])) {
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Marksman Cafe</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="css/blue.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <!-- <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div> -->
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <section id="wrapper" style="background-color:#000">
        <div class="login-register" style="background-image:url(img/3.jpg);">
            <div class="login-box card">
                <div class="card-body">
                    <div class="form-group m-b-0">
                        <div class="col-sm-12 text-center">
                            <div>
                                <h3><span class="text-danger">Marksman Cafe</span> </h3>
                            </div>
                        </div>
                    </div>
                    <form class="form-horizontal form-material" id="loginform" method="post">
                        <h3 class="box-title m-b-20">Sign In</h3>
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" required placeholder="Email" name="email">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control" type="password" required placeholder="Password" name="psw">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12 font-14">
                                <div class="checkbox checkbox-primary pull-left p-t-0">
                                    <input id="checkbox-signup" type="checkbox">
                                    <label for="checkbox-signup"> Remember me </label>
                                </div> <a href="javascript:void(0)" id="to-recover" class="text-dark pull-right"><i class="fa fa-lock m-r-5"></i> Forgot pwd?</a>
                            </div>
                        </div>
                        <div class="form-group text-center m-t-20">
                            <div class="col-xs-12">
                                <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit" name="login">Log In</button>
                            </div>
                        </div>
                    </form>
                    <?php
                    if (isset($_POST['login'])) {
                        include('./connection.php');
                        $email = mysqli_real_escape_string($con, $_POST['email']);
                        $password = mysqli_real_escape_string($con, md5($_POST['psw']));
                        $sql = "SELECT * FROM tbl_user WHERE email='$email' and pass='$password'";
                        $query = mysqli_query($con, $sql);
                        if (mysqli_num_rows($query)) {
                            while ($row = mysqli_fetch_array($query)) {
                                if($row['active']==2){
                                    $_SESSION['suspend'] = 'suspend';
                                }else{
                                    $_SESSION['username'] = $row['user_name'];
                                $_SESSION['email'] = $row['email'];
                                $_SESSION['id'] = $row['id'];
                                $_SESSION['image'] = $row['image'];
                                $_SESSION['role'] = $row['role'];
                                echo "<script>window.location.href='index.php'</script>";
                                }
                            }
                        } else {
                            $_SESSION['error'] = 'error';
                        }
                    }

                    ?>
                    <form class="form-horizontal" id="recoverform" action="index.html">
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <h3>Recover Password</h3>
                                <p class="text-muted">Enter your Email and instructions will be sent to you! </p>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" required placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group text-center m-t-20">
                            <div class="col-xs-12">
                                <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit" name="btn">Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="js/jquery.min.js"></script>
    <script src="js/sweetalert.min.js"></script>
    <script>
        <?php
        if (isset($_SESSION['error'])) {
        ?>
            Swal.fire({
                icon: 'error',
                title: 'login failed...',
                text: 'Email and Password did not match.',
            })

        <?php
            session_unset();
        }
        ?>
    </script>
    <script>
        <?php
        if (isset($_SESSION['suspend'])) {
        ?>
            Swal.fire({
                icon: 'error',
                title: 'Account Suspended',
                text: 'Your Account is suspended',
            })

        <?php
            session_unset();
        }
        ?>
    </script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="js/sticky-kit.min.js"></script>
    <script src="js/jquery.sparkline.min.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="js/jQuery.style.switcher.js"></script>
</body>

</html>