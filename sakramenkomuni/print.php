
<html>
<head>
	<title>Print Document</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4">
  <table class='table' align="center">
  <center>
  <tr>
  <td>
      <img align="center" src='../img/logo4.jpg' width='80'>
  </td>
   <td>
       <h3 align="center"><span class='label'>Formulir Pendaftaran Sakramen Komuni</span></h3><br/>
   </td> 

  <br/>


<?php
    // Load file koneksi.php
    
$host = "localhost"; // Nama hostnya
$username = "root"; // Username
$password = ""; // Password (Isi jika menggunakan password)
$database = "sanmar"; // Nama databasenya

$connect = mysqli_connect($host, $username, $password, $database); // Koneksi ke MySQL

    
    $query = "select nama_lengkap,nama_baptis,tempat_lahir,tanggal_lahir,tempat_baptis,tanggal_baptis,nama_ayah,nama_ibu,alamat, stasi, kode_komuni,tgl_daftar, foto_pendaftar from komuni order by kode_komuni desc limit 1"; // Query untuk menampilkan semua data siswa
    $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
    
    $query = "select * from komuni order by kode_komuni desc limit 1"; // Query untuk menampilkan semua data siswa
    $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
      
    while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
        echo "<table class='table' >
         
        <tr>
        <td>Nama Lengkap</td>
        <td>: ".$data['nama_lengkap']."</td>
        </tr>
        <tr>
        <td>Nama Baptis</td>
        <td>: ".$data['nama_baptis']."</td>
        </tr>
        
        <tr>
        <td>Tempat Lahir</td>
        <td>: ".$data['tempat_lahir']."</td>
        </tr>
        <tr>
        <td>Tanggal Lahir</td>
        <td>: ".$data['tanggal_lahir']."</td>
        </tr>
        <tr>
        <td>Tempat baptis</td>
        <td>: ".$data['tempat_baptis']."</td>
        </tr>
        <tr>
        <td>Tangga baptis</td>
        <td>: ".$data['tanggal_baptis']."</td>
        </tr>
        <tr>
        <td>Nama Ayah</td>
        <td>: ".$data['nama_ayah']."</td>
        </tr>
        
        <tr>
        <td>Nama Ibu</td>
        <td>: ".$data['nama_ibu']."</td>
        </tr>
        <tr>
        <td>Alamat</td>
        <td>: ".$data['alamat']."</td>
        </tr>
        <tr>
        <td>Stasi</td>
        <td>: ".$data['stasi']."</td>
        </tr>
        <tr>
        <td>Tanggal daftar</td>
        <td>: ".$data['tgl_daftar']."</td>
        </tr>
        
        
        
        
        
       
        
        </table>
        ";
        
    }
    ?>
        
    </table>
    </center>
    <script>
		window.load = print_d();
		function print_d(){
			window.print();
		}
	</script>
    </div>
</div>
</body>
</html>