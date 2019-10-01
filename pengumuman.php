<?php
session_start();
//Membuat kondisi kalau misal sudah login, maka akan masuk ke sistem
if (isset($_SESSION['username'])) {
$username = $_SESSION['username'];
?>
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
						<li><a href="sakramen.html">Sakramen</a></li>
					<li><a href="pengumuman.html">Pengumuman</a></li>
					<li><a href="logout.php">Logout</a></li>
					
			</nav>
		</div>
	</header>
	<!-- Header section end -->



	<!-- Page info section -->
	<section class="page-info-section set-bg" data-setbg="img/be4.jpg">
		<div class="page-info-content">
			<div class="pi-inner">
				<div class="container">
					<h2>Pengumuman</h2>
					<div class="site-breadcrumb">
						<a href="#">Home</a> <i class="fa fa-angle-right"></i>
						<span>Pengumuman</span>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Page info section end -->


	<!-- Sermon section -->
	
		
	<!-- Sermon section end -->


	<!-- Sermons list section -->
	<section class="sermons-list-section spad">
		<div class="container">
			<div class="section-title">
				
				<h2>Syarat Pendaftaran dan Pengumuman Jadwal Pelajaran</h2>
			</div>
			<div class="row">
				<?php
				include 'koneksi.php';
				$query = mysqli_query($koneksi, "SELECT * FROM pengumuman ORDER BY kode_pengumuman ASC");
				while ($data = mysqli_fetch_array($query)) {
				?>
				<div class="col-sm-6 col-md-4">
					<div class="sermon-item">
						<div class="si-thumb set-bg" data-setbg="img/sermons/<?php echo $data['foto']; ?>"></div>
						<div class="si-content">
							<h4><?php echo $data['keterangan']; ?></h4>
						</div>
					</div>
				</div>
				<?php } ?>
				
				<div class="col-sm-6 col-md-4">
				</div>
		</div>
	</section>
	<!-- Sermons list section end -->


	<!-- Newsletter section -->
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
  <?php
}
//kalau misal belum login, menuju ke login.php
else{
    echo "<script>window.location = 'login.php';</script>";
}
?>