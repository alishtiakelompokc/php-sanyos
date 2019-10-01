<!DOCTYPE html>
<html lang="en">
<head>
	<title>Santo Yosep Purwokerto</title>
	<meta charset="UTF-8">
	<meta name="description" content="LibChurch Event Template">
	<meta name="keywords" content="event, libChurch, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lora:400,400i" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/themify-icons.css"/>
	<link rel="stylesheet" href="css/style.css"/>


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>
	
	<!-- header top section -->
	<div class="top-nav-section hidden-xs">
		<div class="container">
			<div class="row">
				<div class="col-sm-3 col-md-3 col-lg-3">
					<div class="social">
						<a href="#"><i class="ti-facebook"></i></a>
						<a href="#"><i class="ti-twitter-alt"></i></a>
						<a href="#"><i class="ti-google"></i></a>
						<a href="#"><i class="ti-instagram"></i></a>
					</div>
				</div>
				<div class="col-sm-6 col-md-7 col-lg-6">
					<div class="counter-top">
						
					</div>
				</div>
				<div class="col-sm-3 col-md-2 col-lg-3">
					<div class="user-input">
						
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Header section  -->
	<header class="header-section">
		<div class="container">		
			<!-- logo -->
			<a href="index.html" class="site-logo"><img src="img/santo%20yosep.png" alt=""></a>
			
			<!-- nav menu -->
			<div class="nav-switch">
				<i class="fa fa-bars"></i>
			</div>
			<nav class="main-menu">
				<ul>
					<li class="active"><a href="index.php">Home</a></li>
					<li><a href="about.php">Jadwal Misa</a></li>
					<li><a href="sermons.php">Sakramen</a></li>
					<li><a href="event.php">Galeri</a></li>
						<li><a href="kontak.php">Contact</a></li>
					<li><a href="login.php">Login</a></li>
                   
				
				</ul>
			</nav>
		</div>
	</header>
	<!-- Header section end -->


	<!-- Page info section -->
	<section class="page-info-section set-bg" data-setbg="img/be4.jpg">
		<div class="page-info-content">
			<div class="pi-inner">
				<div class="container">
					<h2>Kegiatan-kegiatan seputar Gereja Sanyos</h2>
					<div class="site-breadcrumb">
						<a href="#">Home</a> <i class="fa fa-angle-right"></i>
						<span>Galeri</span>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Page info section end -->


	<!-- Event section -->
	
	<!-- Event section end -->


	<!-- Event list section -->
	<section class="event-list-section spad">
		<div class="container">
			<div class="section-title title-left">
				
			</div>
			<div class="event-list">
				<!-- event list item -->
				<?php
				include 'koneksi.php';
				$query = mysqli_query($koneksi, "SELECT *, DAY(tanggal) AS hari, MONTH(tanggal) AS bulan FROM galeri");
				while ($data = mysqli_fetch_array($query)) {
				?>
				<div class="el-item">
					<div class="row">
						<div class="col-md-4">
							<div class="el-thubm set-bg" data-setbg="img/event/<?php echo $data['foto']; ?>"></div>
						</div>
						<div class="col-md-8" align="justify">
							<div class="el-content">
								<div class="el-header">
									<div class="el-date">
										<h2><?php echo $data['hari']; ?></h2>
											<?php echo "Bln ".$data['bulan']; ?>
									</div>
									<h3><?php echo $data['nama_kegiatan']; ?></h3>
									<div class="el-metas">
										<div class="el-meta"><i class="fa fa-calendar"></i> <?php echo $data['tanggal']." ".$data['waktu']; ?> </div>
										<div class="el-meta"><i class="fa fa-map-marker"></i> <?php echo $data['lokasi']; ?></div>
									</div>
								</div>
								<p><?php echo $data['keterangan']; ?></p>
								
							</div>
						</div>
					</div>
				</div>
			<?php } ?>
			</div>
			
		</div>
	</section>
	<!-- Event list section end-->


	<!-- Newsletter section -->
	
	<!-- Newsletter section end-->


	<!-- Footer top section -->
	
	<!-- Footer top section end-->


	<!-- Footer section -->
	<footer class="footer-section">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 copyright">
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
<p> &copy; Santo Yosep Purwokerto 2019</p>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				</div>
				<div class="col-sm-6">
					<div class="social">
						<a href="#"><i class="ti-facebook"></i></a>
						<a href="#"><i class="ti-twitter-alt"></i></a>
						<a href="#"><i class="ti-google"></i></a>
						<a href="#"><i class="ti-instagram"></i></a>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer section end -->


	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/jquery.countdown.js"></script>
	<script src="js/main.js"></script>

	<!-- load for map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0YyDTa0qqOjIerob2VTIwo_XVMhrruxo"></script>
	<script src="js/map.js"></script>

</body>
</html>