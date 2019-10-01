
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
       <h3 align="center"><span class='label'>Formulir Pendaftaran Sakramen Perkawinan</span></h3><br/>
   </td> 

  <br/>


<?php
    // Load file koneksi.php
    
$host = "localhost"; // Nama hostnya
$username = "root"; // Username
$password = ""; // Password (Isi jika menggunakan password)
$database = "sanmar"; // Nama databasenya

$connect = mysqli_connect($host, $username, $password, $database); // Koneksi ke MySQL

    
    $query = "select * from baptis_bayi order by kode_anak desc limit 1"; // Query untuk menampilkan semua data siswa
    $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
    while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
        ?><table class='table' >
         <tr>
        <?php
        echo "</tr>
        <tr>
        <td>Nama Lengkap Anak</td>
        <td>: ".$data['nama_lengkap']."</td>
        </tr>
        <tr>
        <td>Nama Permandian Anak</td>
        <td>: ".$data['nama_permandian_anak']."</td>
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
        <td>Jenis Kelamin</td>
        <td>: ".$data['jenis_kelamin']."</td>
        </tr>
        <tr>
        <td>Anak yang ke-</td>
        <td>: ".$data['anak_yang_ke']."</td>
        </tr>
        <tr>
        <td>Stasi</td>
        <td>: ".$data['stasi']."</td>
        </tr>
        <tr>
        <td>Nomor HP</td>
        <td>: ".$data['no_hp']."</td>
        </tr>
        <tr>
        <td>Nama Ayah</td>
        <td>: ".$data['nama_ayah']."</td>
        </tr>
        <tr>
        <td>Agama Ayah</td>
        <td>: ".$data['agama_ayah']."</td>
        </tr>
        <tr>
        <td>Pekerjaan Ayah</td>
        <td>: ".$data['pekerjaan_ayah']."</td>
        </tr>
        <tr>
        <td>Nama Ibu</td>
        <td>: ".$data['nama_ibu']."</td>
        </tr>
        <tr>
        <td>Agama Ibu</td>
        <td>: ".$data['agama_ibu']."</td>
        </tr>
        <tr>
        <td>Pekerjaan Ibu</td>
        <td>: ".$data['pekerjaan_ibu']."</td>
        </tr>
        
        <tr>
        <td>Tempat Sakramen Perkawinan</td>
        <td>: ".$data['tempat_sakramen_perkawinan']."</td>
        </tr><tr>
        <td>Status Perkawinan</td>
        <td>: ".$data['status_perkawinan']."</td>
        </tr>
        <tr>
        <td>Alamat Orangtua</td>
        <td>: ".$data['alamat_orangtua']."</td>
        </tr>
        <tr>
        <td>Stasi Orangtua</td>
        <td>: ".$data['stasi_orangtua']."</td>
        </tr>
        <tr>
        <td>Nama Wali Permandian</td>
        <td>: ".$data['nama_wali_permandian']."</td>
        </tr>
        <tr>
        <td>Tempat Permandian</td>
        <td>: ".$data['tempat_permandian']."</td>
        </tr>
        <tr>
        <td>Hari Permandian</td>
        <td>: ".$data['hari_permandian']."</td>
        </tr>
        <tr>
        <td>Tanggal Permandian</td>
        <td>: ".$data['tanggal_permandian']."</td>
        </tr>
        <tr>
        <td>Pastor yang mempermandikan</td>
        <td>: ".$data['pastor_yang_mempermandikan']."</td>
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