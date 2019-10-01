<?php
//Mengambil File Koneksi Database.
include 'koneksi.php';
//Ambil Data dari FORM

$username = $_POST['username'];
$password = $_POST['password'];


//Query INSERT ke DB
$query = "INSERT INTO user (username, password) VALUES
('$username' , '$password')";
$sql = mysqli_query($koneksi, $query); 
  
  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
   echo '<META HTTP-EQUIV="Refresh" Content="0; URL=pengumuman.html">';
exit; // Redirect ke halaman index.php// Redirect ke halaman index.php
  }else{
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='index.html'>Kembali Ke Form</a>";
  }
?>


