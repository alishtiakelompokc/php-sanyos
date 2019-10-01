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
                    <h3 class="form-section">FORMULIR PENDAFTARAN SAKRAMEN KRISMA</h3>
                                    </div>
<!---------------------------------------------------------------->                
<?php 
include 'koneksi.php';

$query = "SELECT MAX(kode_krisma) AS kode FROM krisma";
$hasil = mysqli_query($koneksi, $query);
$data  = mysqli_fetch_array($hasil);
$nim = $data['kode'];


//mengatur 3 karakter sebagai jumalh karakter yang tetap
//mengatur 4 karakter untuk jumlah karakter yang berubah-ubah
$noUrut = (int) substr($nim, 3, 4);
$noUrut++;

//menjadikan 201353 sebagai 6 karakter yang tetap
$char = "KR-";
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
    alert("Nama Pendaftar masih kosong!");
    form.nama_lengkap.focus();
    return (false);
  }
  else if (form.nama_baptis.value == ""){
    alert("Nama Baptis masih kosong!");
    form.nama_baptis.focus();
    return (false);
  }
    else if (form.nama_krisma.value == ""){
    alert("Nama Krisma masih kosong!");
    form.nama_krisma.focus();
    return (false);
  }
  else if (form.tempat_lahir.value == ""){
    alert("Tempat lahir masih kosong!");
    form.tempat_lahir.focus();
    return (false);
  }
  
  else if (form.tgl_lahir.value == ""){
    alert("Tanggal lahir masih kosong!");
    form.tgl_lahir.focus();
    return (false);
  }
else if (form.tempat_baptis.value == ""){
    alert("Tempat Baptis masih kosong!");
    form.tempat_baptis.focus();
    return (false);
  }
  
  else if (form.tgl_baptis.value == ""){
    alert("Tanggal Baptis masih kosong!");
    form.tgl_baptis.focus();
    return (false);
  }
   else if (form.tempat_komuni.value == ""){
    alert("Tempat Komuni masih kosong!");
    form.tempat_komuni.focus();
    return (false);
  }
  
  else if (form.tgl_komuni.value == ""){
    alert("Tanggal Komuni masih kosong!");
    form.tgl_komuni.focus();
    return (false);
  } 
    else if (form.tempat_menikah.value == ""){
    alert("Tempat menikah masih kosong!");
    form.tempat_menikah.focus();
    return (false);
  }
   else if (form.nama_suami_isteri.value == ""){
    alert("Nama suami/isteri masih kosong!");
    form.nama_suami_isteri.focus();
    return (false);
  }
   else if (form.status_perkawinan.value == ""){
    alert("Status perkawinan masih kosong!");
    form.status_perkawinan.focus();
    return (false);
  }
 
  else if (form.nama_ayah.value == ""){
    alert("Nama Ayah masih kosong!");
    form.nama_ayah.focus();
    return (false);
  }
  else if (form.nama_ibu.value == ""){
    alert("Nama ibu masih kosong!");
    form.nama_ibu.focus();
    return (false);
  }
   else if (form.alamat.value == ""){
    alert("Alamat masih kosong!");
    form.alamat.focus();
    return (false);
  }
else if (form.stasi.value == ""){
    alert("Stasi masih kosong!");
    form.stasi.focus();
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
                                  
    <h3 class="form-section">Data Diri Calon Krisma</h3>
	<div class="form-group">
		<label >Nama Lengkap</label>
		<input type="text" class="form-control" placeholder="Nama sesuai dengan akta kelahiran *" name="nama_lengkap">
	</div>
	<div class="form-group">
		<label >Nama Baptis</label>
		<input type="text" class="form-control" placeholder="Nama permandian anak *" name="nama_baptis">
	</div>
    <div class="form-group">
		<label >Nama Krisma</label>
		<input type="text" class="form-control" placeholder="Nama krisma anak (bila sudah ditentukan) *" name="nama_krisma">
	</div>
	<div class="form-group">
		<label>Tempat Lahir</label>
		<input type="text" class="form-control" placeholder="Tempat Lahir sesuai dengan akta kelahiran *" name="tempat_lahir">
	</div>

	<div class="form-group">
		<label>Tanggal Lahir</label>
		<input type="date" class="form-control" name="tgl_lahir">
	</div>
<div class="form-group">
		<label>Tempat Baptis</label>
		<input type="text" class="form-control" placeholder="Tempat penerimaan sakramen baptis *" name="tempat_baptis">
	</div>

	<div class="form-group">
		<label>Tanggal Baptis</label>
		<input type="date" class="form-control" name="tgl_baptis">
	</div>
<div class="form-group">
		<label>Tempat Komuni</label>
		<input type="text" class="form-control" placeholder="Tempat penerimaan sakramen komuni *" name="tempat_komuni">
	</div>

	<div class="form-group">
		<label>Tanggal Komuni</label>
		<input type="date" class="form-control" name="tgl_komuni">
	</div>
      <div class="form-group">
		<label></label>
    </div>                            
    <h4 class="form-section">Bila sudah kawin*</h4>                              
<div class="form-group">
		<label>Tempat Menikah</label>
		<input type="text" class="form-control" placeholder="Tempat penerimaan sakramen perkawinan *" name="tempat_menikah">
	</div>

	<div class="form-group">
		<label>Tanggal Menikah</label>
		<input type="date" class="form-control" name="tgl_menikah">
	</div>
  <div class="form-group">
		<label>Nama Suami/Isteri</label>
		<input type="text" class="form-control" placeholder="Nama lengkap suami/isteri*" name="nama_suami_isteri">
	</div>
  <div class="form-group">
  <label>Status Perkawinan</label><br>
    <input  type="radio" value="Gereja" name="status_perkawinan"><font color="black"> Gereja</font><br>
    <input  type="radio" value="KUA" name="status_perkawinan"><font color="black"> KUA</font><br>
    <input  type="radio" value="Catatan Sipil" name="status_perkawinan"><font color="black"> Catatan Sipil</font><br>
      <input  type="radio" value="Catatan Sipil" name="status_perkawinan"><font color="black"> Belum Menikah</font><br>
      <input  type="radio" value="Catatan Sipil" name="status_perkawinan"><font color="black"> Dll</font><br>
  </div>

 
 <div class="form-group">
		<label></label>
    </div> 
    <h3 class="form-section">Data Diri Orangtua</h3>

  <div class="form-group">
    <label>Nama Ayah</label>
    <input type="text" class="form-control" placeholder="Nama lengkap ayah kandung *" name="nama_ayah">
  </div>
  
<div class="form-group">
    <label>Nama Ibu</label>
    <input type="text" class="form-control" placeholder="Nama lengkap ibu kandung *"name="nama_ibu">
  </div>
  
  
  
   <div class="form-group">
    <label>Alamat Orangtua</label>
    <input type="text" class="form-control" placeholder="Alamat lengkap orangtua *" name="alamat">
  </div>
  <div class="form-group">
    <label>Stasi Orangtua</label>
    <input type="text" class="form-control" placeholder="Stasi/Lingkungan orangtua saat ini *" name="stasi">
  </div>
  

  <div class="form-group">
    <label>Kode Krisma</label>
    <input type="text" class="form-control" name="kode_krisma" value="<?php echo $IDbaru; ?>" readonly='readonly'>
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