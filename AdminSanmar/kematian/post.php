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
$sakramen_yang_diterima                           	= $_POST['sakramen_yang_diterima'] ;
$kode_kematian	   				    = $_POST['kode_kematian'] ;


//Menyimpan data ke dalam database Mysql
$query_insert = "INSERT INTO kematian (nama_lengkap,nama_baptis,tempat_lahir,tgl_lahir,usia,alamat,hari_kematian,tgl_kematian,waktu_kematian,
tempat_kematian,alamat_kematian,tempat_pemakaman,tgl_pemakaman,bentuk_pemakaman,pemimpin_upacara,nama_famili,alamat_famili,stasi,hari_perminyakan,
tgl_perminyakan,tempat_perminyakan,romo_perminyakan,sakramen_yang_diterima) VALUES 
('$nama_lengkap','$nama_baptis','$tempat_lahir','$tgl_lahir','$usia','$alamat','$hari_kematian','$tgl_kematian','$waktu_kematian',
'$tempat_kematian','$alamat_kematian','$tempat_pemakaman','$tgl_pemakaman','$bentuk_pemakaman','$pemimpin_upacara','$nama_famili',
'$alamat_famili','$stasi','$hari_perminyakan',
'$tgl_perminyakan','$tempat_perminyakan','$romo_perminyakan','$sakramen_yang_diterima';
$insert = mysqli_query($koneksi, $query_insert);

//Menampilkan konfirmasi proses penyimpanan
if($insert)
	{
	// Jika berhasil disimpan, dimunculkan data yang berhasil disimpan
	echo "<br/><center><h3><span class='label label-danger'>Masukan foto</span></h3><br/><br/>";

	
	//User dipersilahkan upload scan KTP
	
	echo"
		Jenis gambar yang dikirim hanya berformat .jpg<br/><br/>
	
	
    <form action='hasil-submit.php' method='post' enctype='multipart/form-data' name='FormUpload' id='FormUpload'>
	<input type='hidden' class='form-control' name='nama_lengkap' value='$nama_lengkap'>
	<input type='hidden' class='form-control' name='nama_baptis' value='$nama_baptis'>
	<input type='hidden' class='form-control' name='tempat_lahir' value='$tempat_lahir'>
	<input type='hidden' class='form-control' name='tgl_lahir' value='$tgl_lahir'>
	<input type='hidden' class='form-control' name='usia' value='$usia'>
	<input type='hidden' class='form-control' name='alamat' value='$alamat'>
	<input type='hidden' class='form-control' name='hari_kematian' value='$hari_kematian'>
	<input type='hidden' class='form-control' name='tgl_kematian' value='$tgl_kematian'>
	<input type='hidden' class='form-control' name='waktu_kematian' value='$waktu_kematian'>
	<input type='hidden' class='form-control' name='tempat_kematian' value='$tempat_kematian'>
	<input type='hidden' class='form-control' name='alamat_kematian' value='$alamat_kematian'>
	<input type='hidden' class='form-control' name='tempat_pemakaman' value='$tempat_pemakaman'>
	<input type='hidden' class='form-control' name='tgl_pemakaman' value='$tgl_pemakaman'>
	<input type='hidden' class='form-control' name='bentuk_pemakaman' value='$bentuk_pemakaman'>
	<input type='hidden' class='form-control' name='pemimpin_upacara' value='$pemimpin_upacara'>
	<input type='hidden' class='form-control' name='nama_famili' value='$nama_famili'>
	<input type='hidden' class='form-control' name='alamat_famili' value='$alamat_famili'>
		<input type='hidden' class='form-control' name='stasi' value='$stasi'>
		<input type='hidden' class='form-control' name='hari_perminyakan' value='$hari_perminyakan'>
		<input type='hidden' class='form-control' name='tgl_perminyakan' value='$tgl_perminyakan'>
		<input type='hidden' class='form-control' name='tempat_perminyakan' value='$tempat_perminyakan'>
		<input type='hidden' class='form-control' name='romo_perminyakan' value='$romo_perminyakan'>
		<input type='hidden' class='form-control' name='sakramen_yang_diterima' value='$sakramen_yang_diterima'>
		
		
	
	
	<input type='hidden' class='form-control' name='kode_kematian' value='$kode_komuni'>
	
    <p>Pilih Gambar :<p>";
    
    
    ?>
    
    <p>Foto  <br/><input type='file' name="pasfoto1"></p><?php
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