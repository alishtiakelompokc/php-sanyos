<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil data NIS yang dikirim oleh form_ubah.php melalui URL
$kode_stasig = $_GET['kode_stasi'];

// Ambil Data yang Dikirim dari Form
$kode_stasi = $_POST['kode_stasi'];
$tempat = $_POST['tempat'];
$waktu = $_POST['waktu'];
$pukul = $_POST['pukul'];

    // Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
    $query = "SELECT * FROM misa_stasi WHERE kode_stasi='".$kode_stasi."'";
    $sql = mysqli_query($koneksi, $query); // Eksekusi/Jalankan query dari variabel $query
    $data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql

    // Proses ubah data ke Database
    $query = "UPDATE misa_stasi SET tempat='".$tempat."', waktu='".$waktu."', pukul='".$pukul."' WHERE kode_stasi='".$kode_stasig."'";
  
  //$sql = $data->query("UPDATE data_sakramen SET nama_sakramen='$nama_sakramen',keterangan='$keterangan' WHERE kode_sakramen='$kode_sakramen'");
    $sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query

    if($sql){ // Cek jika proses simpan ke database sukses atau tidak
      // Jika Sukses, Lakukan :
      header("location: misa_stasi.php"); // Redirect ke halaman index.php
    }else{
      // Jika Gagal, Lakukan :
      echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
      echo "<br><a href='edit_stasi.php'>Kembali Ke Form</a>";
    }
?>