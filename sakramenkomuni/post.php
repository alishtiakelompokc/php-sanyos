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
$tanggal_lahir						= $_POST['tanggal_lahir'] ;
$tempat_baptis						= $_POST['tempat_baptis'] ;
$tanggal_baptis						= $_POST['tanggal_baptis'] ;

$nama_ayah                  		= $_POST['nama_ayah'] ;

$nama_ibu                  		    = $_POST['nama_ibu'] ;
$alamat                           	= $_POST['alamat'] ;
$stasi                        		= $_POST['stasi'] ;


$kode_komuni	   				    = $_POST['kode_komuni'] ;


//Menyimpan data ke dalam database Mysql
$query_insert = "INSERT INTO komuni (nama_lengkap,nama_baptis,tempat_lahir,tanggal_lahir,tempat_baptis,tanggal_baptis,nama_ayah,nama_ibu,alamat, stasi, kode_komuni,tgl_daftar,status_validasi) VALUES 
('$nama_lengkap','$nama_baptis','$tempat_lahir','$tanggal_lahir','$tempat_baptis','$tanggal_baptis','$nama_ayah','$nama_ibu','$alamat','$stasi','$kode_komuni',NOW(),'proses')";
if ($_FILES['pasfoto1']['size'] <= 2500000) {
$insert = mysqli_query($koneksi, $query_insert);

//Menampilkan konfirmasi proses penyimpanan
if($insert)
	{
	// Jika berhasil disimpan, dimunculkan data yang berhasil disimpan
	echo "<br/><center><h3><span class='label label-danger'>Silahkan Upload Syarat Pendaftaran</span></h3><br/><br/>";

	
	//User dipersilahkan upload scan KTP
	
	echo"
		Jenis gambar yang dikirim hanya berformat .jpg atau .jpeg dengan ukuran maks.2500kb<br/><br/>
	
	
    <form action='hasil-submit.php' method='post' enctype='multipart/form-data' name='FormUpload' id='FormUpload'>
	<input type='hidden' class='form-control' name='nama_lengkap' value='$nama_lengkap'>
	<input type='hidden' class='form-control' name='nama_baptis' value='$nama_baptis'>
	<input type='hidden' class='form-control' name='tempat_lahir' value='$tempat_lahir'>
	<input type='hidden' class='form-control' name='tanggal_lahir' value='$tanggal_lahir'>
	<input type='hidden' class='form-control' name='tempat_baptis' value='$tempat_baptis'>
	<input type='hidden' class='form-control' name='tanggal_baptis' value='$tanggal_baptis'>

	<input type='hidden' class='form-control' name='nama_ayah' value='$nama_ayah'>

	<input type='hidden' class='form-control' name='nama_ibu' value='$nama_ibu'>
	<input type='hidden' class='form-control' name='alamat' value='$alamat'>
	<input type='hidden' class='form-control' name='stasi' value='$stasi'>
	
	
	<input type='hidden' class='form-control' name='kode_komuni' value='$kode_komuni'>
	
    <p>Pilih Gambar :<p>";
    
    
    ?>

    <p>Surat Baptis  <br/><input type='file' name="pasfoto1"></p><?php
     echo"<p><input type='submit' name='button' id='button' value='Upload'></p>
    
    
      
   
    </form>";
	
	
	}


	//Jika data gagal disimpan, tampilkan pesan gagal penyimpanan
else
	{
	echo "Data GAGAL disimpan... ";
	
	}
}
 else {
  echo "<script>alert('File tidak boleh lebih dari 2500 Kb'); 
window.location='.../post.php';</script>";
}

?>
 
</div>
</div>
	

</body>
</html>