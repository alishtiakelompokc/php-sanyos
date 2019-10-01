<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil data NIS yang dikirim oleh form_ubah.php melalui URL
$kode_kontakg = $_GET['kode_kontak'];

// Ambil Data yang Dikirim dari Form
$kode_kontak = $_POST['kode_kontak'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$kontak = $_POST['kontak'];



    // Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
    $query = "SELECT * FROM kontak WHERE kode_kontak='".$kode_kontak."'";
    $sql = mysqli_query($koneksi, $query); // Eksekusi/Jalankan query dari variabel $query
    $data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql

    // Proses ubah data ke Database
    $query = "UPDATE kontak SET alamat='".$alamat."', email='".$email."', kontak='".$kontak."' WHERE kode_kontak='".$kode_kontakg."'";
  
  //$sql = $data->query("UPDATE data_sakramen SET nama_sakramen='$nama_sakramen',keterangan='$keterangan' WHERE kode_sakramen='$kode_sakramen'");
    $sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query

    if($sql){ // Cek jika proses simpan ke database sukses atau tidak
      // Jika Sukses, Lakukan :
      header("location: kontak.php"); // Redirect ke halaman index.php
    }else{
      // Jika Gagal, Lakukan :
      echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
      echo "<br><a href='edit_kontak.php'>Kembali Ke Form</a>";
    }
?>