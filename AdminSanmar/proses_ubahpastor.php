<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil data NIS yang dikirim oleh form_ubah.php melalui URL
$kode_pastorg = $_GET['kode_pastor'];

// Ambil Data yang Dikirim dari Form
$kode_pastor = $_POST['kode_pastor'];
$nama_pastor = $_POST['nama_pastor'];
$jabatan = $_POST['jabatan'];
$keterangan = $_POST['keterangan'];
$foto_lama = '../img/pastors/'.$_POST['foto_lama'];

    // Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
    $query = "SELECT * FROM data_pastor WHERE kode_pastor='".$kode_pastor."'";
    $sql = mysqli_query($koneksi, $query); // Eksekusi/Jalankan query dari variabel $query
    $data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql

    // Proses ubah data ke Database
    $query = "UPDATE data_pastor SET nama_pastor='".$nama_pastor."', jabatan='".$jabatan."' ,keterangan='".$keterangan."' WHERE kode_pastor='".$kode_pastorg."'";
    if (!empty($_FILES['ganti_foto']['name'])) {
      unlink($foto_lama);
      $ganti_foto = $_FILES['ganti_foto']['name'];
      $tmp_file = $_FILES['ganti_foto']['tmp_name'];
      $path = '../img/pastors/'.$ganti_foto;
      $query = "UPDATE data_pastor SET nama_pastor='".$nama_pastor."', jabatan='".$jabatan."' , foto='".$ganti_foto."', keterangan='".$keterangan."' WHERE kode_pastor='".$kode_pastorg."'";
      move_uploaded_file($tmp_file, $path);
    }
  
  //$sql = $data->query("UPDATE data_sakramen SET nama_sakramen='$nama_sakramen',keterangan='$keterangan' WHERE kode_sakramen='$kode_sakramen'");
    $sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query

    if($sql){ // Cek jika proses simpan ke database sukses atau tidak
      // Jika Sukses, Lakukan :
      header("location: data_pastor.php"); // Redirect ke halaman index.php
    }else{
      // Jika Gagal, Lakukan :
      echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
      echo "<br><a href='edit_pastor.php'>Kembali Ke Form</a>";
    }
?>