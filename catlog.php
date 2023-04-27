<?php
include('header.php');
$ob->categories();
include('role_page.php');
?>
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">Add Categories</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>

                <li class="breadcrumb-item active">Categories</li>
            </ol>
        </div>
        <div class="">

        </div>
    </div>

    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12">
                <div class="card card-body">
                    <h3 class="box-title m-b-0">Add Categories</h3>
                    <p class="text-muted m-b-30 font-13">Cafe Kahani Categories </p>
                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                            <form method="post">
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label for="exampleInputEmail1">Categories Name</label>
                                        <input type="text" name="categorie" class="form-control" id="exampleInputEmail1" placeholder="Categories Name">
                                    </div>


                                </div>


                                <br>



                                <div class="row">
                                    <div class="form-group col-md-12">

                                        <input type="submit" name="cata" value="Add Categories" class="btn btn-info btn-block" placeholder="Items Name">
                                    </div>

                                </div>

                            </form>
                        </div>
                    </div>


                </div>
            </div>


        </div>
        <?php
        include('footer.php');
        ?>