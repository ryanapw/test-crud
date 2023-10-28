<!DOCTYPE html>
<html lang="en">

<head>
	<title>
		<?= $title; ?>
	</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="" />
	<meta name="keywords" content="">
	<meta name="author" content="Phoenixcoded" />
	<!-- Favicon icon -->
	<link rel="icon" href="<?= base_url('assets/flat/') ?>dist/assets/images/favicon.ico" type="image/x-icon">

	<!-- vendor css -->
	<link rel="stylesheet" href="<?= base_url('assets/flat/') ?>dist/assets/css/style.css">



</head>

<body class="">
	<!-- [ Pre-loader ] start -->
	<div class="loader-bg">
		<div class="loader-track">
			<div class="loader-fill"></div>
		</div>
	</div>
	<!-- [ Pre-loader ] End -->
	<!-- [ navigation menu ] start -->
	<nav class="pcoded-navbar  ">
		<div class="navbar-wrapper  ">
			<div class="navbar-content scroll-div ">

				<div class="">
					<div class="main-menu-header">
						<div class="user-details">
							<img class="img-radius" src="<?= base_url('assets/flat/') ?>dist/assets/images/user/avatar-2.jpg" alt="User-Profile-Image">
							<div class="user-details">
								<span>John Doe</span>
								<div id="more-details">UX Designer<i class="fa fa-chevron-down m-l-5"></i></div>
							</div>
						</div>
					</div>
					<div class="collapse" id="nav-user-link">
						<ul class="list-unstyled">
							<li class="list-group-item"><a href="user-profile.html"><i
										class="feather icon-user m-r-5"></i>View Profile</a></li>
							<li class="list-group-item"><a href="#!"><i
										class="feather icon-settings m-r-5"></i>Settings</a></li>
							<li class="list-group-item"><a href="auth-normal-sign-in.html"><i
										class="feather icon-log-out m-r-5"></i>Logout</a></li>
						</ul>
					</div>
				</div>

				<ul class="nav pcoded-inner-navbar ">
					<li class="nav-item pcoded-menu-caption">
						<label>Menu</label>
					</li>
					<li class="nav-item">
						<a href="<?= base_url('home') ?>" class="nav-link "><span class="pcoded-micon"><i
									class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url('kategori') ?>" class="nav-link "><span class="pcoded-micon"><i
									class="feather icon-align-justify"></i></span><span
								class="pcoded-mtext">Kategori</span></a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url('konten') ?>" class="nav-link "><span class="pcoded-micon"><i
									class="feather icon-file-text"></i></span><span
								class="pcoded-mtext">Konten</span></a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- [ navigation menu ] end -->
	<!-- [ Header ] start -->
	<header class="navbar pcoded-header navbar-expand-lg navbar-light header-dark">


		<div class="m-header">
			<a class="mobile-menu" id="mobile-collapse" href="<?= base_url() ?>"><span></span></a>
			<a href="#!" class="b-brand">
				<!-- ========   change your logo hear   ============ -->
				<img src="<?= base_url('assets/flat/') ?>dist/assets/images/logo.png" alt="" class="logo">
				<img src="<?= base_url('assets/flat/') ?>dist/assets/images/logo-icon.png" alt="" class="logo-thumb">
			</a>
			<a href="href=" <?= base_url() ?>"" class="mob-toggler">
				<i class="feather icon-more-vertical"></i>
			</a>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="navbar-nav ml-auto">
				<li>
					<div class="dropdown drp-user">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="feather icon-user"></i>
						</a>
						<div class="dropdown-menu dropdown-menu-right profile-notification">
							<div class="pro-head">
								<img src="<?= base_url('assets/flat/') ?>dist/assets/images/user/avatar-1.jpg" class="img-radius" alt="User-Profile-Image">
								<span>John Doe</span>
								<a href="auth-signin.html" class="dud-logout" title="Logout">
									<i class="feather icon-log-out"></i>
								</a>
							</div>
							<ul class="pro-body">
								<li><a href="user-profile.html" class="dropdown-item"><i class="feather icon-user"></i>
										Profile</a></li>
								<li><a href="email_inbox.html" class="dropdown-item"><i class="feather icon-mail"></i>
										My Messages</a></li>
								<li><a href="auth-signin.html" class="dropdown-item"><i class="feather icon-lock"></i>
										Lock Screen</a></li>
							</ul>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</header>
	<!-- [ Header ] end -->



	<!-- [ Main Content ] start -->
	<div class="pcoded-main-container">
		<div class="pcoded-content">
			<!-- [ breadcrumb ] start -->
			<div class="page-header">
				<div class="page-block">
					<div class="row align-items-center">
						<div class="col-md-12">
							<div class="page-header-title">
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- [ breadcrumb ] end -->
			<!-- [ Main Content ] start -->
			<div id='myalert'>
				<?= $this->session->flashdata('alert', true) ?>
			</div>
			<?php echo $contents; ?>
			<!-- [ Main Content ] end -->
		</div>
	</div>
	<!-- [ Main Content ] end -->
	<!-- Warning Section start -->
	<!-- Older IE warning message -->
	<!--[if lt IE 11]>
		<div class="ie-warning">
			<h1>Warning!!</h1>
			<p>You are using an outdated version of Internet Explorer, please upgrade
			   <br/>to any of the following web browsers to access this website.
			</p>
			<div class="iew-container">
				<ul class="iew-download">
					<li>
						<a href="http://www.google.com/chrome/">
							<img src="assets/images/browser/chrome.png" alt="Chrome">
							<div>Chrome</div>
						</a>
					</li>
					<li>
						<a href="https://www.mozilla.org/en-US/firefox/new/">
							<img src="assets/images/browser/firefox.png" alt="Firefox">
							<div>Firefox</div>
						</a>
					</li>
					<li>
						<a href="http://www.opera.com">
							<img src="assets/images/browser/opera.png" alt="Opera">
							<div>Opera</div>
						</a>
					</li>
					<li>
						<a href="https://www.apple.com/safari/">
							<img src="assets/images/browser/safari.png" alt="Safari">
							<div>Safari</div>
						</a>
					</li>
					<li>
						<a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
							<img src="assets/images/browser/ie.png" alt="">
							<div>IE (11 & above)</div>
						</a>
					</li>
				</ul>
			</div>
			<p>Sorry for the inconvenience!</p>
		</div>
	<![endif]-->
	<!-- Warning Section Ends -->

	<!-- Required Js -->
	<script src="<?= base_url('assets/flat/') ?>dist/assets/js/vendor-all.min.js"></script>
	<script src="<?= base_url('assets/flat/') ?>dist/assets/js/plugins/bootstrap.min.js"></script>
	<script src="<?= base_url('assets/flat/') ?>dist/assets/js/pcoded.min.js"></script>
	<script>$('#myalert').delay('slow').slideDown('slow').delay(3000).slideUp(600);</script>

	<!-- Apex Chart -->
	<script src="<?= base_url('assets/flat/') ?>dist/assets/js/plugins/apexcharts.min.js"></script>


	<!-- custom-chart js -->
	<script src="<?= base_url('assets/flat/') ?>dist/assets/js/pages/dashboard-main.js"></script>
</body>

</html>