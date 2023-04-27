<?php
include('header.php');

?>
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">Add Deals</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>

                <li class="breadcrumb-item active">Deals</li>
            </ol>
        </div>
        <div class="">

        </div>
    </div>

    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12">
                <div class="card card-body">
                    <h3 class="box-title m-b-0">Add Deals</h3>
                    <p class="text-muted m-b-30 font-13">Cafe Kahani Deals </p>
                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                            <form method="post" action="main.php">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Deals Name</label>
                                        <input type="text" name="item" class="form-control" id="exampleInputEmail1" placeholder="Deal Name">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Deal Price</label>
                                        <input type="text" name="price" class="form-control" id="exampleInputEmail1" placeholder="Enter Deal Price">
                                    </div>
                                </div>

                                <input type="hidden" name="cat" value="null" />

                                <br>



                                <div class="row">
                                    <div class="form-group col-md-12">

                                        <input type="submit" name="add_i" value="Add Deal" class="btn btn-info btn-block" placeholder="Items Name">
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