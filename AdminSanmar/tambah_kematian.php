
<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil Data yang Dikirim dari Form
$kode_kematian                      = $_POST['kode_kematian'];
$nama_lengkap				    	= $_POST['nama_lengkap'] ;
$nama_baptis        		    	= $_POST['nama_baptis'] ;
$tempat_lahir						= $_POST['tempat_lahir'] ;
$tgl_lahir					    	= $_POST['tgl_lahir'] ;
$usia                           	= $_POST['usia'] ;
$alamat                           	= $_POST['alamat'] ;
$hari_kematian                           	= $_POST['hari_kematian'] ;
$tgl_kematian                           	= $_POST['tgl_kematian'] ;
$waktu_kematian                           	= $_POST['waktu_kematian'] ;
$tempat_kematian                           	= $_POST['tempat_kematian'] ;
$alamat_kematian                           	= $_POST['alamat_kematian'] ;
$tempat_pemakaman                           	= $_POST['tempat_pemakaman'] ;
$tgl_pemakaman                           	= $_POST['tgl_pemakaman'] ;
$bentuk_pemakaman                           	= $_POST['bentuk_pemakaman'] ;
$pemimpin_upacara                           	= $_POST['pemimpin_upacara'] ;
$nama_famili                           	= $_POST['nama_famili'] ;
$alamat_famili                           	= $_POST['alamat_famili'] ;
$stasi                        		= $_POST['stasi'] ;
$hari_perminyakan                           	= $_POST['hari_perminyakan'] ;
$tgl_perminyakan                           	= $_POST['tgl_perminyakan'] ;
$tempat_perminyakan                           	= $_POST['tempat_perminyakan'] ;
$romo_perminyakan                           	= $_POST['romo_perminyakan'] ;
$sakramen_yang_diterima                           	= $_POST['sakramen_yang_diterima'];

    $query = "INSERT INTO kematian(kode_kematian,nama_lengkap,nama_baptis,tempat_lahir,tgl_lahir,usia,alamat,hari_kematian,tgl_kematian,waktu_kematian,
tempat_kematian,alamat_kematian,tempat_pemakaman,tgl_pemakaman,bentuk_pemakaman,pemimpin_upacara,nama_famili,alamat_famili,stasi,hari_perminyakan,
tgl_perminyakan,tempat_perminyakan,romo_perminyakan,sakramen_yang_diterima, tgl_daftar) VALUES ('$kode_kematian','$nama_lengkap','$nama_baptis','$tempat_lahir','$tgl_lahir','$usia','$alamat','$hari_kematian','$tgl_kematian','$waktu_kematian',
'$tempat_kematian','$alamat_kematian','$tempat_pemakaman','$tgl_pemakaman','$bentuk_pemakaman','$pemimpin_upacara','$nama_famili',
'$alamat_famili','$stasi','$hari_perminyakan',
'$tgl_perminyakan','$tempat_perminyakan','$romo_perminyakan','$sakramen_yang_diterima', NOW())";
  
    $sql = mysqli_query($koneksi, $query); 
  
  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
   echo '<META HTTP-EQUIV="Refresh" Content="0; URL=data_kematian.php">';
exit; // Redirect ke halaman index.php// Redirect ke halaman index.php
  }else{
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='data_kematian.php'>Kembali Ke Form</a>";
  }

?>

