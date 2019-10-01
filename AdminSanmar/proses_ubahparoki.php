<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil data NIS yang dikirim oleh form_ubah.php melalui URL
$kode_jadwalg = $_GET['kode_jadwal'];

// Ambil Data yang Dikirim dari Form
$kode_jadwal = $_POST['kode_jadwal'];
$tempat = $_POST['tempat'];
$waktu = $_POST['waktu'];
$pukul = $_POST['pukul'];

    // Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
    $query = "SELECT * FROM jadwal_misa WHERE kode_jadwal='".$kode_jadwal."'";
    $sql = mysqli_query($koneksi, $query); // Eksekusi/Jalankan query dari variabel $query
    $data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql

    // Proses ubah data ke Database
    $query = "UPDATE jadwal_misa SET tempat='".$tempat."', waktu='".$waktu."', pukul='".$pukul."' WHERE kode_jadwal='".$kode_jadwalg."'";
  
  //$sql = $data->query("UPDATE data_sakramen SET nama_sakramen='$nama_sakramen',keterangan='$keterangan' WHERE kode_sakramen='$kode_sakramen'");
    $sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query

    if($sql){ // Cek jika proses simpan ke database sukses atau tidak
      // Jika Sukses, Lakukan :
      header("location: misa_paroki.php"); // Redirect ke halaman index.php
    }else{
      // Jika Gagal, Lakukan :
      echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
      echo "<br><a href='edit_paroki.php'>Kembali Ke Form</a>";
    }
?>