<?php
include('header.php');

?>
<link rel="stylesheet" href="css/calender.css">
<div class="page-wrapper" sty>
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
<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Calendar #01</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
				<input type="text" id="datepicker" name=""/>
				</div>
			</div>
		</div>
	</section>
	<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
  <script src="https://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
  <script>
$(document).ready(function() {
  $('#datepicker').datepicker({
    touch: true
  }).datepicker('show');
});

  </script>
    <scipt src="js/main.js"></scipt>