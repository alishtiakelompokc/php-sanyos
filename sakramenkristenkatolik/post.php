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
$tempat_lahir						= $_POST['tempat_lahir'] ;
$tgl_lahir						    = $_POST['tgl_lahir'] ;
$umur						        = $_POST['umur'] ;
$jenis_kelamin					    = $_POST['jenis_kelamin'] ;
$agama_sebelumnya					= $_POST['agama_sebelumnya'] ;
$pendidikan						    = $_POST['pendidikan'] ;
$pekerjaan						    = $_POST['pekerjaan'] ;
$alamat_lengkap						= $_POST['alamat_lengkap'] ;
$no_tlp						        = $_POST['no_tlp'] ;
$nama_suami_isteri					= $_POST['nama_suami_isteri'] ;
$status_perkawinan					= $_POST['status_perkawinan'] ;
$tempat_perkawinan					= $_POST['tempat_perkawinan'] ;
$tgl_perkawinan						= $_POST['tgl_perkawinan'] ;
$nama_ayah                  		= $_POST['nama_ayah'] ;
$nama_ibu                  		    = $_POST['nama_ibu'] ;
$agama_ayah                  		= $_POST['agama_ayah'] ;
$agama_ibu                  		= $_POST['agama_ibu'] ;
$alamat_ortu                        = $_POST['alamat_ortu'] ;
$kode_pindahan	   				    = $_POST['kode_pindahan'] ;


//Menyimpan data ke dalam database Mysql
$query_insert = "INSERT INTO pindahan_kristenkatolik (kode_pindahan, nama_lengkap, tempat_lahir, tgl_lahir, umur, jenis_kelamin, agama_sebelumnya, pendidikan, pekerjaan, alamat_lengkap, no_tlp, nama_suami_isteri, status_perkawinan, tempat_perkawinan, tgl_perkawinan, nama_ayah, nama_ibu, agama_ayah, agama_ibu, alamat_ortu, tgl_daftar, status_validasi) VALUES ('$kode_pindahan', '$nama_lengkap', '$tempat_lahir', '$tgl_lahir', '$umur', '$jenis_kelamin', '$agama_sebelumnya', '$pendidikan', '$pekerjaan', '$alamat_lengkap', '$no_tlp', '$nama_suami_isteri', '$status_perkawinan', '$tempat_perkawinan', '$tgl_perkawinan', '$nama_ayah', '$nama_ibu', '$agama_ayah', '$agama_ibu', '$alamat_ortu', NOW(), 'proses')";
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
	<input type='hidden' class='form-control' name='tempat_lahir' value='$tempat_lahir'>
	<input type='hidden' class='form-control' name='tgl_lahir' value='$tgl_lahir'>
    <input type='hidden' class='form-control' name='umur' value='$umur'>
	<input type='hidden' class='form-control' name='jenis_kelamin' value='$jenis_kelamin'>
    <input type='hidden' class='form-control' name='agama_sebelumnya' value='$agama_sebelumnya'>
    <input type='hidden' class='form-control' name='pendidikan' value='$pendidikan'>
    <input type='hidden' class='form-control' name='pekerjaan' value='$pekerjaan'>
    <input type='hidden' class='form-control' name='alamat_lengkap' value='$alamat_lengkap'>
    <input type='hidden' class='form-control' name='no_tlp' value='$no_tlp'>
    <input type='hidden' class='form-control' name='nama_suami_isteri' value='$nama_suami_isteri'>
    <input type='hidden' class='form-control' name='status_perkawinan' value='$status_perkawinan'>
    <input type='hidden' class='form-control' name='tempat_perkawinan' value='$tempat_perkawinan'>
    <input type='hidden' class='form-control' name='tgl_perkawinan' value='$tgl_perkawinan'>

	<input type='hidden' class='form-control' name='nama_ayah' value='$nama_ayah'>
	<input type='hidden' class='form-control' name='nama_ibu' value='$nama_ibu'>
    <input type='hidden' class='form-control' name='agama_ayah' value='$agama_ayah'>
	<input type='hidden' class='form-control' name='agama_ibu' value='$agama_ibu'>
	<input type='hidden' class='form-control' name='alamat_ortu' value='$alamat_ortu'>
    <input type='hidden' class='form-control' name='kode_pindahan' value='$kode_pindahan'>
	
    <p>Pilih Gambar :<p>";
    
    
    ?>
    <p>Surat Baptis yang Pertama  <br/><input type='file' name="pasfoto1"></p>
    <p>Akta Kelahiran  <br/><input type='file' name="pasfoto2"></p>
    <p>Surat Kawin Gereja (Belum menikah : Kartu Keluarga)  <br/><input type='file' name="pasfoto3"></p>
    <p>Akta Kawin Catatan Sipil (Belum menikah : KTP/Kartu Pelajar/Kartu Tanda Mahasiswa)  <br/><input type='file' name="pasfoto4"></p><?php
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