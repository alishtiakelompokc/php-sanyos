<?php
session_start();
//Membuat kondisi kalau misal sudah login, maka akan masuk ke sistem
if (isset($_SESSION['username'])) {
$username = $_SESSION['username'];
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Santo Yosep</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href=img src="images/logo4.jpg" alt="Logo">
    <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>
    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i>Home</a>
                        <ul class="sub-menu children dropdown-menu">                            <li><i class="fa fa-puzzle-piece"></i><a href="ui-buttons.html">Buttons</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="ui-badges.html">Badges</a></li>
                            <li><i class="fa fa-bars"></i><a href="ui-tabs.html">Tabs</a></li>

                            <li><i class="fa fa-id-card-o"></i><a href="ui-cards.html">Cards</a></li>
                            <li><i class="fa fa-exclamation-triangle"></i><a href="ui-alerts.html">Alerts</a></li>
                            <li><i class="fa fa-spinner"></i><a href="ui-progressbar.html">Progress Bars</a></li>
                            <li><i class="fa fa-fire"></i><a href="ui-modals.html">Modals</a></li>
                            <li><i class="fa fa-book"></i><a href="ui-switches.html">Switches</a></li>
                            <li><i class="fa fa-th"></i><a href="ui-grids.html">Grids</a></li>
                            <li><i class="fa fa-file-word-o"></i><a href="ui-typgraphy.html">Typography</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Jadwal Misa</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="misa_paroki.php">Jadwal Paroki</a></li>
                            <li><i class="fa fa-table"></i><a href="misa_stasi.php">Jadwal Stasi</a></li>
                        </ul>
                    </li>
                   <li>
                        <a href="baptis.php"> <i class="menu-icon fa fa-th"></i>Sakramen </a>
                    </li>
                    

                                      <li>
                        <a href="pengumuman.php"> <i class="menu-icon fa fa-tasks"></i>Pengumuman </a>
                    </li>
                    
                    <li>
                        <a href="kontak.php"> <i class="menu-icon ti-email"></i>Contact </a>
                    </li>
                    
                    <li>
                        <a href="galeri.php"> <i class="menu-icon fa fa-bar-chart"></i>Galeri </a>
                    </li>

                                       
                    <li>
                        <a href="data_pastor.php"> <i class="menu-icon fa fa-table"></i>Data Pastor </a>
                    </li>
                    <li>
                        <a href="data_kematian.php"> <i class="menu-icon fa fa-table"></i>Data Kematian </a>
                    </li>
                       <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Data Pendaftaran</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="data_baptis.php">Pendaftaran Baptis</a></li>
                            <li><i class="fa fa-table"></i><a href="data_katekumen.php">Pendaftaran Katekumen</a></li>
                            <li><i class="fa fa-table"></i><a href="data_pindahan.php">Pendaftaran Pindahan Kristen Katolik</a></li>
                            <li><i class="fa fa-table"></i><a href="data_komuni.php">Pendaftaran Komuni</a></li>
                            <li><i class="fa fa-table"></i><a href="data_pernikahan.php">Pendaftaran Pernikahan</a></li>
                            <li><i class="fa fa-table"></i><a href="data_krisma.php">Pendaftaran Krisma</a></li>
                           
                        </ul>
                    </li>
                     
                    
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Laporan</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="laporan_baptis.php">Laporan Baptis</a></li>
                            <li><i class="fa fa-table"></i><a href="laporan_katekumen.php">Laporan Katekumen</a></li>
                            <li><i class="fa fa-table"></i><a href="laporan_pindahan.php">Laporan Pindahan Kristen Katolik</a></li>
                            <li><i class="fa fa-table"></i><a href="laporan_komuni.php">Laporan Komuni</a></li>
                            <li><i class="fa fa-table"></i><a href="laporan_pernikahan.php">Laporan Pernikahan</a></li>
                            <li><i class="fa fa-table"></i><a href="laporan_krisma.php">Laporan Krisma</a></li>
                             <li><i class="fa fa-table"></i><a href="laporan_kematian.php">Laporan Kematian</a></li>
                        </ul>
                    </li>
                    
                    <li>
                        <a href="logout.php"> <i class="menu-icon ti-email"></i>Logout </a>
                    </li>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="./"><img src="images/logo4.jpg" alt="Logo"></a>
                    <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="header-left">
                       
                        
                    </div>
                       

                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/admin2.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa-user"></i>My Profile</a>

                          

                            <a class="nav-link" href="#"><i class="fa fa-power-off"></i>Logout</a>
                        </div>
                    </div>
                </div>
             </div>   
        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Contact</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">Contact</a></li>
                                    
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        


  <form action="tambah_kontak.php" method="post" onSubmit="return validasi()">
                <label></label>
              <div class="row">
                
                <div class="col-md-2">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Kode Kontak" name="kode_kontak" id="kode_kontak">
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Alamat" name="alamat" id="alamat">
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-group">
                    <input type="email" class="form-control" placeholder="Email" name="email" id="email">
                  </div>
                </div>
                 <div class="col-md-2">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Nomor Telepon" name="kontak" id="kontak">
                  </div>
               
                <br>
                <div class="col-md-12">
                  <input type="submit" class="btn btn-outline-success btn-block" value="Tambahkan">
                </div>
                <div class="col-md-3"></div>
              </div>
              
<br>

 <div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title"></strong>
                            </div>

        <table class="table table-striped"> 
                    <thead>
                        <th>No</th>
                        <th>Kode Kontak</th>
                        <th>Alamat</th>
                        <th>Email</th>
                        <th>Nomor Telpon</th>
                        <th>Aksi</th>
                    </thead>
                    <tbody>
                          <?php
                        // Load file koneksi.php
                        include "koneksi.php";

                        $query = "SELECT * FROM kontak";
                        $sql = mysqli_query($koneksi, $query);
                        
						$nomor = 1;
                        while($data = mysqli_fetch_array($sql)){
                        ?>
                            <tr>
                                <td><?php echo $nomor; ?></td>
                                <td><?php echo $data['kode_kontak']; ?></td>
                                <td><?php echo $data['alamat']; ?></td>
                                <td><?php echo $data['email']; ?></td>
                                <td><?php echo $data['kontak']; ?></td>
                               
                               <td> <a href='delete_kontak.php?id=<?php echo $data['kode_kontak'];?>'>Hapus</a></td>
                                <td> <a href='edit_kontak.php?kode_kontak=<?php echo $data['kode_kontak'];?>'>Edit</a></td>
                            </tr>
                          
                        <?php
                        $nomor++;
                        }
                        ?>
                    </tbody>
                </table>
        
       

    <div class="clearfix"></div>

    <footer class="site-footer">
        <div class="footer-inner bg-white">
            <div class="row">
                <div class="col-sm-6">
                    Copyright &copy; Sanyos 2019
                </div>
                <div class="col-sm-6 text-right">
                    Designed by <a href="https://colorlib.com">Kelompok C</a>
                </div>
            </div>
        </div>
    </footer>

</div><!-- /#right-panel -->

<!-- Right Panel -->

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
<script src="assets/js/main.js"></script>

    <script src="js/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
  <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

  <script>
      $(document).ready( function () {
    $('.table').DataTable();
    } );
  </script>

</body>
</html>
<?php
}
//kalau misal belum login, menuju ke login.php
else{
    echo "<script>window.location = 'login.php';</script>";
}
?>