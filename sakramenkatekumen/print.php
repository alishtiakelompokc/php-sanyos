
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
       <h3 align="center"><span class='label'>Formulir Pendaftaran Katekumen</span></h3><br/>
   </td> 

  <br/>


<?php
    // Load file koneksi.php
    
$host = "localhost"; // Nama hostnya
$username = "root"; // Username
$password = ""; // Password (Isi jika menggunakan password)
$database = "sanmar"; // Nama databasenya

$connect = mysqli_connect($host, $username, $password, $database); // Koneksi ke MySQL

    
    $query = "select * from katekumen order by kode_katekumen desc limit 1"; // Query untuk menampilkan semua data siswa
    $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
    
    while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
        echo "<table class='table' >
        <tr>
        <td>Nama Lengkap</td>
        <td>: ".$data['nama_lengkap']."</td>
        </tr>
        <tr>
        <td>Nama Permandian</td>
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
        <td>Stasi</td>
        <td>: ".$data['stasi']."</td>
        </tr>
        <tr>
        <td>Agama sebelumnya</td>
        <td>: ".$data['agama_sebelumnya']."</td>
        </tr>
        <tr>
        <td>Ijazah terakhir</td>
        <td>: ".$data['ijazah_terakhir']."</td>
        </tr>
         <tr>
        <td>Pekerjaan</td>
        <td>: ".$data['stasi']."</td>
        </tr>
         <tr>
        <td>Nama Anak-anak</td>
        <td>: ".$data['stasi']."</td>
        </tr>
         <tr>
        <td>Alamat sekarang</td>
        <td>: ".$data['stasi']."</td>
        </tr>
         <tr>
        <td>Nama Suami/Isteri</td>
        <td>: ".$data['stasi']."</td>
        </tr>
        <tr>
        <td>Pekerjaan Suami/Isteri</td>
        <td>: ".$data['nama_ayah']."</td>
        </tr>
        <tr>
        <td>Status Perkawinan</td>
        <td>: ".$data['nama_ibu']."</td>
        </tr>
        <tr>
        <td>Tempat Perkawinan</td>
        <td>: ".$data['tempat_perkawinan']."</td>
        </tr>
         <tr>
        <td>Tanggal Perkawinan</td>
        <td>: ".$data['stasi']."</td>
        </tr>
        <tr>
        <td>Jumlah Anak-anak</td>
        <td>: ".$data['stasi']."</td>
        </tr>
         <tr>
        <td>Nama Ayah</td>
        <td>: ".$data['stasi']."</td>
        </tr>
         <tr>
        <td>Agama Ayah</td>
        <td>: ".$data['stasi']."</td>
        </tr>
 <tr>
        <td>Pekerjaan Ayah</td>
        <td>: ".$data['stasi']."</td>
        </tr>
         <tr>
        <td>Nama Ibu</td>
        <td>: ".$data['stasi']."</td>
        </tr>
         <tr>
        <td>Agama Ibu</td>
        <td>: ".$data['stasi']."</td>
        </tr>
        <tr>
        <td>Pekerjaan Ibu</td>
        <td>: ".$data['stasi']."</td>
        </tr>
         <tr>
        <td>Alamat Orangtua</td>
        <td>: ".$data['stasi']."</td>
        </tr>
         <tr>
        <td>Nama Guru Agama</td>
        <td>: ".$data['stasi']."</td>
        </tr>
         <tr>
        <td>Wali Permandian</td>
        <td>: ".$data['stasi']."</td>
        </tr>
         <tr>
        <td>Pastor yang mempermandikan</td>
        <td>: ".$data['stasi']."</td>
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