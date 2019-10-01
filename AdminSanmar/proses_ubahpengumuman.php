<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil data NIS yang dikirim oleh form_ubah.php melalui URL
$kode_pengumumang = $_GET['kode_pengumuman'];

// Ambil Data yang Dikirim dari Form
$kode_pengumuman = $_POST['kode_pengumuman'];

$keterangan = $_POST['keterangan'];
$foto_lama = '../img/sermons/'.$_POST['foto_lama'];

    // Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
    $query = "SELECT * FROM pengumuman WHERE kode_pengumuman='".$kode_pengumuman."'";
    $sql = mysqli_query($koneksi, $query); // Eksekusi/Jalankan query dari variabel $query
    $data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql

    // Proses ubah data ke Database
    $query = "UPDATE pengumuman SET keterangan='".$keterangan."' WHERE kode_pengumuman='".$kode_pengumumang."'";
  
  if (!empty($_FILES['ganti_foto']['name'])) {
      unlink($foto_lama);
      $ganti_foto = $_FILES['ganti_foto']['name'];
      $tmp_file = $_FILES['ganti_foto']['tmp_name'];
      $path = '../img/sermons/'.$ganti_foto;
      $query = "UPDATE pengumuman SET foto='".$ganti_foto."', keterangan='".$keterangan."' WHERE kode_pengumuman='".$kode_pengumumang."'";
      move_uploaded_file($tmp_file, $path);
    }
  //$sql = $data->query("UPDATE data_sakramen SET nama_sakramen='$nama_sakramen',keterangan='$keterangan' WHERE kode_sakramen='$kode_sakramen'");
    $sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query

    if($sql){ // Cek jika proses simpan ke database sukses atau tidak
      // Jika Sukses, Lakukan :
      header("location: pengumuman.php"); // Redirect ke halaman index.php
    }else{
      // Jika Gagal, Lakukan :
      echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
      echo "<br><a href='edit_pengumuman.php'>Kembali Ke Form</a>";
    }
?>