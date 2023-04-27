<?php
include('header.php');
include('role_page.php');
?>
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">View Items</h3>
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
                                    <th>Category</th>
                                    <th>Price</th>
                                    <th>Stock</th>
                                    <th>Action</th>

                                </tr>

                                <tbody>

                                    <?php

                                    foreach ($ob->sel_items() as $items) {
                                        echo ("<tr>
                                                
                                                <td>" . $items['item_name'] . "</td>
                                                <td>" . $items['name'] . "</td>
                                                <td>" . $items['item_price'] . "</td>
                                                <td>" . $items['stock'] . "</td>
                                                <td><a href='item.php?i_id=" . $items['i_id'] . "'><i class='fa fa-edit'></i></a><a class='mx-3' href='delete-item.php?i_id=" . $items['i_id'] . "'><i class='fa fa-trash'></i></a></td>
                                    
                                                
                                                </tr>");
                                    }

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