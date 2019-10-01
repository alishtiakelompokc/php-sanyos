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
$nama_baptis        				= $_POST['nama_baptis'] ;
$nama_krisma        				= $_POST['nama_krisma'] ;
$tempat_lahir						= $_POST['tempat_lahir'] ;
$tgl_lahir  						= $_POST['tgl_lahir'] ;
$tempat_baptis					 	= $_POST['tempat_baptis'] ;
$tgl_baptis					    	= $_POST['tgl_baptis'] ;
$tempat_komuni						= $_POST['tempat_komuni'] ;
$tgl_komuni						    = $_POST['tgl_komuni'] ;
$tempat_menikah						= $_POST['tempat_menikah'] ;
$tgl_menikah						= $_POST['tgl_menikah'] ;
$nama_suami_isteri                  = $_POST['nama_suami_isteri'] ;
$status_perkawinan                  = $_POST['status_perkawinan'] ;
$nama_ayah                          = $_POST['nama_ayah'] ;
$nama_ibu                           = $_POST['nama_ibu'] ;
$alamat                      		= $_POST['alamat'] ;
$stasi                              = $_POST['stasi'] ;
$kode_krisma						= $_POST['kode_krisma'] ;

if ($_FILES['pasfoto1']['size'] <= 2500000) {
//folder tempat menyimpan file
if (!empty($_FILES["pasfoto1"]["tmp_name"]))
{
	
	for ($i=1; $i <= 2; $i++) {
    $jenis_gambar=$_FILES['pasfoto'.$i]['type']; //memeriksa format gambar scan KTP
    if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/x-png")
    {        
        $syarat_krisma = $kode_krisma.$_FILES['pasfoto'.$i]['name'];  
        $namafolder="syarat_krisma/".$syarat_krisma; 
        
        //mengupload gambar scan ktp dan update row table database dengan path folder dan nama image		
        if (move_uploaded_file($_FILES["pasfoto".$i]['tmp_name'], $namafolder)) {
            
			$query_input = "INSERT INTO foto_krisma VALUES ('$kode_krisma', '$syarat_krisma')";
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
	<td>Nama Baptis</td><td><?php echo $nama_baptis; ?></td>
	</tr>
    <tr>
	<td>Nama Krisma</td><td><?php echo $nama_krisma; ?></td>
	</tr>
	<tr>
	<td>Tempat Lahir</td><td><?php echo $tempat_lahir; ?></td>
	</tr>
	<tr>
	<td>Tanggal Lahir</td><td><?php echo $tgl_lahir; ?></td>
	</tr>
    <tr>
	<td>Tempat Baptis</td><td><?php echo $tempat_baptis; ?></td>
	</tr>
	<tr>
	<td>Tanggal Baptis</td><td><?php echo $tgl_baptis; ?></td>
	</tr>
    <tr>
	<td>Tempat Komuni</td><td><?php echo $tempat_komuni; ?></td>
	</tr>
	<tr>
	<td>Tanggal Komuni</td><td><?php echo $tgl_komuni; ?></td>
	</tr>
    <tr>
	<td>Tempat Menikah</td><td><?php echo $tempat_menikah; ?></td>
	</tr>
	<tr>
	<td>Tanggal Menikah</td><td><?php echo $tgl_menikah; ?></td>
	</tr>
	<tr>
	<td>Nama Suami/Isteri</td><td><?php echo $nama_suami_isteri; ?></td>
	</tr>
	<tr>
	<td>Status Perkawinan</td><td><?php echo $status_perkawinan; ?></td>
	</tr>
	<tr>
	<td>Nama Ayah</td><td><?php echo $nama_ayah; ?></td>
	</tr>	
    <tr>
	<td>Nama Ibu</td><td><?php echo $nama_ibu; ?></td>
	</tr>
	<tr>
	<td>Alamat Orangtua</td><td><?php echo $alamat; ?></td>
	</tr>
    <tr>
	<td>Stasi/Lingkungan</td><td><?php echo $stasi; ?></td>
	</tr>
		
	<tr>
	<td>Kode Krisma</td><td><?php echo $kode_krisma; ?></td>
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