
<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil Data yang Dikirim dari Form
$kode_stasi = $_POST['kode_stasi'];
$tempat = $_POST['tempat'];
$waktu = $_POST['waktu'];
$pukul = $_POST['pukul'];

    $query = "INSERT INTO misa_stasi(kode_stasi,tempat,waktu,pukul) VALUES ('$kode_stasi','$tempat','$waktu','$pukul')";
  
    $sql = mysqli_query($koneksi, $query); 
  
  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
   echo '<META HTTP-EQUIV="Refresh" Content="0; URL=misa_stasi.php">';
exit; // Redirect ke halaman index.php// Redirect ke halaman index.php
  }else{
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='misa_stasi.php'>Kembali Ke Form</a>";
  }

?>

