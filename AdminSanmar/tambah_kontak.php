
<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil Data yang Dikirim dari Form
$kode_kontak = $_POST['kode_kontak'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$kontak = $_POST['kontak'];

    $query = "INSERT INTO kontak(kode_kontak,alamat,email,kontak) VALUES ('$kode_kontak','$alamat','$email','$kontak')";
  
    $sql = mysqli_query($koneksi, $query); 
  
  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
   echo '<META HTTP-EQUIV="Refresh" Content="0; URL=kontak.php">';
exit; // Redirect ke halaman index.php// Redirect ke halaman index.php
  }else{
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='kontak.php'>Kembali Ke Form</a>";
  }

?>

