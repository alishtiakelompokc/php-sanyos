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
$nama_lengkap				    	= $_POST['nama_lengkap'] ;
$nama_permandian_anak		    	= $_POST['nama_permandian_anak'] ;
$tempat_lahir						= $_POST['tempat_lahir'] ;
$tanggal_lahir						= $_POST['tanggal_lahir'] ;
$stasi          					= $_POST['stasi'] ;
$agama_sebelumnya					= $_POST['agama_sebelumnya'] ;
$ijazah_terakhir					= $_POST['ijazah_terakhir'] ;
$pekerjaan         					= $_POST['pekerjaan'] ;
$nama_anak_anak                		= $_POST['nama_anak_anak'] ;
$alamat_sekarang					= $_POST['alamat_sekarang'] ;
$nama_suami_isteri					= $_POST['nama_suami_isteri'] ;
$pekerjaan_suami_isteri     	    = $_POST['pekerjaan_suami_isteri'] ;
$status_perkawinan              	= $_POST['status_perkawinan'] ;
$tempat_perkawinan             		= $_POST['tempat_perkawinan'] ;
$tanggal_perkawinan 	        	= $_POST['tanggal_perkawinan'] ;
$jumlah_anak                	    = $_POST['jumlah_anak'] ;
$nama_ayah             	        	= $_POST['nama_ayah'] ;
$agama_ayah                 		= $_POST['agama_ayah'] ;
$pekerjaan_ayah          	    	= $_POST['pekerjaan_ayah'] ;
$nama_ibu             	        	= $_POST['nama_ibu'] ;
$agama_ibu             		        = $_POST['agama_ibu'] ;
$pekerjaan_ibu            	    	= $_POST['pekerjaan_ibu'] ;
$alamat_ortu            	    	= $_POST['alamat_ortu'] ;
$nama_guru_agama            		= $_POST['nama_guru_agama'] ;
$wali_permandian            		= $_POST['wali_permandian'] ;
$pastor_yang_mempermandikan         = $_POST['pastor_yang_mempermandikan'] ;

$kode_katekumen	   			        = $_POST['kode_katekumen'] ;


//Menyimpan data ke dalam database Mysql
$query_insert = "INSERT INTO katekumen (kode_katekumen, nama_lengkap, nama_permandian_anak, tempat_lahir, tanggal_lahir, stasi, agama_sebelumnya, ijazah_terakhir, pekerjaan, nama_anak_anak, alamat_sekarang, nama_suami_isteri, pekerjaan_suami_isteri, status_perkawinan, tempat_perkawinan, tanggal_perkawinan, jumlah_anak, nama_ayah, agama_ayah, pekerjaan_ayah, nama_ibu, agama_ibu, pekerjaan_ibu, alamat_ortu, nama_guru_agama, wali_permandian, pastor_yang_mempermandikan, tgl_daftar, status_validasi) VALUES ('$kode_katekumen', '$nama_lengkap', '$nama_permandian_anak', '$tempat_lahir', '$tanggal_lahir', '$stasi', '$agama_sebelumnya', '$ijazah_terakhir', '$pekerjaan', '$nama_anak_anak', '$alamat_sekarang', '$nama_suami_isteri', '$pekerjaan_suami_isteri', '$status_perkawinan', '$tempat_perkawinan', '$tanggal_perkawinan', '$jumlah_anak', '$nama_ayah', '$agama_ayah', '$pekerjaan_ayah', '$nama_ibu', '$agama_ibu', '$pekerjaan_ibu', '$alamat_ortu', '$nama_guru_agama', '$wali_permandian', '$pastor_yang_mempermandikan', NOW(), 'proses')";
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
	<input type='hidden' class='form-control' name='nama_permandian_anak' value='$nama_permandian_anak'>
	<input type='hidden' class='form-control' name='tempat_lahir' value='$tempat_lahir'>
	<input type='hidden' class='form-control' name='tanggal_lahir' value='$tanggal_lahir'>
	<input type='hidden' class='form-control' name='stasi' value='$stasi'>
	<input type='hidden' class='form-control' name='agama_sebelumnya' value='$agama_sebelumnya'>
	<input type='hidden' class='form-control' name='ijazah_terakhir' value='$ijazah_terakhir'>
	<input type='hidden' class='form-control' name='pekerjaan' value='$pekerjaan'>
	<input type='hidden' class='form-control' name='nama_anak_anak' value='$nama_anak_anak'>
	<input type='hidden' class='form-control' name='alamat_sekarang' value='$alamat_sekarang'>
	<input type='hidden' class='form-control' name='nama_suami_isteri' value='$nama_suami_isteri'>
	<input type='hidden' class='form-control' name='pekerjaan_suami_isteri' value='$pekerjaan_suami_isteri'>
	<input type='hidden' class='form-control' name='status_perkawinan' value='$status_perkawinan'>
	<input type='hidden' class='form-control' name='tempat_perkawinan' value='$tempat_perkawinan'>
	<input type='hidden' class='form-control' name='tanggal_perkawinan' value='$tanggal_perkawinan'>
	<input type='hidden' class='form-control' name='jumlah_anak' value='$jumlah_anak'>
	<input type='hidden' class='form-control' name='nama_ayah' value='$nama_ayah'>
	<input type='hidden' class='form-control' name='agama_ayah' value='$agama_ayah'>
	<input type='hidden' class='form-control' name='pekerjaan_ayah' value='$pekerjaan_ayah'>
	<input type='hidden' class='form-control' name='nama_ibu' value='$nama_ibu'>
	<input type='hidden' class='form-control' name='agama_ibu' value='$agama_ibu'>
	<input type='hidden' class='form-control' name='pekerjaan_ibu' value='$pekerjaan_ibu'>
	<input type='hidden' class='form-control' name='alamat_ortu' value='$alamat_ortu'>
	<input type='hidden' class='form-control' name='nama_guru_agama' value='$nama_guru_agama'>
	<input type='hidden' class='form-control' name='wali_permandian' value='$wali_permandian'>
	<input type='hidden' class='form-control' name='pastor_yang_mempermandikan' value='$pastor_yang_mempermandikan'>
	
	<input type='hidden' class='form-control' name='kode_katekumen' value='$kode_katekumen'>
	
	<p>Pilih Gambar :<p>";
    ?>
    <p>Surat Nikah Orangtua  <br/><input type='file' name="pasfoto1"></p>
    <p>Kartu Keluarga  <br/><input type='file' name="pasfoto2"></p>
    <p>Pas Foto 3x4  <br/><input type='file' name="pasfoto3"></p><?php
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