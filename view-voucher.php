<?php
include('header.php');
?>
<div class="page-wrapper">

    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">Voucher Data</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>

                <li class="breadcrumb-item active">Voucher Data</li>
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
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Data Export</h4>
                        <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
                        <div class="table-responsive m-t-40">
                            <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>Serial No</th>
                                        <th>Membership</th>
                                        <th>Name</th>
                                        <th>Duration</th>
                                        <th>Contact</th>
                                        <th>Date</th>
                                        <th>Total</th>
                                        <th>Advance</th>
                                        <th>Balance</th>
                                    </tr>
                                </thead>

                                <?php
                                foreach ($ob->voucer_view() as $vo) {

                                    echo ('
                                            <tr>
                                                <td>' . $vo['s_no'] . '</td>
                                           		<td>' . $vo['m_no'] . '</td>
                                                <td>' . $vo['name'] . '</td>
                                               <td>' . $vo['duration'] . '</td>
											   <td>' . $vo['num'] . '</td>
											   <td>' . $vo['payment_date'] . '</td>
											   <td>' . $vo['total'] . '</td>
											   <td>' . $vo['advance'] . '</td>
											   <td>' . $vo['balance'] . '</td>
											   
                                                                                         </tr>
                                          
                                           ');
                                }
                                ?>
                                </tbody>
                            </table>
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

        <!-- ============================================================== -->
        <!-- End Right sidebar -->
        <!-- ============================================================== -->
    </div>

    <?php
    include('footer.php');
    ?>