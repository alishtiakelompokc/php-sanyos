                         
<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil Data yang Dikirim dari Form
$kode_galeri = $_POST['kode_galeri'];
$nama_kegiatan = $_POST['nama_kegiatan'];
$tanggal = $_POST['tanggal'];
$keterangan = $_POST['keterangan'];
$waktu = $_POST['waktu'];
$lokasi = $_POST['lokasi'];
$foto = $_FILES['foto']['name'];
$tmp_file = $_FILES['foto']['tmp_name'];
$path = '../img/event/'.$foto;
    $query = "INSERT INTO galeri (kode_galeri,nama_kegiatan,tanggal,keterangan,waktu,lokasi, foto) VALUES 
    ('$kode_galeri','$nama_kegiatan','$tanggal','$keterangan','$waktu','$lokasi', '$foto')";
  
      if ($_FILES['foto']['size'] <= 2500000) {
        $sql = mysqli_query($koneksi, $query); 
  if(move_uploaded_file($tmp_file, $path) && $sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
   echo '<META HTTP-EQUIV="Refresh" Content="0; URL=galeri.php">';
exit; // Redirect ke halaman index.php// Redirect ke halaman index.php
  }else{
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='galeri.php'>Kembali Ke Form</a>";
  }
}
else {
  echo "<script>alert('File tidak boleh lebih dari 2500 Kb'); window.location='galeri.php';</script>";
}
?>

