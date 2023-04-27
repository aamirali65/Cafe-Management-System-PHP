<?php
include('header.php');
?>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper" style="min-height: 381px;">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">Dashboard</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
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
            <!-- Column -->
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <!-- Row -->
                        <div class="row">
                            <div class="col-8">
                                <h2>
                                    <?php echo ($ob->Today_expense()); ?>
                                    <i class="fa fa-caret-up font-22 text-succes"></i>
                                </h2>
                                <h6>Today Expense</h6>
                            </div>
                            <div class="col-4 align-self-center text-right  p-l-0">
                                <div id="sparklinedash3"> <img src="img/download.png"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <!-- Row -->
                        <div class="row">
                            <div class="col-8">
                                <h2 class=""><?php echo ($ob->monthly_expense()); ?> <i class="fa fa-caret-up font-22 text-succes"></i></h2>
                                <h6>Monthly Expense</h6>
                            </div>
                            <div class="col-4 align-self-center text-right p-l-0">
                                <div id="sparklinedash"> <img src="img/download.png"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <!-- Row -->
                        <div class="row">
                            <div class="col-8">
                                <h2>
                                    <?php echo ($ob->data_sum_order_today()) ?> <i class="fa fa-caret-up font-22 text-danger"></i></h2>
                                <a href="daily-items.php">
                                    <h6>Today Sale</h6>
                                </a>
                            </div>
                            <div class="col-4 align-self-center text-right p-l-0">
                                <div id="sparklinedash2">

                                    <img src="img/download.png">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <!-- Row -->
                        <div class="row">
                            <div class="col-8">
                                <h2>
                                    <?php echo ($ob->data_sum_order_month()) ?>
                                    <i class="fa fa-caret-down font-22 text-danger"></i>
                                </h2>
                                <a href="monthly-items.php">
                                    <h6>Month Sale</h6>
                                </a>
                            </div>
                            <div class="col-4 align-self-center text-right p-l-0">
                                <div id="sparklinedash4"> <img src="img/download.png"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Row -->
        <div class="row">
            <div class="col-lg-8 col-md-7">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-wrap">
                            <div>
                                <h4 class="card-title">Yearly Earning</h4>
                            </div>
                            <div class="ml-auto">
                                <ul class="list-inline">
                                    <li>
                                        <h6 class="text-muted text-success"><i class="fa fa-circle font-10 m-r-10 "></i>iMac</h6>
                                    </li>
                                    <li>
                                        <h6 class="text-muted  text-info"><i class="fa fa-circle font-10 m-r-10"></i>iPhone</h6>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <div id="morris-area-chart2" style="height: 405px; position: relative; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><svg height="405" version="1.1" width="649.328" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="overflow: hidden; position: relative;">
                                <desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.2.0</desc>
                                <defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><text x="32.84375" y="366" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal">
                                    <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">0</tspan>
                                </text>
                                <path fill="none" stroke="#e0e0e0" d="M45.34375,366H624.328" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.84375" y="280.75" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal">
                                    <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">75</tspan>
                                </text>
                                <path fill="none" stroke="#e0e0e0" d="M45.34375,280.75H624.328" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.84375" y="195.5" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal">
                                    <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">150</tspan>
                                </text>
                                <path fill="none" stroke="#e0e0e0" d="M45.34375,195.5H624.328" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.84375" y="110.25" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal">
                                    <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">225</tspan>
                                </text>
                                <path fill="none" stroke="#e0e0e0" d="M45.34375,110.25H624.328" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.84375" y="25" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal">
                                    <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">300</tspan>
                                </text>
                                <path fill="none" stroke="#e0e0e0" d="M45.34375,25H624.328" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="624.328" y="378.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)">
                                    <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2016</tspan>
                                </text><text x="527.8746676175263" y="378.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)">
                                    <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2015</tspan>
                                </text><text x="431.4213352350525" y="378.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)">
                                    <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2014</tspan>
                                </text><text x="334.9680028525787" y="378.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)">
                                    <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2013</tspan>
                                </text><text x="238.25041476494752" y="378.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)">
                                    <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2012</tspan>
                                </text><text x="141.79708238247377" y="378.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)">
                                    <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2011</tspan>
                                </text><text x="45.34375" y="378.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)">
                                    <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2010</tspan>
                                </text>
                                <path fill="#e2e5ea" stroke="none" d="M45.34375,366C69.45708309561844,329.05833333333334,117.68374928685533,222.49583333333334,141.79708238247377,218.23333333333332C165.9104154780922,213.9708333333333,214.1370816693291,317.71110351117187,238.25041476494752,331.9C262.42981178685534,346.12777017783856,310.7886058306709,356.08720930232556,334.9680028525787,331.9C359.08133594819714,307.7788759689922,407.30800213943405,149.32291666666666,431.4213352350525,138.66666666666666C455.5346683306709,128.01041666666666,503.7613345219078,253.75416666666663,527.8746676175263,246.64999999999998C551.9880007131446,239.54583333333332,600.2146669043816,123.03749999999998,624.328,81.83333333333331L624.328,366L45.34375,366Z" fill-opacity="0.4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 0.4;"></path>
                                <path fill="none" stroke="#b4becb" d="M45.34375,366C69.45708309561844,329.05833333333334,117.68374928685533,222.49583333333334,141.79708238247377,218.23333333333332C165.9104154780922,213.9708333333333,214.1370816693291,317.71110351117187,238.25041476494752,331.9C262.42981178685534,346.12777017783856,310.7886058306709,356.08720930232556,334.9680028525787,331.9C359.08133594819714,307.7788759689922,407.30800213943405,149.32291666666666,431.4213352350525,138.66666666666666C455.5346683306709,128.01041666666666,503.7613345219078,253.75416666666663,527.8746676175263,246.64999999999998C551.9880007131446,239.54583333333332,600.2146669043816,123.03749999999998,624.328,81.83333333333331" stroke-width="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                                <circle cx="45.34375" cy="366" r="0" fill="#b4becb" stroke="#b4becb" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                <circle cx="141.79708238247377" cy="218.23333333333332" r="0" fill="#b4becb" stroke="#b4becb" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                <circle cx="238.25041476494752" cy="331.9" r="0" fill="#b4becb" stroke="#b4becb" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                <circle cx="334.9680028525787" cy="331.9" r="0" fill="#b4becb" stroke="#b4becb" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                <circle cx="431.4213352350525" cy="138.66666666666666" r="0" fill="#b4becb" stroke="#b4becb" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                <circle cx="527.8746676175263" cy="246.64999999999998" r="0" fill="#b4becb" stroke="#b4becb" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                <circle cx="624.328" cy="81.83333333333331" r="0" fill="#b4becb" stroke="#b4becb" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                <path fill="#0ddbe4" stroke="none" d="M45.34375,366C69.45708309561844,337.5833333333333,117.68374928685533,260.8583333333333,141.79708238247377,252.33333333333331C165.9104154780922,243.8083333333333,214.1370816693291,311.9888964888281,238.25041476494752,297.8C262.42981178685534,283.57222982216143,310.7886058306709,151.47165982672138,334.9680028525787,138.66666666666666C359.08133594819714,125.89665982672138,407.30800213943405,179.87083333333334,431.4213352350525,195.5C455.5346683306709,211.12916666666666,503.7613345219078,263.7,527.8746676175263,263.7C551.9880007131446,263.7,600.2146669043816,212.55,624.328,195.5L624.328,366L45.34375,366Z" fill-opacity="0.4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 0.4;"></path>
                                <path fill="none" stroke="#01c0c8" d="M45.34375,366C69.45708309561844,337.5833333333333,117.68374928685533,260.8583333333333,141.79708238247377,252.33333333333331C165.9104154780922,243.8083333333333,214.1370816693291,311.9888964888281,238.25041476494752,297.8C262.42981178685534,283.57222982216143,310.7886058306709,151.47165982672138,334.9680028525787,138.66666666666666C359.08133594819714,125.89665982672138,407.30800213943405,179.87083333333334,431.4213352350525,195.5C455.5346683306709,211.12916666666666,503.7613345219078,263.7,527.8746676175263,263.7C551.9880007131446,263.7,600.2146669043816,212.55,624.328,195.5" stroke-width="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                                <circle cx="45.34375" cy="366" r="0" fill="#01c0c8" stroke="#01c0c8" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                <circle cx="141.79708238247377" cy="252.33333333333331" r="0" fill="#01c0c8" stroke="#01c0c8" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                <circle cx="238.25041476494752" cy="297.8" r="0" fill="#01c0c8" stroke="#01c0c8" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                <circle cx="334.9680028525787" cy="138.66666666666666" r="0" fill="#01c0c8" stroke="#01c0c8" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                <circle cx="431.4213352350525" cy="195.5" r="0" fill="#01c0c8" stroke="#01c0c8" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                <circle cx="527.8746676175263" cy="263.7" r="0" fill="#01c0c8" stroke="#01c0c8" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                <circle cx="624.328" cy="195.5" r="0" fill="#01c0c8" stroke="#01c0c8" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                            </svg>
                            <div class="morris-hover morris-default-style" style="left: 2.85155px; top: 263px; display: none;">
                                <div class="morris-hover-row-label">2010</div>
                                <div class="morris-hover-point" style="color: #b4becb">
                                    iMac:
                                    0
                                </div>
                                <div class="morris-hover-point" style="color: #01c0c8">
                                    iPhone:
                                    0
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-md-5">
                <!-- Column -->
                <div class="card card-default">
                    <div class="card-header">
                        <div class="card-actions">
                            <a class="" data-action="collapse"><i class="ti-minus"></i></a>
                            <a class="btn-minimize" data-action="expand"><i class="mdi mdi-arrow-expand"></i></a>
                            <a class="btn-close" data-action="close"><i class="ti-close"></i></a>
                        </div>
                        <h4 class="card-title m-b-0">Order Stats</h4>
                    </div>
                    <div class="card-body collapse show">
                        <div id="morris-donut-chart" class="ecomm-donute" style="height: 317px;"><svg height="317" version="1.1" width="289.656" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="overflow: hidden; position: relative; left: -0.328125px;">
                                <desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.2.0</desc>
                                <defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs>
                                <path fill="none" stroke="#26c6da" d="M144.828,248.38533333333334A89.88533333333334,89.88533333333334,0,0,0,147.341791353093,68.64982469979505" stroke-width="2" opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 1;"></path>
                                <path fill="#26c6da" stroke="#ffffff" d="M144.828,251.38533333333334A92.88533333333334,92.88533333333334,0,0,0,147.42569129293426,65.65099812926873L148.59868702963948,23.72473704969258A134.828,134.828,0,0,1,144.828,293.328Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                                <path fill="none" stroke="#1976d2" d="M147.341791353093,68.64982469979505A89.88533333333334,89.88533333333334,0,0,0,57.45939645169166,137.37891426884096" stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path>
                                <path fill="#1976d2" stroke="#ffffff" d="M147.42569129293426,65.65099812926873A92.88533333333334,92.88533333333334,0,0,0,54.543394464215865,136.67397993924908L18.635097989997163,127.99326195258126A129.828,129.828,0,0,1,148.4588537965707,28.7227813339031Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                                <path fill="none" stroke="#ef5350" d="M57.45939645169166,137.37891426884096A89.88533333333334,89.88533333333334,0,0,0,144.79976169017797,248.38532889766998" stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path>
                                <path fill="#ef5350" stroke="#ffffff" d="M54.543394464215865,136.67397993924908A92.88533333333334,92.88533333333334,0,0,0,144.7988192123974,251.3853287496259L144.7872133315679,288.3279935932451A129.828,129.828,0,0,1,18.635097989997163,127.99326195258126Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="144.828" y="148.5" text-anchor="middle" font-family="&quot;Arial&quot;" font-size="15px" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: Arial; font-size: 15px; font-weight: 800;" font-weight="800" transform="matrix(2.6437,0,0,2.6437,-238.5785,-258.0587)" stroke-width="0.37825970866585573">
                                    <tspan dy="4.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Top Three Sales</tspan>
                                </text><text x="144.828" y="168.5" text-anchor="middle" font-family="&quot;Arial&quot;" font-size="14px" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: Arial; font-size: 14px;" transform="matrix(1.7625,0,0,1.7625,-110.6159,-121.9932)" stroke-width="0.5673895629987836">
                                    <tspan dy="4.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">8,500</tspan>
                                </text>
                            </svg></div>
                        <ul class="list-inline m-t-20 text-center">
                            <li>
                                <h6 class="text-muted"><i class="fa fa-circle text-info"></i> Order
                                </h6>
                                <h4 class="m-b-0">8500</h4>
                            </li>
                            <li>
                                <h6 class="text-muted"><i class="fa fa-circle text-danger"></i> Pending</h6>
                                <h4 class="m-b-0">3630</h4>
                            </li>
                            <li>
                                <h6 class="text-muted"> <i class="fa fa-circle text-success"></i> Delivered</h6>
                                <h4 class="m-b-0">4870</h4>
                            </li>
                        </ul>

                    </div>
                </div>
                <!-- Column -->

                <!-- Column -->

            </div>
        </div>
        <!-- Row -->


        <!-- Row -->

        <!-- Row -->
        <!-- Row -->

        <!-- Row -->
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
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- footer -->
<!-- ============================================================== -->
<?php
include('footer.php');
?>