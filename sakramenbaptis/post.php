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
$jenis_kelamin						= $_POST['jenis_kelamin'] ;
$anak_yang_ke						= $_POST['anak_yang_ke'] ;
$stasi          					= $_POST['stasi'] ;
$no_hp          					= $_POST['no_hp'] ;
$nama_ayah                  		= $_POST['nama_ayah'] ;
$agama_ayah							= $_POST['agama_ayah'] ;
$pekerjaan_ayah						= $_POST['pekerjaan_ayah'] ;
$nama_ibu                  		    = $_POST['nama_ibu'] ;
$agama_ibu                      	= $_POST['agama_ibu'] ;
$pekerjaan_ibu              		= $_POST['pekerjaan_ibu'] ;
$tempat_sakramen_perkawinan 		= $_POST['tempat_sakramen_perkawinan'] ;
$status_perkawinan             	    = $_POST['status_perkawinan'] ;
$alamat_orangtua             		= $_POST['alamat_orangtua'] ;
$stasi_orangtua             		= $_POST['stasi_orangtua'] ;
$nama_wali_permandian          		= $_POST['nama_wali_permandian'] ;
$tempat_permandian             		= $_POST['tempat_permandian'] ;
$hari_permandian             		= $_POST['hari_permandian'] ;
$tanggal_permandian            		= $_POST['tanggal_permandian'] ;
$pastor_yang_mempermandikan          = $_POST['pastor_yang_mempermandikan'] ;

$kode_anak	   					    = $_POST['kode_anak'] ;


//Menyimpan data ke dalam database Mysql
$query_insert = "INSERT INTO baptis_bayi (nama_lengkap,nama_permandian_anak,tempat_lahir,tanggal_lahir,jenis_kelamin,anak_yang_ke,
stasi,no_hp,
nama_ayah,agama_ayah,pekerjaan_ayah,nama_ibu,agama_ibu, pekerjaan_ibu,tempat_sakramen_perkawinan, status_perkawinan,alamat_orangtua, stasi_orangtua,
nama_wali_permandian, tempat_permandian, hari_permandian,tanggal_permandian,pastor_yang_mempermandikan,kode_anak,tgl_daftar, status_validasi) VALUES 
('$nama_lengkap','$nama_permandian_anak','$tempat_lahir','$tanggal_lahir','$jenis_kelamin','$anak_yang_ke','$stasi','$no_hp','$nama_ayah',
'$agama_ayah','$pekerjaan_ayah','$nama_ibu','$agama_ibu','$pekerjaan_ibu','$tempat_sakramen_perkawinan','$status_perkawinan','$alamat_orangtua',
'$stasi_orangtua','$nama_wali_permandian','$tempat_permandian','$hari_permandian','$tanggal_permandian','$pastor_yang_mempermandikan','$kode_anak',NOW(), 'proses')";
$insert = mysqli_query($koneksi, $query_insert);

//Menampilkan konfirmasi proses penyimpanan
if($insert)
	{
	// Jika berhasil disimpan, dimunculkan data yang berhasil disimpan
	echo "<br/><center><h3><span class='label label-danger'>Silahkan Upload Syarat Pendaftaran</span></h3><br/><br/>";

	
	//User dipersilahkan upload scan KTP
	
	echo"
		Jenis gambar yang dikirim hanya berformat .jpg atau .jpeg dengan ukuran maks.2000kb<br/><br/><br/><br/>
	
	
    <form action='hasil-submit.php' method='post' enctype='multipart/form-data' name='FormUpload' id='FormUpload'>
	<input type='hidden' class='form-control' name='nama_lengkap' value='$nama_lengkap'>
	<input type='hidden' class='form-control' name='nama_permandian_anak' value='$nama_permandian_anak'>
	<input type='hidden' class='form-control' name='tempat_lahir' value='$tempat_lahir'>
	<input type='hidden' class='form-control' name='tanggal_lahir' value='$tanggal_lahir'>
	<input type='hidden' class='form-control' name='jenis_kelamin' value='$jenis_kelamin'>
	<input type='hidden' class='form-control' name='anak_yang_ke' value='$anak_yang_ke'>
	<input type='hidden' class='form-control' name='stasi' value='$stasi'>
	<input type='hidden' class='form-control' name='no_hp' value='$no_hp'>
	<input type='hidden' class='form-control' name='nama_ayah' value='$nama_ayah'>
	<input type='hidden' class='form-control' name='agama_ayah' value='$agama_ayah'>
	<input type='hidden' class='form-control' name='pekerjaan_ayah' value='$pekerjaan_ayah'>
	<input type='hidden' class='form-control' name='nama_ibu' value='$nama_ibu'>
	<input type='hidden' class='form-control' name='agama_ibu' value='$agama_ibu'>
	<input type='hidden' class='form-control' name='pekerjaan_ibu' value='$pekerjaan_ibu'>
	<input type='hidden' class='form-control' name='tempat_sakramen_perkawinan' value='$tempat_sakramen_perkawinan'>
	<input type='hidden' class='form-control' name='status_perkawinan' value='$status_perkawinan'>
	<input type='hidden' class='form-control' name='alamat_orangtua' value='$alamat_orangtua'>
	<input type='hidden' class='form-control' name='stasi_orangtua' value='$stasi_orangtua'>
	<input type='hidden' class='form-control' name='nama_wali_permandian' value='$nama_wali_permandian'>
	<input type='hidden' class='form-control' name='tempat_permandian' value='$tempat_permandian'>
	<input type='hidden' class='form-control' name='hari_permandian' value='$hari_permandian'>
	<input type='hidden' class='form-control' name='tanggal_permandian' value='$tanggal_permandian'>
	<input type='hidden' class='form-control' name='pastor_yang_mempermandikan' value='$pastor_yang_mempermandikan'>
	
	<input type='hidden' class='form-control' name='kode_anak' value='$kode_anak'>
	
    <p>Pilih Gambar :<p>";
    
    
    ?>
    <p>Surat Nikah Orangtua  <br/><input type='file' name="pasfoto1"></p>
    <p>Akta Kelahiran Bayi <br/><input type='file' name="pasfoto2"></p><?php
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