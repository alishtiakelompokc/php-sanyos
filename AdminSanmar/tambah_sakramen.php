
<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil Data yang Dikirim dari Form
$kode_sakramen = $_POST['kode_sakramen'];
$nama_sakramen = $_POST['nama_sakramen'];
$keterangan = $_POST['keterangan'];
$foto = $_FILES['foto']['name'];
$tmp_file = $_FILES['foto']['tmp_name'];
$path = '../img/sermons/'.$foto;
    $query = "INSERT INTO data_sakramen(kode_sakramen,nama_sakramen, foto, keterangan) VALUES ('$kode_sakramen','$nama_sakramen', '$foto', '$keterangan')";
  
    
  if ($_FILES['foto']['size'] <= 2500000) {
    $sql = mysqli_query($koneksi, $query); 
  if(move_uploaded_file($tmp_file, $path) && $sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
   echo '<META HTTP-EQUIV="Refresh" Content="0; URL=baptis.php">';
exit; // Redirect ke halaman index.php// Redirect ke halaman index.php
  }else{
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='baptis.php'>Kembali Ke Form</a>";
  }
}
else {
  echo "<script>alert('File tidak boleh lebih dari 2500 Kb'); window.location='baptis.php';</script>";
}

?>

