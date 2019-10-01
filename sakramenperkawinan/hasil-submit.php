<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4">

<?php
include"koneksi.php";
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
$stasi_pria						         = $_POST['stasi_pria'] ;
$nama_ayah_pria                           = $_POST['nama_ayah_pria'] ;
$agama_ayah_pria                        = $_POST['agama_ayah_pria'] ;
$pekerjaan_ayah_pria                    = $_POST['pekerjaan_ayah_pria'] ;      
$alamat_ayah_pria                       = $_POST['alamat_ayah_pria'] ;
$nama_ibu_pria                          = $_POST['nama_ibu_pria'] ;
$agama_ibu_pria                         = $_POST['agama_ibu_pria'] ;
$pekerjaan_ibu_pria                     = $_POST['pekerjaan_ibu_pria'] ;      
$alamat_ibu_pria                        = $_POST['alamat_ibu_pria'] ;  
$nama_lengkap_wanita                       = $_POST['nama_lengkap_wanita'] ;
$tempat_lahir_wanita						= $_POST['tempat_lahir_wanita'] ;
$tgl_lahir_wanita  						= $_POST['tgl_lahir_wanita'] ;
$tempat_baptis_wanita					 	= $_POST['tempat_baptis_wanita'] ;
$tgl_baptis_wanita					    	= $_POST['tgl_baptis_wanita'] ;
$tempat_krisma_wanita						= $_POST['tempat_krisma_wanita'] ;
$tgl_krisma_wanita						    = $_POST['tgl_krisma_wanita'] ;
$agama_wanita						        = $_POST['agama_wanita'] ;
$pendidikan_terakhir_wanita				= $_POST['pendidikan_terakhir_wanita'] ;
$pekerjaan_wanita						    = $_POST['pekerjaan_wanita'] ;
$alamat_wanita						          = $_POST['alamat_wanita'] ;
$stasi_wanita						         = $_POST['stasi_wanita'] ;
$nama_ayah_wanita                          = $_POST['nama_ayah_wanita'] ;
$agama_ayah_wanita                          = $_POST['agama_ayah_wanita'] ;
$pekerjaan_ayah_wanita                          = $_POST['pekerjaan_ayah_wanita'] ;      
$alamat_ayah_wanita                          = $_POST['alamat_ayah_wanita'] ;
$nama_ibu_wanita                           = $_POST['nama_ibu_wanita'] ;
$agama_ibu_wanita                          = $_POST['agama_ibu_wanita'] ;
$pekerjaan_ibu_wanita                          = $_POST['pekerjaan_ibu_wanita'] ;      
$alamat_ibu_wanita                          = $_POST['alamat_ibu_wanita'] ;
$kode_perkawinan						= $_POST['kode_perkawinan'] ;

if ($_FILES['pasfoto1']['size'] <= 2500000 && $_FILES['pasfoto2']['size'] <= 2500000 && $_FILES['pasfoto3']['size'] <= 2500000 && $_FILES['pasfoto4']['size'] <= 2500000)  {
//folder tempat menyimpan file
if (!empty($_FILES["pasfoto1"]["tmp_name"]) && !empty($_FILES["pasfoto2"]["tmp_name"]) && !empty($_FILES["pasfoto3"]["tmp_name"]) && !empty($_FILES["pasfoto4"]["tmp_name"]))
{
	
	for ($i=1; $i <= 4; $i++) {
    $jenis_gambar=$_FILES['pasfoto'.$i]['type']; //memeriksa format gambar scan KTP
    if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/x-png")
    {        
        $syarat_perkawinan = $kode_perkawinan.$_FILES['pasfoto'.$i]['name'];  
        $namafolder="syarat_perkawinan/".$syarat_perkawinan; 
        
        //mengupload gambar scan ktp dan update row table database dengan path folder dan nama image		
        if (move_uploaded_file($_FILES["pasfoto".$i]['tmp_name'], $namafolder)) {
            
			$query_input = "INSERT INTO foto_perkawinan VALUES ('$kode_perkawinan', '$syarat_perkawinan')";
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
                <h3 class="form-section">Data Diri Mempelai Pria</h3>
			<tr>
	<td>Nama Lengkap</td><td><?php echo $nama_lengkap_pria; ?></td>
	</tr>
	<tr>
	
	<tr>
	<td>Tempat Lahir</td><td><?php echo $tempat_lahir_pria; ?></td>
	</tr>
	<tr>
	<td>Tanggal Lahir</td><td><?php echo $tgl_lahir_pria; ?></td>
	</tr>
    <tr>
	<td>Tempat Baptis</td><td><?php echo $tempat_baptis_pria; ?></td>
	</tr>
	<tr>
	<td>Tanggal Baptis</td><td><?php echo $tgl_baptis_pria; ?></td>
	</tr>
    <tr>
	<td>Tempat Krisma</td><td><?php echo $tempat_krisma_pria; ?></td>
	</tr>
	<tr>
	<td>Tanggal Krisma</td><td><?php echo $tgl_krisma_pria; ?></td>
	</tr>
    
	<tr>
	<td>Agama</td><td><?php echo $agama_pria; ?></td>
	</tr>
                <tr>
	<td>Pendidikan Terakhir</td><td><?php echo $pendidikan_terakhir_pria; ?></td>
	</tr>
                <tr>
	<td>Pekerjaan</td><td><?php echo $pekerjaan_pria; ?></td>
	</tr>
                <tr>
	<td>Alamat</td><td><?php echo $alamat_pria; ?></td>
	</tr>
                <tr>
	<td>Stasi</td><td><?php echo $stasi_pria; ?></td>
	</tr>
	<tr>
	<td>Nama Ayah</td><td><?php echo $nama_ayah_pria; ?></td>
	</tr>	
                <tr>
	<td>Agama Ayah</td><td><?php echo $agama_ayah_pria; ?></td>
	</tr>
                <tr>
	<td>Pekerjaan Ayah</td><td><?php echo $pekerjaan_ayah_pria; ?></td>
	</tr>
                <tr>
	<td>Alamat Ayah</td><td><?php echo $alamat_ayah_pria; ?></td>
	</tr>
    <tr>
	<td>Nama Ibu</td><td><?php echo $nama_ibu_pria; ?></td>
	</tr>
                    <tr>
	<td>Agama Ibu</td><td><?php echo $agama_ibu_pria; ?></td>
	</tr>
                    <tr>
	<td>Pekerjaan Ibu</td><td><?php echo $pekerjaan_ibu_pria; ?></td>
	</tr>
                    <tr>
	<td>Alamat Ibu</td><td><?php echo $alamat_ibu_pria; ?></td>
	</tr>
	<tr>
        <td align="center"><h3>Data Diri Mempelai Wanita</h3></td>
    </tr>
<tr>
    <td>Nama Lengkap</td><td><?php echo $nama_lengkap_wanita; ?></td>
	</tr>
	<tr>
	
	<tr>
	<td>Tempat Lahir</td><td><?php echo $tempat_lahir_wanita; ?></td>
	</tr>
	<tr>
	<td>Tanggal Lahir</td><td><?php echo $tgl_lahir_wanita; ?></td>
	</tr>
    <tr>
	<td>Tempat Baptis</td><td><?php echo $tempat_baptis_wanita; ?></td>
	</tr>
	<tr>
	<td>Tanggal Baptis</td><td><?php echo $tgl_baptis_wanita; ?></td>
	</tr>
    <tr>
	<td>Tempat Krisma</td><td><?php echo $tempat_krisma_wanita; ?></td>
	</tr>
	<tr>
	<td>Tanggal Krisma</td><td><?php echo $tgl_krisma_wanita; ?></td>
	</tr>
    
	<tr>
	<td>Agama</td><td><?php echo $agama_wanita; ?></td>
	</tr>
                <tr>
	<td>Pendidikan Terakhir</td><td><?php echo $pendidikan_terakhir_wanita; ?></td>
	</tr>
                <tr>
	<td>Pekerjaan</td><td><?php echo $pekerjaan_wanita; ?></td>
	</tr>
                <tr>
	<td>Alamat</td><td><?php echo $alamat_wanita; ?></td>
	</tr>
                <tr>
	<td>Stasi</td><td><?php echo $stasi_wanita; ?></td>
	</tr>
	<tr>
        	<td>Nama Ayah</td><td><?php echo $nama_ayah_wanita; ?></td>
	</tr>	
                <tr>
	<td>Agama Ayah</td><td><?php echo $agama_ayah_wanita; ?></td>
	</tr>
                <tr>
	<td>Pekerjaan Ayah</td><td><?php echo $pekerjaan_ayah_wanita; ?></td>
	</tr>
                <tr>
	<td>Alamat Ayah</td><td><?php echo $alamat_ayah_wanita ?></td>
	</tr>
    <tr>
	<td>Nama Ibu</td><td><?php echo $nama_ibu_wanita; ?></td>
	</tr>
                    <tr>
	<td>Agama Ibu</td><td><?php echo $agama_ibu_wanita; ?></td>
	</tr>
                    <tr>
	<td>Pekerjaan Ibu</td><td><?php echo $pekerjaan_ibu_wanita; ?></td>
	</tr>
                    <tr>
	<td>Alamat Ibu</td><td><?php echo $alamat_ibu_wanita; ?></td>
	</tr>
                	<tr>
	<td>Kode Perkawinan</td><td><?php echo $kode_perkawinan; ?></td>
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