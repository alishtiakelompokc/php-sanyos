<?php
if (isset($_POST['submit'])) {
// Load file koneksi.php
include "koneksi.php";

// Ambil data NIS yang dikirim oleh form_ubah.php melalui URL
$kode_galeri = $_GET['kode_galeri'];

// Ambil Data yang Dikirim dari Form
$nama_kegiatan = $_POST['nama_kegiatan'];
$tanggal = $_POST['tanggal'];
$keterangan = $_POST['keterangan'];
$waktu = $_POST['waktu'];
$lokasi = $_POST['lokasi'];


    // Proses ubah data ke Database
    $query_update = "UPDATE galeri SET nama_kegiatan='$nama_kegiatan', tanggal='$tanggal', keterangan='$keterangan', waktu='$waktu', lokasi='$lokasi' WHERE kode_galeri='$kode_galeri'";
    
  if (!empty($_FILES['ganti_foto']['name'])) {
      if (!empty($_POST['foto_lama'])) {
        $foto_lama = '../img/event/'.$_POST['foto_lama'];
        unlink($foto_lama);
      }
      $ganti_foto = $_FILES['ganti_foto']['name'];
      $tmp_file = $_FILES['ganti_foto']['tmp_name'];
      $path = '../img/event/'.$ganti_foto;
      $query_update = "UPDATE galeri SET nama_kegiatan='$nama_kegiatan', foto='$ganti_foto', tanggal='$tanggal', keterangan='$keterangan', waktu='$waktu', lokasi='$lokasi' WHERE kode_galeri='$kode_galeri'";
      move_uploaded_file($tmp_file, $path);
    }
  //$sql = $data->query("UPDATE data_sakramen SET nama_sakramen='$nama_sakramen',keterangan='$keterangan' WHERE kode_sakramen='$kode_sakramen'");
    $sql = mysqli_query($koneksi, $query_update); // Eksekusi/ Jalankan query dari variabel $query

    if($sql){ // Cek jika proses simpan ke database sukses atau tidak
      // Jika Sukses, Lakukan :
      echo "<script>window.location='galeri.php';</script>"; // Redirect ke halaman index.php
    }else{
      // Jika Gagal, Lakukan :
      echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
      echo "<br><a href='edit_galeri.php'>Kembali Ke Form</a>";
    }
}
else {
  echo "<script>alert('Terjadi Kesalahan'); window.location='galeri.php';</script>";
}
?>