<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil data NIS yang dikirim oleh form_ubah.php melalui URL
$kode_kematian = $_GET['kode_kematian'];

// Ambil Data yang Dikirim dari Form
// $kode_kematian = $_POST['kode_kematian'];
$nama_lengkap = $_POST['nama_lengkap'];
$nama_baptis = $_POST['nama_baptis'];
$tempat_lahir = $_POST['tempat_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$usia = $_POST['usia'];
$alamat = $_POST['alamat'];
$hari_kematian = $_POST['hari_kematian'];
$tgl_kematian = $_POST['tgl_kematian'];
$waktu_kematian = $_POST['waktu_kematian'];
$tempat_kematian = $_POST['tempat_kematian'];
$alamat_kematian = $_POST['alamat_kematian'];
$tempat_pemakaman = $_POST['tempat_pemakaman'];
$tgl_pemakaman = $_POST['tgl_pemakaman'];
$bentuk_pemakaman = $_POST['bentuk_pemakaman'];
$pemimpin_upacara = $_POST['pemimpin_upacara'];
$nama_famili = $_POST['nama_famili'];
$alamat_famili = $_POST['alamat_famili'];
$stasi = $_POST['stasi'];
$hari_perminyakan = $_POST['hari_perminyakan'];
$tgl_perminyakan = $_POST['tgl_perminyakan'];
$tempat_perminyakan = $_POST['tempat_perminyakan'];
$romo_perminyakan = $_POST['romo_perminyakan'];
$sakramen_yang_diterima = $_POST['sakramen_yang_diterima'];



    // Proses ubah data ke Database
    $query = "UPDATE kematian SET nama_lengkap='$nama_lengkap', nama_baptis='$nama_baptis', tempat_lahir='$tempat_lahir', tgl_lahir='$tgl_lahir', usia='$usia', alamat='$alamat', hari_kematian='$hari_kematian', tgl_kematian='$tgl_kematian', waktu_kematian='$waktu_kematian', tempat_kematian='$tempat_kematian', alamat_kematian='$alamat_kematian', tempat_pemakaman='$tempat_pemakaman', tgl_pemakaman='$tgl_pemakaman', bentuk_pemakaman='$bentuk_pemakaman', pemimpin_upacara='$pemimpin_upacara', nama_famili='$nama_famili', alamat_famili='$alamat_famili', stasi='$stasi', hari_perminyakan='$hari_perminyakan', tgl_perminyakan='$tgl_perminyakan', tempat_perminyakan='$tempat_perminyakan', romo_perminyakan='$romo_perminyakan', sakramen_yang_diterima='$sakramen_yang_diterima' WHERE kode_kematian='$kode_kematian'";
  
  //$sql = $data->query("UPDATE data_sakramen SET nama_sakramen='$nama_sakramen',keterangan='$keterangan' WHERE kode_sakramen='$kode_sakramen'");
    $sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query

    if($sql){ // Cek jika proses simpan ke database sukses atau tidak
      // Jika Sukses, Lakukan :
      header("location: data_kematian.php"); // Redirect ke halaman index.php
    }else{
      // Jika Gagal, Lakukan :
      echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
      echo "<br><a href='edit_kematian.php'>Kembali Ke Form</a>";
    }
?>