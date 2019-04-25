<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<?php include('include/head.php'); ?>
	<!-- switchery css -->
	<link rel="stylesheet" type="text/css" href="src/plugins/switchery/dist/switchery.css">
	<!-- bootstrap-tagsinput css -->
	<link rel="stylesheet" type="text/css" href="src/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">
	<!-- bootstrap-touchspin css -->
	<link rel="stylesheet" type="text/css" href="src/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css">
</head>
<body>
	<?php include('include/header.php'); ?>
	<?php include('include/sidebar.php'); ?>
	<div class="main-container">
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
				</div>
				<!-- Fade-in effect -->
				<div class="row clearfix">
					<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
						<div class="da-card box-shadow">
							<div class="da-card-photo">
								<img src="vendors/images/photo2.jpg" alt="">
								<div class="da-overlay">
									<div class="da-social">
										<ul class="clearfix">
											<!-- <li><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#"><i class="fa fa-envelope-o"></i></a></li> -->
										</ul>
									</div>
								</div>
							</div>
							<div class="da-card-content">
								<h5 class="weight-500 mb-10">Caleg No 1</h5>
								<form method="post" action="proses.php">
								<input type="checkbox" checked class="switch-btn" data-color="#0099ff" name="vote" value="1">
								<button type="submit" class="btn btn-success" name="insert">Coblos</button>
								</form>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
						<div class="da-card box-shadow">
							<div class="da-card-photo">
								<img src="vendors/images/photo2.jpg" alt="">
								<div class="da-overlay">
									<div class="da-social">
										<ul class="clearfix">
										<!-- 	<li><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#"><i class="fa fa-envelope-o"></i></a></li> -->
										</ul>
									</div>
								</div>
							</div>
							<div class="da-card-content">
								<h5 class="weight-500 mb-10">Caleg No 2</h5>
								<form method="post" action="proses_1.php">
								<input type="checkbox" checked class="switch-btn" data-color="#0099ff">
								<button type="submit" class="btn btn-success" name="insert">Coblos</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			<?php include('include/footer.php'); ?>
		</div>
	</div>
	<?php include('include/script.php'); ?>
	<!-- switchery js -->
	<script src="src/plugins/switchery/dist/switchery.js"></script>
	<!-- bootstrap-tagsinput js -->
	<script src="src/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.js"></script>
	<!-- bootstrap-touchspin js -->
	<script src="src/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js"></script>
	<script>
		// Switchery
		var elems = Array.prototype.slice.call(document.querySelectorAll('.switch-btn'));
		$('.switch-btn').each(function() {
			new Switchery($(this)[0], $(this).data());
		});

		// Bootstrap Touchspin
		$("input[name='demo_vertical2']").TouchSpin({
			verticalbuttons: true,
			verticalupclass: 'fa fa-plus',
			verticaldownclass: 'fa fa-minus'
		});
		$("input[name='demo3']").TouchSpin();
		$("input[name='demo1']").TouchSpin({
			min: 0,
			max: 100,
			step: 0.1,
			decimals: 2,
			boostat: 5,
			maxboostedstep: 10,
			postfix: '%'
		});
		$("input[name='demo2']").TouchSpin({
			min: -1000000000,
			max: 1000000000,
			stepinterval: 50,
			maxboostedstep: 10000000,
			prefix: '$'
		});
		$("input[name='demo3_22']").TouchSpin({
			initval: 40
		});
		$("input[name='demo5']").TouchSpin({
			prefix: "pre",
			postfix: "post"
		});
	</script>
</body>
</html>