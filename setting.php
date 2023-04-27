<?php
include('header.php');
include('role_page.php');
$ob->logo();
$ob->bill_phone();
$ob->bill_add();
?>
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">Setting</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>

                <li class="breadcrumb-item active">Add Setting</li>
            </ol>
        </div>
        <div class="">

        </div>
    </div>

    <div class="container-fluid">
        <?php
        foreach ($ob->sel_setting() as $data) {
            echo ('
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-body">
                            <h3 class="box-title m-b-0">Add Setting</h3>
                            <p class="text-muted m-b-30 font-13">Bill Setting </p>
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                    <form method="post" enctype="multipart/form-data">
                                         <div class="row">
                                     <div class="col-md-10">
                                           <div class="form-group">
                                            <label for="exampleInputEmail1"> Bill Title </label>
                                            <input type="text" class="form-control" required="" id="bill_logo" name="logo" value="' . $data['logo'] . '" >
                                        </div>
                                        </div> 
                                         <div class="col-md-2">
                                           <div class="form-group">
                                            <label for="exampleInputEmail1">. </label>
                                            <input type="submit" value="Logo" class="btn btn-primary btn-block" id="exampleInputEmail1" name="btn_logo">
                                        </div>
                                        </div> 
                                           </form>
                                        </div>


                                          <form method="post"  >
                                         <div class="row">
                                         <div class="col-md-10">
                                           <div class="form-group">
                                            <label for="exampleInputEmail1">Phone on Bill </label>
                                            <input type="number" class="form-control" id="phone" name="phone" value="' . $data['number'] . '">
                                        </div>
                                        </div>
                                         <div class="col-md-2">
                                           <div class="form-group">
                                            <label for="exampleInputEmail1">. </label>
                                            <input type="submit" value="Add Phone" class="btn btn-primary btn-block" id="exampleInputEmail1" name="btn_phone">
                                        </div>
                                        </div>
                                           </form>
                                        </div>
                                     <form method="post">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Address on Bill</label>
                                            <textarea  class="form-control" id="exampleInputEmail1" name="add" placeholder="Enter Paid for">' . $data['address'] . '</textarea>
                                            <br>
                                             
                                      
                                        </div>
                                         
                                        <button type="submit" class="btn btn-block btn-info waves-effect waves-light m-r-10"  name="btn_add" >Add Address</button>
                                        

                                        
                                        
                                        
                                            
                                        
                                        
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>

                    
                </div>
');
        }
        ?>
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