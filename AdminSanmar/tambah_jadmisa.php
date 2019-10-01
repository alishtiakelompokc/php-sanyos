
<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil Data yang Dikirim dari Form
$kode_jadwal = $_POST['kode_jadwal'];
$tempat = $_POST['tempat'];
$waktu = $_POST['waktu'];
$pukul = $_POST['pukul'];

    $query = "INSERT INTO jadwal_misa(kode_jadwal,tempat,waktu,pukul) VALUES ('$kode_jadwal','$tempat','$waktu','$lokasi')";
  
    $sql = mysqli_query($koneksi, $query); 
  
  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
   echo '<META HTTP-EQUIV="Refresh" Content="0; URL=misa_paroki.php">';
exit; // Redirect ke halaman index.php// Redirect ke halaman index.php
  }else{
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='misa_paroki.php'>Kembali Ke Form</a>";
  }

?>

