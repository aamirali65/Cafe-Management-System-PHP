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
            <h3 class="text-themecolor">Add Expense</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>

                <li class="breadcrumb-item active">Add Expense</li>
            </ol>
        </div>
        <div class="">

        </div>
    </div>

    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12">
                <div class="card card-body">
                    <h3 class="box-title m-b-0">Add Payment</h3>
                    <p class="text-muted m-b-30 font-13">Expense </p>
                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                            <form method="get" action="main.php">

                                <?php
                                if (isset($_GET['exp_id'])) {
                                    $e_name = mysqli_fetch_array($ob->only_exp(), MYSQLI_ASSOC)['e_name'];
                                    $e_price = mysqli_fetch_array($ob->only_exp(), MYSQLI_ASSOC)['t_price'];
                                    $e_id = mysqli_fetch_array($ob->only_exp(), MYSQLI_ASSOC)['e_id'];

                                    echo ('<div class="form-group">
                                            <label for="exampleInputEmail1">Payment </label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" name="e_price" placeholder="Enter Payment" value="' . $e_price . '">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Paid For</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" name="e_name" placeholder="Enter Paid for" value="' . $e_name . '">
                                        </div>
                                        <button type="submit" class="btn btn-block btn-info waves-effect waves-light m-r-10" value="' . $e_id . '" name="updt_exp">Update</button>
                                        ');
                                } else {
                                    echo ('
                                           <div class="form-group">
                                            <label for="exampleInputEmail1">Payment </label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" name="price" placeholder="Enter Payment">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Paid For</label>
                                            <select  class="form-control" id="exampleInputEmail1" name="paid_for" placeholder="Enter Paid for">
                                                <option>01</option>
                                            </select>
                                            <br>
                                            <div class="row">
                                            <div class="col-md-10">
                                              <div class="form-group" style="display:none"  id="payment" >
                                            <label for="exampleInputEmail1">Enter Expense Head </label>
                                            <input type="text" class="form-control" id="exp" name="price" placeholder="Enter Payment">
                                        </div>
                                        </div>
                                        <br>
                                        <div class="col-md-2" style="margin-top: 30px;"> <button class="btn btn-block btn-primary" style="display:none" type="button" id="btn_add"> ADD</button></div>
                                        </div>
                                            <a id="head"><small>Add Expense Head</small></a>
                                       
                                        <button type="submit" class="btn btn-block btn-info waves-effect waves-light m-r-10" name="submit" >Add</button>
                                        ');
                                }
                                ?>







                            </form>
                        </div>
                    </div>
                </div>
            </div>


        </div>

        <script type="text/javascript">
            document.getElementById('head').addEventListener('click', function() {
                document.getElementById('payment').style.display = "block";
                document.getElementById('btn_add').style.display = "block";

            });

            document.getElementById('btn_add').addEventListener('click', function() {
                var exp = document.getElementById('exp').value;

                $.ajax({
                    type: 'post',
                    url: 'main.php',
                    data: {
                        expp: exp
                    },
                    success: function(res) {
                        console.log(res);

                    }
                });
            });
        </script>
        <?php
        include('footer.php');
        ?>