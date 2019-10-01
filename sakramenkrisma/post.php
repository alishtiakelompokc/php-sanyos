<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4">
<?php
include "koneksi.php";

//Menangkap data yang dipost oleh user
$nama_lengkap                       = $_POST['nama_lengkap'] ;
$nama_baptis        				= $_POST['nama_baptis'] ;
$nama_krisma        				= $_POST['nama_krisma'] ;
$tempat_lahir						= $_POST['tempat_lahir'] ;
$tgl_lahir  						= $_POST['tgl_lahir'] ;
$tempat_baptis					 	= $_POST['tempat_baptis'] ;
$tgl_baptis					    	= $_POST['tgl_baptis'] ;
$tempat_komuni						= $_POST['tempat_komuni'] ;
$tgl_komuni						    = $_POST['tgl_komuni'] ;
$tempat_menikah						= $_POST['tempat_menikah'] ;
$tgl_menikah						= $_POST['tgl_menikah'] ;
$nama_suami_isteri                  = $_POST['nama_suami_isteri'] ;
$status_perkawinan                  = $_POST['status_perkawinan'] ;
$nama_ayah                          = $_POST['nama_ayah'] ;
$nama_ibu                           = $_POST['nama_ibu'] ;
$alamat                      		= $_POST['alamat'] ;
$stasi                              = $_POST['stasi'] ;
$kode_krisma						= $_POST['kode_krisma'] ;

//Menyimpan data ke dalam database Mysql
$query_insert = "INSERT INTO krisma (nama_lengkap,nama_baptis,nama_krisma,tempat_lahir,tgl_lahir,tempat_baptis,tgl_baptis,
tempat_komuni,tgl_komuni, tempat_menikah,tgl_menikah,nama_suami_isteri,status_perkawinan,
nama_ayah,nama_ibu,alamat, stasi,kode_krisma,tgl_daftar, status_validasi) VALUES 
('$nama_lengkap','$nama_baptis','$nama_krisma','$tempat_lahir','$tgl_lahir','$tempat_baptis','$tgl_baptis','$tempat_komuni',
'$tgl_komuni','$tempat_menikah','$tgl_menikah','$nama_suami_isteri','$status_perkawinan','$nama_ayah','$nama_ibu','$alamat','$stasi','$kode_krisma',NOW(), 'proses')";
$insert = mysqli_query($koneksi, $query_insert);

//Menampilkan konfirmasi proses penyimpanan
if($insert)
	{
	// Jika berhasil disimpan, dimunculkan data yang berhasil disimpan
	echo "<br/><center><h3><span class='label label-danger'>Silahkan Upload Syarat Pendaftaran</span></h3><br/><br/>";

	
	//User dipersilahkan upload scan KTP
	
	echo"
		Jenis gambar yang dikirim hanya berformat .jpg atau .jpeg dengan ukuran maks.2000kb<br/><br/>
	
	
    <form action='hasil-submit.php' method='post' enctype='multipart/form-data' name='FormUpload' id='FormUpload'>
	<input type='hidden' class='form-control' name='nama_lengkap' value='$nama_lengkap'>
	<input type='hidden' class='form-control' name='nama_baptis' value='$nama_baptis'>
    <input type='hidden' class='form-control' name='nama_krisma' value='$nama_krisma'>
	<input type='hidden' class='form-control' name='tempat_lahir' value='$tempat_lahir'>
	<input type='hidden' class='form-control' name='tgl_lahir' value='$tgl_lahir'>
    <input type='hidden' class='form-control' name='tempat_baptis' value='$tempat_baptis'>
	<input type='hidden' class='form-control' name='tgl_baptis' value='$tgl_baptis'>
    <input type='hidden' class='form-control' name='tempat_komuni' value='$tempat_komuni'>
	<input type='hidden' class='form-control' name='tgl_komuni' value='$tgl_komuni'>
    <input type='hidden' class='form-control' name='tempat_menikah' value='$tempat_menikah'>
	<input type='hidden' class='form-control' name='tgl_menikah' value='$tgl_menikah'>
    <input type='hidden' class='form-control' name='nama_suami_isteri' value='$nama_suami_isteri'>
    <input type='hidden' class='form-control' name='status_perkawinan' value='$status_perkawinan'>
	<input type='hidden' class='form-control' name='nama_ayah' value='$nama_ayah'>
	<input type='hidden' class='form-control' name='nama_ibu' value='$nama_ibu'>
	<input type='hidden' class='form-control' name='alamat' value='$alamat'>
	<input type='hidden' class='form-control' name='stasi' value='$stasi'>
	<input type='hidden' class='form-control' name='kode_krisma' value='$kode_krisma'>
	
    <p>Pilih Gambar :<p>";
    
    
    ?>
    <p>Akta Perkawinan Peserta  (Belum menikah : Kartu Keluarga)  <br/><input type='file' name="pasfoto1">
    <p>Surat Baptis Terbaru  <br/><input type='file' name="pasfoto2"></p><?php
    echo"<p><input type='submit' name='button' id='button' value='Upload'></p>
    
      
   
    </form>";
	
	
	}


	//Jika data gagal disimpan, tampilkan pesan gagal penyimpanan
else
	{
	echo "Data GAGAL disimpan... ";
	
	}

?>
 
</div>
</div>
	

</body>
</html>