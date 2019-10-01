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
$nama_lengkap_pria                      = $_POST['nama_lengkap_pria'] ;
$tempat_lahir_pria						= $_POST['tempat_lahir_pria'] ;
$tgl_lahir_pria  						= $_POST['tgl_lahir_pria'] ;
$tempat_baptis_pria					 	= $_POST['tempat_baptis_pria'] ;
$tgl_baptis_pria					    = $_POST['tgl_baptis_pria'] ;
$tempat_krisma_pria						= $_POST['tempat_krisma_pria'] ;
$tgl_krisma_pria						= $_POST['tgl_krisma_pria'] ;
$agama_pria						        = $_POST['agama_pria'] ;
$pendidikan_terakhir_pria				= $_POST['pendidikan_terakhir_pria'] ;
$pekerjaan_pria						    = $_POST['pekerjaan_pria'] ;
$alamat_pria						    = $_POST['alamat_pria'] ;
$stasi_pria						        = $_POST['stasi_pria'] ;
$nama_ayah_pria                         = $_POST['nama_ayah_pria'] ;
$agama_ayah_pria                        = $_POST['agama_ayah_pria'] ;
$pekerjaan_ayah_pria                    = $_POST['pekerjaan_ayah_pria'] ;      
$alamat_ayah_pria                       = $_POST['alamat_ayah_pria'] ;
$nama_ibu_pria                          = $_POST['nama_ibu_pria'] ;
$agama_ibu_pria                         = $_POST['agama_ibu_pria'] ;
$pekerjaan_ibu_pria                     = $_POST['pekerjaan_ibu_pria'] ;      
$alamat_ibu_pria                        = $_POST['alamat_ibu_pria'] ; 
$nama_lengkap_wanita                    = $_POST['nama_lengkap_wanita'] ;
$tempat_lahir_wanita					= $_POST['tempat_lahir_wanita'] ;
$tgl_lahir_wanita  						= $_POST['tgl_lahir_wanita'] ;
$tempat_baptis_wanita					= $_POST['tempat_baptis_wanita'] ;
$tgl_baptis_wanita					    = $_POST['tgl_baptis_wanita'] ;
$tempat_krisma_wanita					= $_POST['tempat_krisma_wanita'] ;
$tgl_krisma_wanita						= $_POST['tgl_krisma_wanita'] ;
$agama_wanita						    = $_POST['agama_wanita'] ;
$pendidikan_terakhir_wanita				= $_POST['pendidikan_terakhir_wanita'] ;
$pekerjaan_wanita						= $_POST['pekerjaan_wanita'] ;
$alamat_wanita						    = $_POST['alamat_wanita'] ;
$stasi_wanita						    = $_POST['stasi_wanita'] ;
$nama_ayah_wanita                       = $_POST['nama_ayah_wanita'] ;
$agama_ayah_wanita                      = $_POST['agama_ayah_wanita'] ;
$pekerjaan_ayah_wanita                  = $_POST['pekerjaan_ayah_wanita'] ;      
$alamat_ayah_wanita                     = $_POST['alamat_ayah_wanita'] ;
$nama_ibu_wanita                        = $_POST['nama_ibu_wanita'] ;
$agama_ibu_wanita                       = $_POST['agama_ibu_wanita'] ;
$pekerjaan_ibu_wanita                   = $_POST['pekerjaan_ibu_wanita'] ;      
$alamat_ibu_wanita                      = $_POST['alamat_ibu_wanita'] ;
$kode_perkawinan						= $_POST['kode_perkawinan'] ;



//Menyimpan data ke dalam database Mysql
$query_insert = "INSERT INTO perkawinan (kode_perkawinan, nama_lengkap_pria, tempat_lahir_pria, tgl_lahir_pria, tempat_baptis_pria, tgl_baptis_pria, tempat_krisma_pria, tgl_krisma_pria, agama_pria, pendidikan_terakhir_pria, pekerjaan_pria, alamat_pria, stasi_pria, nama_ayah_pria, agama_ayah_pria, pekerjaan_ayah_pria, alamat_ayah_pria, nama_ibu_pria, agama_ibu_pria, pekerjaan_ibu_pria, alamat_ibu_pria, nama_lengkap_wanita, tempat_lahir_wanita, tgl_lahir_wanita, tempat_baptis_wanita, tgl_baptis_wanita, tempat_krisma_wanita, tgl_krisma_wanita, agama_wanita, pendidikan_terakhir_wanita, pekerjaan_wanita, alamat_wanita, stasi_wanita, nama_ayah_wanita, agama_ayah_wanita, pekerjaan_ayah_wanita, alamat_ayah_wanita, nama_ibu_wanita, agama_ibu_wanita, pekerjaan_ibu_wanita, alamat_ibu_wanita, tgl_daftar, status_validasi) VALUES ('$kode_perkawinan', '$nama_lengkap_pria', '$tempat_lahir_pria', '$tgl_lahir_pria', '$tempat_baptis_pria', '$tgl_baptis_pria', '$tempat_krisma_pria', '$tgl_krisma_pria', '$agama_pria', '$pendidikan_terakhir_pria', '$pekerjaan_pria', '$alamat_pria', '$stasi_pria', '$nama_ayah_pria', '$agama_ayah_pria', '$pekerjaan_ayah_pria', '$alamat_ayah_pria', '$nama_ibu_pria', '$agama_ibu_pria', '$pekerjaan_ibu_pria', '$alamat_ibu_pria', '$nama_lengkap_wanita', '$tempat_lahir_wanita', '$tgl_lahir_wanita', '$tempat_baptis_wanita', '$tgl_baptis_wanita', '$tempat_krisma_wanita', '$tgl_krisma_wanita', '$agama_wanita', '$pendidikan_terakhir_wanita', '$pekerjaan_wanita', '$alamat_wanita', '$stasi_wanita', '$nama_ayah_wanita', '$agama_ayah_wanita', '$pekerjaan_ayah_wanita', '$alamat_ayah_wanita', '$nama_ibu_wanita', '$agama_ibu_wanita', '$pekerjaan_ibu_wanita', '$alamat_ibu_wanita', NOW(), 'proses')";
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
	<input type='hidden' class='form-control' name='nama_lengkap_pria' value='$nama_lengkap_pria'>
    <input type='hidden' class='form-control' name='tempat_lahir_pria' value='$tempat_lahir_pria'>
	<input type='hidden' class='form-control' name='tgl_lahir_pria' value='$tgl_lahir_pria'>
    <input type='hidden' class='form-control' name='tempat_baptis_pria' value='$tempat_baptis_pria'>
	<input type='hidden' class='form-control' name='tgl_baptis_pria' value='$tgl_baptis_pria'>
    <input type='hidden' class='form-control' name='tempat_krisma_pria' value='$tempat_krisma_pria'>
	<input type='hidden' class='form-control' name='tgl_krisma_pria' value='$tgl_krisma_pria'>
    <input type='hidden' class='form-control' name='agama_pria' value='$agama_pria'>
	<input type='hidden' class='form-control' name='pendidikan_terakhir_pria' value='$pendidikan_terakhir_pria'>
	<input type='hidden' class='form-control' name='pekerjaan_pria' value='$pekerjaan_pria'>
	<input type='hidden' class='form-control' name='alamat_pria' value='$alamat_pria'>
    <input type='hidden' class='form-control' name='stasi_pria' value='$stasi_pria'>
	<input type='hidden' class='form-control' name='nama_ayah_pria' value='$nama_ayah_pria'>
	<input type='hidden' class='form-control' name='agama_ayah_pria' value='$agama_ayah_pria'>
	<input type='hidden' class='form-control' name='pekerjaan_ayah_pria' value='$pekerjaan_ayah_pria'>
    <input type='hidden' class='form-control' name='alamat_ayah_pria' value='$alamat_ayah_pria'>
	<input type='hidden' class='form-control' name='nama_ibu_pria' value='$nama_ibu_pria'>
	<input type='hidden' class='form-control' name='agama_ibu_pria' value='$agama_ibu_pria'>
	<input type='hidden' class='form-control' name='pekerjaan_ibu_pria' value='$pekerjaan_ibu_pria'>
    <input type='hidden' class='form-control' name='alamat_ibu_pria' value='$alamat_ibu_pria'>
	<input type='hidden' class='form-control' name='nama_lengkap_wanita' value='$nama_lengkap_wanita'>
    <input type='hidden' class='form-control' name='tempat_lahir_wanita' value='$tempat_lahir_wanita'>
	<input type='hidden' class='form-control' name='tgl_lahir_wanita' value='$tgl_lahir_wanita'>
    <input type='hidden' class='form-control' name='tempat_baptis_wanita' value='$tempat_baptis_wanita'>
	<input type='hidden' class='form-control' name='tgl_baptis_wanita' value='$tgl_baptis_wanita'>
    <input type='hidden' class='form-control' name='tempat_krisma_wanita' value='$tempat_krisma_wanita'>
	<input type='hidden' class='form-control' name='tgl_krisma_wanita' value='$tgl_krisma_wanita'>
    <input type='hidden' class='form-control' name='agama_wanita' value='$agama_wanita'>
	<input type='hidden' class='form-control' name='pendidikan_terakhir_wanita' value='$pendidikan_terakhir_wanita'>
	<input type='hidden' class='form-control' name='pekerjaan_wanita' value='$pekerjaan_wanita'>
	<input type='hidden' class='form-control' name='alamat_wanita' value='$alamat_wanita'>
    <input type='hidden' class='form-control' name='stasi_wanita' value='$stasi_wanita'>
	<input type='hidden' class='form-control' name='nama_ayah_wanita' value='$nama_ayah_wanita'>
	<input type='hidden' class='form-control' name='agama_ayah_wanita' value='$agama_ayah_wanita'>
	<input type='hidden' class='form-control' name='pekerjaan_ayah_wanita' value='$pekerjaan_ayah_wanita'>
    <input type='hidden' class='form-control' name='alamat_ayah_wanita' value='$alamat_ayah_wanita'>
	<input type='hidden' class='form-control' name='nama_ibu_wanita' value='$nama_ibu_wanita'>
	<input type='hidden' class='form-control' name='agama_ibu_wanita' value='$agama_ibu_wanita'>
	<input type='hidden' class='form-control' name='pekerjaan_ibu_wanita' value='$pekerjaan_ibu_wanita'>
    <input type='hidden' class='form-control' name='alamat_ibu_wanita' value='$alamat_ibu_wanita'>
    <input type='hidden' class='form-control' name='kode_perkawinan' value='$kode_perkawinan'>
    <p>Pilih Gambar :<p>";
    
    
    ?>
    <p>Surat Permandian Terbaru Pria  <br/><input type='file' name="pasfoto1"></p>
      <p>Surat Permandian Terbaru Wanita  <br/><input type='file' name="pasfoto2"></p>
    <p>Sertifikat Kursus Perkawinan  <br/><input type='file' name="pasfoto3"></p>
    <p>Pas Foto Berdampingan 6x4  <br/><input type='file' name="pasfoto4"></p><?php
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