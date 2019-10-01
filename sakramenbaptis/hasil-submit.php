<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4">

<?php
include"koneksi.php";
$nama_lengkap                       = $_POST['nama_lengkap'] ;
$nama_permandian_anak				= $_POST['nama_permandian_anak'] ;
$tempat_lahir						= $_POST['tempat_lahir'] ;
$tanggal_lahir						= $_POST['tanggal_lahir'] ;
$jenis_kelamin						= $_POST['jenis_kelamin'] ;
$anak_yang_ke						= $_POST['anak_yang_ke'] ;
$stasi      				    	= $_POST['stasi'] ;
$no_hp      				    	= $_POST['no_hp'] ;
$nama_ayah                  		= $_POST['nama_ayah'] ;
$agama_ayah							= $_POST['agama_ayah'] ;
$pekerjaan_ayah						= $_POST['pekerjaan_ayah'] ;
$nama_ibu                           = $_POST['nama_ibu'] ;
$agama_ibu                  		= $_POST['agama_ibu'] ;
$pekerjaan_ibu                 		= $_POST['pekerjaan_ibu'] ;
$tempat_sakramen_perkawinan    		= $_POST['tempat_sakramen_perkawinan'] ;
$status_perkawinan                  = $_POST['status_perkawinan'] ;
$alamat_orangtua             		= $_POST['alamat_orangtua'] ;
$stasi_orangtua             		= $_POST['stasi_orangtua'] ;
$nama_wali_permandian          		= $_POST['nama_wali_permandian'] ;
$tempat_permandian             		= $_POST['tempat_permandian'] ;
$hari_permandian             		= $_POST['hari_permandian'] ;
$tanggal_permandian            		= $_POST['tanggal_permandian'] ;
$pastor_yang_mempermandikan          = $_POST['pastor_yang_mempermandikan'] ;

$kode_anak							= $_POST['kode_anak'] ;

if ($_FILES['pasfoto1']['size'] <= 2500000) {
//folder tempat menyimpan file
if (!empty($_FILES["pasfoto1"]["tmp_name"]))
{
	
	for ($i=1; $i <= 3; $i++) {
    $jenis_gambar=$_FILES['pasfoto'.$i]['type']; //memeriksa format gambar scan KTP
    if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/x-png")
    {        
        $syarat_baptis = $kode_anak.$_FILES['pasfoto'.$i]['name'];  
        $namafolder="syarat_baptis/".$syarat_baptis; 
        
        //mengupload gambar scan ktp dan update row table database dengan path folder dan nama image		
        if (move_uploaded_file($_FILES["pasfoto".$i]['tmp_name'], $namafolder)) {
            
			$query_input = "INSERT INTO foto_pendaftarbaptisbayi VALUES ('$kode_anak', '$syarat_baptis')";
			mysqli_query($koneksi, $query_input);
		// jika berhasil disimpan, ditampilkan data dan thumbnail image scan ktp yang diupload

	
		//Jika gagal upload, tampilkan pesan Gagal	
        } else {
           echo "Gambar gagal dikirim";

        }
   		} 
   	}
   ?>
			<br/><center><h3><span class='label label-danger'>Formulir Pendaftaran</span></h3><br/><br/>
			<table class='table'>
			<tr>
	<td>Nama Pendaftar</td><td><?php echo $nama_lengkap; ?></td>
	</tr>
	<tr>
	<td>Nama Permandian Anak</td><td><?php echo $nama_permandian_anak; ?></td>
	</tr>
	<tr>
	<td>Tempat Lahir</td><td><?php echo $tempat_lahir; ?></td>
	</tr>
	<tr>
	<td>Tanggal Lahir</td><td><?php echo $tanggal_lahir; ?></td>
	</tr>
	<tr>
	<td>Jenis Kelamin</td><td><?php echo $jenis_kelamin; ?></td>
	</tr>
	<tr>
	<td>Anak yang ke-</td><td><?php echo $anak_yang_ke; ?></td>
	</tr>

	<tr>
	<td>Stasi/Lingkungan</td><td><?php echo $stasi; ?></td>
	</tr>
	
	<tr>
	<td>No. Hp</td><td><?php echo $no_hp; ?></td>
	</tr>
	
	<tr>
	<td>Nama Ayah</td><td><?php echo $nama_ayah; ?></td>
	</tr>
	<tr>
	<td>Agama Ayah</td><td><?php echo $agama_ayah; ?></td>
	</tr>
	
	<tr>
	<td>Pekerjaan Ayah</td><td><?php echo $pekerjaan_ayah; ?></td>
	</tr>		
		<tr>
	<td>Nama Ibu</td><td><?php echo $nama_ibu; ?></td>
	</tr>
		<tr>
	<td>Agama Ibu</td><td><?php echo $agama_ibu; ?></td>
	</tr>
		<tr>
	<td>Pekerjaan Ibu</td><td><?php echo $pekerjaan_ibu; ?></td>
	</tr>
	<tr>
	<td>Tempat Sakramen Perkawinan</td><td><?php echo $tempat_sakramen_perkawinan; ?></td>
	</tr>
		<tr>
	<td>Status Perkawinan</td><td><?php echo $status_perkawinan; ?></td>
	</tr>
		<tr>
	<td>Alamat Orangtua</td><td><?php echo $alamat_orangtua; ?></td>
	</tr>
		<tr>
	<td>Stasi Orangtua</td><td><?php echo $stasi_orangtua; ?></td>
	</tr>
	<tr>
	<td>Nama Wali Permandian</td><td><?php echo $nama_wali_permandian; ?></td>
	</tr>
		<tr>
	<td>Tempat Permandian</td><td><?php echo $tempat_permandian; ?></td>
	</tr>
	<tr>
	<td>Hari Permandian</td><td><?php echo $hari_permandian; ?></td>
	</tr>
		<tr>
	<td>Tanggal Permandian</td><td><?php echo $tanggal_permandian; ?></td>
	</tr>
		<tr>
	<td>Pastor Yang Mempermandikan</td><td><?php echo $pastor_yang_mempermandikan; ?></td>
	</tr>	
	<tr>
	<td>Kode Anak</td><td><?php echo $kode_anak; ?></td>
	</tr>
	
    </table>		
	<?php
} else {
    //echo "<script>Anda belum memilih gambar</script>";
    echo "<script>
	window.location = history.go(-1);
</script>";
}
}else {
  echo "<script>alert('File tidak boleh lebih dari 2500 Kb'); window.location='index.php';</script>";
}
?>
<br><br>
<!-- <button style="margin-left:5%" onClick="print_d()">Cetak Formulir</button> -->
    <!-- <script> -->
		<!-- function print_d(){ -->
			<!-- window.open("print.php","_blank"); -->
		<!-- } -->
	<!-- </script><br><br> -->
<div class="alert alert-success" role=alert> <strong>Silahkan Kembali Ke Menu Utama untuk Login Sistem </strong><a href="../sakramen.php">disini</a>

</div>
</div>
</body>

</html>