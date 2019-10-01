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

if ($_FILES['pasfoto1']['size'] <= 2500000 && $_FILES['pasfoto2']['size'] <= 2500000 && $_FILES['pasfoto3']['size'] <= 2500000 && $_FILES['pasfoto4']['size'] <= 2500000) {
//folder tempat menyimpan file
if (!empty($_FILES["pasfoto1"]["tmp_name"]) && !empty($_FILES["pasfoto2"]["tmp_name"]) && !empty($_FILES["pasfoto3"]["tmp_name"]) && !empty($_FILES["pasfoto4"]["tmp_name"]))
{
	for ($i=1; $i <= 4; $i++) {
    $jenis_gambar=$_FILES['pasfoto'.$i]['type']; //memeriksa format gambar scan KTP
    if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/x-png")
    {       
    
        $syarat_pindahan = $kode_pindahan.$_FILES['pasfoto'.$i]['name'];  
        $namafolder="syarat_pindahan/".$syarat_pindahan; 
        
        //mengupload gambar scan ktp dan update row table database dengan path folder dan nama image		
        if (move_uploaded_file($_FILES['pasfoto'.$i]['tmp_name'], $namafolder)) {
            
			$query_input = "INSERT INTO foto_pindahan VALUES ('$kode_pindahan', '$syarat_pindahan')";
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
	<td>Nama Lengkap</td><td><?php echo $nama_lengkap; ?></td>
	</tr>
	
	<tr>
	<td>Tempat Lahir</td><td><?php echo $tempat_lahir; ?></td>
	</tr>
	<tr>
	<td>Tanggal Lahir</td><td><?php echo $tgl_lahir; ?></td>
	</tr>
    <tr>
	<td>Umur</td><td><?php echo $umur; ?></td>
	</tr> 
                
	<tr>
	<td>Jenis Kelamin</td><td><?php echo $jenis_kelamin; ?></td>
	</tr>
       
    <tr>
	<td>Agama Sebelumnya</td><td><?php echo $agama_sebelumnya; ?></td>
	</tr>
    
    <tr>
	<td>Pendidikan</td><td><?php echo $pendidikan; ?></td>
	</tr>
    
     <tr>
	<td>Pekerjaan</td><td><?php echo $pekerjaan; ?></td>
	</tr>
    
    <tr>
	<td>Alamat Lengkap</td><td><?php echo $alamat_lengkap; ?></td>
	</tr>
    <tr>
	<td>No.Tlp/HP</td><td><?php echo $no_tlp; ?></td>
	</tr>
    
	<tr>
	<td>Nama Suami/Isteri</td><td><?php echo $nama_suami_isteri; ?></td>
	</tr>
    <tr>
	<td>Status Perkawinan</td><td><?php echo $status_perkawinan; ?></td>
	</tr>
	<tr>
	<td>Tempat Perkawinan</td><td><?php echo $tempat_perkawinan; ?></td>
	</tr>
	<tr>
	<td>Tanggal Perkawinan</td><td><?php echo $tgl_perkawinan; ?></td>
	</tr>
    <tr>
	<td>Nama Ayah</td><td><?php echo $nama_ayah; ?></td>
	</tr>
	<tr>
	<td>Nama Ibu</td><td><?php echo $nama_ibu; ?></td>
	</tr>
     <tr>
	<td>Agama Ayah</td><td><?php echo $agama_ayah; ?></td>
	</tr>
<tr>
	<td>Agama Ibu/td><td><?php echo $agama_ibu; ?></td>
	</tr>
	<tr>
	<td>Alamat Orangtua</td><td><?php echo $alamat_ortu; ?></td>
	</tr>
	<tr>
	<td>Kode Pindahan</td><td><?php echo $kode_pindahan; ?></td>
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