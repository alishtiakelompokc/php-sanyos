<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4">

<?php
include"koneksi.php";
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

if ($_FILES['pasfoto1']['size'] <= 2500000) {
//folder tempat menyimpan file
if (!empty($_FILES["pasfoto1"]["tmp_name"]))
{
	
	for ($i=1; $i <= 3; $i++) {
    $jenis_gambar=$_FILES['pasfoto'.$i]['type']; //memeriksa format gambar scan KTP
    if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/x-png")
    {        
        $syarat_katekumen = $kode_katekumen.$_FILES['pasfoto'.$i]['name'];  
        $namafolder="syarat_katekumen/".$syarat_katekumen; 
        
        //mengupload gambar scan ktp dan update row table database dengan path folder dan nama image		
        if (move_uploaded_file($_FILES['pasfoto'.$i]['tmp_name'], $namafolder)) {
            
			$query_input = "INSERT INTO foto_katekumen VALUES ('$kode_katekumen', '$syarat_katekumen')";
			mysqli_query($koneksi, $query_input);
		// jika berhasil disimpan, ditampilkan data dan thumbnail image scan ktp yang diupload

		//jika gagal upload, ditampilkan pesan Gagal
		} else {
           echo "Gambar gagal dikirim";

        }
   		} 
   	}
   	?>
			<br/><center><h3><span class='label label-danger'>Formulir Pendaftaran</span></h3><br/><br/>
			<table class='table'>
			<tr>
	<td>Nama Lengkap</td><td><?php echo $nama_lengkap; ?></td>
	</tr>
	<tr>
	<td>Nama Permandian</td><td><?php echo $nama_permandian_anak; ?></td>
	</tr>
	<tr>
	<td>Tempat Lahir</td><td><?php echo $tempat_lahir; ?></td>
	</tr>
	<tr>
	<td>Tanggal Lahir</td><td><?php echo $tanggal_lahir; ?></td>
	</tr>
	<tr>
	<td>Stasi</td><td><?php echo $stasi; ?></td>
	</tr>
	<tr>
	<td>Agama Sebelumnya</td><td><?php echo $agama_sebelumnya; ?></td>
	</tr>

	<tr>
	<td>Ijazah Terakhir</td><td><?php echo $ijazah_terakhir; ?></td>
	</tr>
	
	<tr>
	<td>Pekerjaan</td><td><?php echo $pekerjaan; ?></td>
	</tr>
	
	<tr>
	<td>Nama Anak-anak</td><td><?php echo $nama_anak_anak; ?></td>
	</tr>
	<tr>
	<td>Alamat Sekarang</td><td><?php echo $alamat_sekarang; ?></td>
	</tr>
	
	<tr>
	<td>Nama Suami/Isteri</td><td><?php echo $nama_suami_isteri; ?></td>
	</tr>		
		<tr>
	<td>Pekerjaan Suami/Isteri</td><td><?php echo $pekerjaan_suami_isteri; ?></td>
	</tr>
		<tr>
	<td>Status Perkawinan</td><td><?php echo $status_perkawinan; ?></td>
	</tr>
		<tr>
	<td>Tempat Perkawinan</td><td><?php echo $tempat_perkawinan; ?></td>
	</tr>
	<tr>
	<td>Tanggal Perkawinan</td><td><?php echo $tanggal_perkawinan; ?></td>
	</tr>
		<tr>
	<td>Jumlah Anak</td><td><?php echo $jumlah_anak; ?></td>
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
	<td>Alamat Orangtua</td><td><?php echo $alamat_ortu; ?></td>
	</tr>
	<tr>
	<td>Nama Guru Agama</td><td><?php echo $nama_guru_agama; ?></td>
	</tr>
	<tr>
	<td>Wali Permandian</td><td><?php echo $wali_permandian; ?></td>
	</tr>
		<tr>
	<td>Pastor Yang Mempermandikan</td><td><?php echo $pastor_yang_mempermandikan; ?></td>
	</tr>	
	<tr>
	<td>Kode Katekumen</td><td><?php echo $kode_katekumen; ?></td>
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
<!-- <br><br>
<button style="margin-left:5%" onClick="print_d()">Cetak Formulir</button>
    <script>
		function print_d(){
			window.open("print.php","_blank");
		}
	</script><br><br> -->
<div class="alert alert-success" role=alert> <strong>Silahkan Kembali Ke Menu Utama untuk Login Sistem </strong><a href="../sakramen.php">disini</a>		
	

</div>
</div>
</body>

</html>