<!doctype html>
<html lang="en">

<head>
	<title>AESOFIS</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="<?= base_url()?>asset/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url()?>asset/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?= base_url()?>asset/vendor/linearicons/style.css">
	<link rel="stylesheet" href="<?= base_url()?>asset/vendor/chartist/css/chartist-custom.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="<?= base_url()?>asset/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="<?= base_url()?>asset/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="<?= base_url()?>https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="<?= base_url()?>asset/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?= base_url()?>asset/img/favicon.png">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				<a href="<?= base_url()?>index.php/user/home"><img src="<?= base_url()?>asset/img/capture2.png" style="width: 100px; height:30px;"></a>
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>

				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
						<?php if($this->session->userdata('level')=="kasir"):?>
						<a href="<?= base_url()?>#" class="dropdown-toggle" data-toggle="dropdown"><img src="<?= base_url()?>asset/img/rere.jpg" style="width:30px; height:30px;" class="img-circle" alt="Avatar"> <span>Rere</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="<?= base_url()?>index.php/user/profil_kasir"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
						<?php elseif($this->session->userdata('level')=="user"):?>
						<a href="<?= base_url()?>#" class="dropdown-toggle" data-toggle="dropdown"><img src="<?= base_url()?>asset/img/kang.png" style="width:30px; height:30px;" class="img-circle" alt="Avatar"> <span>Seulgi</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="<?= base_url()?>index.php/user/profil_user"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
						<?php elseif($this->session->userdata('level')=="admin"):?>
							<a href="<?= base_url()?>#" class="dropdown-toggle" data-toggle="dropdown"><img src="<?= base_url()?>asset/img/user-medium.jpg" style="width:30px; height:30px;" class="img-circle" alt="Avatar"> <span>Lyra</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="<?= base_url()?>index.php/user/page_profile"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
								<?php endif?>
								<li><a href="<?= base_url()?>index.php/user/logout"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
							</ul>
						</li>
					</ul>
		</nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
					<li><a href="<?= base_url()?>index.php/user/home"><span><i class="fa fa-home"></i></span><span>Beranda</span></a></li>
						<li><a href="<?= base_url()?>index.php/atk/toko"><span><i class="fa fa-file-photo-o"></i></span><span>Galeri</span></a></li>
						<?php if($this->session->userdata('level')=="user"):?>
						<li><a href="<?= base_url()?>index.php/kategori/kategori_user"><span><i class="fa fa-list"></i></span><span>Kategori Barang</span></a></li>
						<li><a href="<?= base_url()?>index.php/atk/barang_user"><span><i class="fa fa-list-alt"></i></span><span>Daftar Barang</span></a></li>
						<?php elseif($this->session->userdata('level')=="admin"):?>
						<li><a href="<?= base_url()?>index.php/kategori"><span><i class="fa fa-list"></i></span> <span>Kategori</span></a></li>
						<li><a href="<?= base_url()?>index.php/atk"><span><i class="fa fa-list-alt"></i></span><span>Barang</span></a></li>
						<li><a href="<?= base_url()?>index.php/pesanan"><span><i class="fa fa-history"></i></span><span>Histori Pesanan</span></a></li>
						<?php elseif($this->session->userdata('level')=="kasir"):?>
						<li><a href="<?= base_url()?>index.php/transaksi"><span><i class="fa fa-credit-card"></i></span><span>Transaksi</span></a></li>
						<li><a href="<?= base_url()?>index.php/pesanan"><span><i class="fa fa-history"></i></span><span>Histori Pesanan</span></a></li>
						<?php endif?>
					</ul>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
            <!-- MAIN CONTENT -->
            <?php
        $this->load->view($konten);
        ?>
		</div>
		<!-- END MAIN -->
		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">&copy; 2017 <a href="<?= base_url()?>https://www.themeineed.com" target="_blank">Theme I Need</a>. All Rights Reserved.</p>
			</div>
		</footer>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="<?= base_url()?>asset/vendor/jquery/jquery.min.js"></script>
	<script src="<?= base_url()?>asset/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?= base_url()?>asset/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="<?= base_url()?>asset/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
	<script src="<?= base_url()?>asset/vendor/chartist/js/chartist.min.js"></script>
	<script src="<?= base_url()?>asset/scripts/klorofil-common.js"></script>
	<script>
	$(function() {
		var data, options;

		// headline charts
		data = {
			labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
			series: [
				[23, 29, 24, 40, 25, 24, 35],
				[14, 25, 18, 34, 29, 38, 44],
			]
		};

		options = {
			height: 300,
			showArea: true,
			showLine: false,
			showPoint: false,
			fullWidth: true,
			axisX: {
				showGrid: false
			},
			lineSmooth: false,
		};

		new Chartist.Line('#headline-chart', data, options);


		// visits trend charts
		data = {
			labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
			series: [{
				name: 'series-real',
				data: [200, 380, 350, 320, 410, 450, 570, 400, 555, 620, 750, 900],
			}, {
				name: 'series-projection',
				data: [240, 350, 360, 380, 400, 450, 480, 523, 555, 600, 700, 800],
			}]
		};

		options = {
			fullWidth: true,
			lineSmooth: false,
			height: "270px",
			low: 0,
			high: 'auto',
			series: {
				'series-projection': {
					showArea: true,
					showPoint: false,
					showLine: false
				},
			},
			axisX: {
				showGrid: false,

			},
			axisY: {
				showGrid: false,
				onlyInteger: true,
				offset: 0,
			},
			chartPadding: {
				left: 20,
				right: 20
			}
		};

		new Chartist.Line('#visits-trends-chart', data, options);


		// visits chart
		data = {
			labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
			series: [
				[6384, 6342, 5437, 2764, 3958, 5068, 7654]
			]
		};

		options = {
			height: 300,
			axisX: {
				showGrid: false
			},
		};

		new Chartist.Bar('#visits-chart', data, options);


		// real-time pie chart
		var sysLoad = $('#system-load').easyPieChart({
			size: 130,
			barColor: function(percent) {
				return "rgb(" + Math.round(200 * percent / 100) + ", " + Math.round(200 * (1.1 - percent / 100)) + ", 0)";
			},
			trackColor: 'rgba(245, 245, 245, 0.8)',
			scaleColor: false,
			lineWidth: 5,
			lineCap: "square",
			animate: 800
		});

		var updateInterval = 3000; // in milliseconds

		setInterval(function() {
			var randomVal;
			randomVal = getRandomInt(0, 100);

			sysLoad.data('easyPieChart').update(randomVal);
			sysLoad.find('.percent').text(randomVal);
		}, updateInterval);

		function getRandomInt(min, max) {
			return Math.floor(Math.random() * (max - min + 1)) + min;
		}

	});
	</script>
</body>

</html>
