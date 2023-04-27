<?php
include('header.php');

?>
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor"></h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>

                <li class="breadcrumb-item active">Items</li>
            </ol>
        </div>
        <div class="">

        </div>
    </div>

    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12">
                <div class="card card-body">
                    <h3 class="box-title m-b-0">Add Item</h3>
                    <p class="text-muted m-b-30 font-13">Items </p>
                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                            <table class="table">
                                <tr>

                                    <th>Item Name</th>
                                    <th>Qty</th>
                                    <th>Total Sale</th>

                                </tr>

                                <tbody>

                                    <?php

                                    $ob->monthly_items();

                                    ?>

                                </tbody>

                            </table>
                        </div>
                    </div>


                </div>
            </div>


        </div>
        <?php
        include('footer.php');
        ?>