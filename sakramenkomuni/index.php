<?php
session_start();
//Membuat kondisi kalau misal sudah login, maka akan masuk ke sistem
if (isset($_SESSION['username'])) {
$username = $_SESSION['username'];
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Santo Yosep Purwokerto</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  
  <link href="img/logo4.jpg" rel="icon">
    <link href="img/logo4.jpg" rel="logo4">
  

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
    .note
{
    text-align: center;
    height: 100px;
    background: -webkit-linear-gradient(left, #dc3545, #343a40);
    color: #fff;
    font-weight: bold;
    line-height: 80px;
}
.form-content
{
    padding: 5%;
    border: 1px solid #ced4da;
    margin-bottom: 2%;
}
.form-control{
    border-radius:1.5rem;
}
.btnSubmit
{
    border:none;
    border-radius:1.5rem;
    padding: 1%;
    width: 20%;
    cursor: pointer;
    background: #343a40;
    color: #fff;
}
</style>
    </head>
<!---------------------------------------------------------------->
<div class="container register-form">
            <div class="form">
                <div class="note">
                    <h3 class="form-section">FORMULIR PENDAFTARAN SAKRAMEN KOMUNI</h3>
                                    </div>
<!---------------------------------------------------------------->                
<?php 
include 'koneksi.php';

$query = "SELECT MAX(kode_komuni) AS kode FROM komuni";
$hasil = mysqli_query($koneksi, $query);
$data  = mysqli_fetch_array($hasil);
$nim = $data['kode'];


//mengatur 3 karakter sebagai jumalh karakter yang tetap
//mengatur 4 karakter untuk jumlah karakter yang berubah-ubah
$noUrut = (int) substr($nim, 3, 4);
$noUrut++;

//menjadikan 201353 sebagai 6 karakter yang tetap
$char = "KO-";
//%04s untuk mengatur 4 karakter di belakang 201353
$IDbaru = $char . sprintf("%04s", $noUrut);


?>
                
                
<!----------------------------------------------------------------->
<div class="row">
  <div class="col-md-12"></div>
  <div class="col-md-12">


 <script type="text/javascript">

function validasi_input(form){

  if (form.nama_lengkap.value == ""){
    alert("Nama lengkap masih kosong!");
    form.nama_lengkap.focus();
    return (false);
  }
  else if (form.nama_baptis.value == ""){
    alert("Nama Baptis masih kosong!");
    form.nama_baptis.focus();
    return (false);
  }
  else if (form.tempat_lahir.value == ""){
    alert("Tempat lahir masih kosong!");
    form.tempat_lahir.focus();
    return (false);
  }
  
  else if (form.tanggal_lahir.value == ""){
    alert("Tanggal lahir masih kosong!");
    form.tanggal_lahir.focus();
    return (false);
  }
  else if (form.tempat_baptis.value == ""){
    alert("Tempat baptis masih kosong!");
    form.tempat_baptis.focus();
    return (false);
  }
 
  else if (form.tanggal_baptis.value == ""){
    alert("Tanggal baptis Pendaftar masih kosong!");
    form.tanggal_baptis.focus();
    return (false);
  }
 
  else if (form.nama_ayah.value == ""){
    alert("Nama Ayah masih kosong!");
    form.nama_ayah.focus();
    return (false);
  }
  else if (form.nama_ibu.value == ""){
    alert("Nama Ibu masih kosong!");
    form.nama_ibu.focus();
    return (false);
  }
  


return (true);
}
</script>
<!------------------------------------------------------------------------------>
                
                
                
                
                <div class="form-content">
                    <div class="row">
                        <div class="col-md-12">
                              <form action="post.php" method="post"  name="form1" id="form1" onsubmit="return validasi_input(this)">
                                  
    <h3 class="form-section">Data Diri Calon Komuni</h3>
	<div class="form-group">
		<label >Nama Lengkap Anak</label>
		<input type="text" class="form-control" placeholder="Nama sesuai dengan akta kelahiran *" name="nama_lengkap">
	</div>
	<div class="form-group">
		<label >Nama Baptis</label>
		<input type="text" class="form-control" placeholder="Nama permandian anak *" name="nama_baptis">
	</div>
	<div class="form-group">
		<label>Tempat Lahir</label>
		<input type="text" class="form-control" placeholder="Tempat Lahir sesuai dengan akta kelahiran *" name="tempat_lahir">
	</div>

	<div class="form-group">
		<label>Tanggal Lahir</label>
		<input type="date" class="form-control" name="tanggal_lahir">
	</div>

  	<div class="form-group">
		<label>Tempat Baptis</label>
		<input type="text" class="form-control" placeholder="Tempat baptis anak *" name="tempat_baptis">
	</div>

	<div class="form-group">
		<label>Tanggal Baptis</label>
		<input type="date" class="form-control" name="tanggal_baptis">
	</div>

  <div class="form-group">
		<label>Nama Ayah</label>
		<input type="text" class="form-control" placeholder="Nama lengkap ayah kandung *" name="nama_ayah">
	</div>
  <div class="form-group">
    <label>Nama Ibu</label>
    <input type="text" class="form-control" placeholder="Nama lengkap ibu kandung *" name="nama_ibu">
  </div>

  <div class="form-group">
    <label>Alamat</label>
    <input type="text" class="form-control"placeholder="Alamat Lengkap *" name="alamat">
  </div>

  <div class="form-group">
    <label>Lingkungan/Stasi</label>
    <input type="text" class="form-control" placeholder="Stasi atau Lingkungan lengkap *" name="stasi">
  </div>
  
  <div class="form-group">
    <label>Kode Komuni</label>
    <input type="text" class="form-control" name="kode_komuni" value="<?php echo $IDbaru; ?>" readonly='readonly'>
  </div>

 
  
  
	
   
	
	<div class="row">
                                <div class="col-md-4 text-center">

                                </div>
                                <div class="col-md-4 text-center">
                                    <input type="submit" class="btn btn-outline-danger btn-block" value="SIMPAN">
                                </div>
                                <div class="col-md-4 text-center">

                                </div>
                            </div>
	</form>
                </div>
            </div>
        </div>
        <?php
}
//kalau misal belum login, menuju ke login.php
else{
    echo "<script>window.location = '../login.php';</script>";
}
?>