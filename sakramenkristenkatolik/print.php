
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
      </tr>
       
  <tr>
   <td>
       <h3 align="center"><span class='label'>Formulir Pendaftaran Pindahan Kristen Ke Katolik</span></h3><br/>
   </td> 

  <br/>


<?php
    // Load file koneksi.php
    
$host = "localhost"; // Nama hostnya
$username = "root"; // Username
$password = ""; // Password (Isi jika menggunakan password)
$database = "sanmar"; // Nama databasenya

$connect = mysqli_connect($host, $username, $password, $database); // Koneksi ke MySQL

    
    $query = "select * from pindahan_kristenkatolik order by kode_pindahan desc limit 1"; // Query untuk menampilkan semua data siswa
    $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
    
    while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
        echo "<table class='table' >
        <tr>
        <td>Nama Lengkap</td>
        <td>: ".$data['nama_lengkap']."</td>
        </tr>
        <tr>
        <td>Tempat Lahir</td>
        <td>: ".$data['tempat_lahir']."</td>
        </tr>
        
        <tr>
        <td>Tanggal Lahir</td>
        <td>: ".$data['tgl_lahir']."</td>
        </tr>
        <tr>
        <td>Umur</td>
        <td>: ".$data['umur']."</td>
        </tr>
        <tr>
        <td>Jenis Kelamin</td>
        <td>: ".$data['jenis_kelamin']."</td>
        </tr>
        <tr>
        <td>Agama Sebelumnya</td>
        <td>: ".$data['agama_sebelumnya']."</td>
        </tr>
        <tr>
        <td>Pendidikan</td>
        <td>: ".$data['pekerjaan']."</td>
        </tr>
        
        <tr>
        <td>Pekerjaan</td>
        <td>: ".$data['pekerjaan']."</td>
        </tr>
        <tr>
        <td>Alamat Lengkap</td>
        <td>: ".$data['alamat_lengkap']."</td>
        </tr>
        <tr>
        <td>Nomor Telephone</td>
        <td>: ".$data['no_tlp']."</td>
        </tr>
        <tr>
        <td>Nama Suami Isteri</td>
        <td>: ".$data['nama_suami_isteri']."</td>
        </tr>
        <tr>
        <td>Status Perkawinan</td>
        <td>: ".$data['status_perkawinan']."</td>
        </tr>
        <tr>
        <td>Tempat Perkawinan</td>
        <td>: ".$data['tempat_perkawinan']."</td>
        </tr>
        <tr>
        <td>Tanggal Perkawinan</td>
        <td>: ".$data['tgl_perkawinan']."</td>
        </tr>
        <tr>
        <td>Nama Ayaha</td>
        <td>: ".$data['nama_ayah']."</td>
        </tr>
        <tr>
        <td>Nama Ibu</td>
        <td>: ".$data['nama_ibu']."</td>
        </tr>
        <tr>
        <td>Agama Ayah</td>
        <td>: ".$data['agama_ayah']."</td>
        </tr>
        <tr>
        <td>Agama Ibu</td>
        <td>: ".$data['agama_ibu']."</td>
        </tr>
        <tr>
        <td>Alamat Orang Tua</td>
        <td>: ".$data['alamat_ortu']."</td>
        </tr>
        <tr>
        <td>Tanggal Daftar</td>
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