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
                    <h3 class="form-section">FORMULIR PENDAFTARAN SAKRAMEN BAPTIS</h3>
                                    </div>
<!---------------------------------------------------------------->                
<?php 
include 'koneksi.php';

$query = "SELECT MAX(kode_anak) AS kode FROM baptis_bayi";
$hasil = mysqli_query($koneksi, $query);
$data  = mysqli_fetch_array($hasil);
$nim = $data['kode'];


//mengatur 3 karakter sebagai jumalh karakter yang tetap
//mengatur 4 karakter untuk jumlah karakter yang berubah-ubah
$noUrut = (int) substr($nim, 3, 4);
$noUrut++;

//menjadikan 201353 sebagai 6 karakter yang tetap
$char = "BA-";
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
  else if (form.nama_permandian_anak.value == ""){
    alert("Nama Permandian masih kosong!");
    form.nama_permandian_anak.focus();
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
  else if (form.stasi.value == ""){
    alert("Stasi Pendaftar masih kosong!");
    form.stasi.focus();
    return (false);
  }
 
  else if (form.no_hp.value == ""){
    alert("No. Hp Pendaftar masih kosong!");
    form.no_hp.focus();
    return (false);
  }
 
  else if (form.nama_ayah.value == ""){
    alert("Nama Ayah masih kosong!");
    form.nama_ayah.focus();
    return (false);
  }
  else if (form.agama_ayah.value == ""){
    alert("Agama Ayah masih kosong!");
    form.agama_ayah.focus();
    return (false);
  }
   else if (form.pekerjaan_ayah.value == ""){
    alert("Pekerjaan Ayah masih kosong!");
    form.pekerjaan_ayah.focus();
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
                                  
    <h3 class="form-section">Data Diri Calon Baptisan</h3>
	<div class="form-group">
		<label >Nama Lengkap Anak</label>
		<input type="text" class="form-control" placeholder="Nama sesuai dengan akta kelahiran *" name="nama_lengkap">
	</div>
	<div class="form-group">
		<label >Nama Permandian Anak</label>
		<input type="text" class="form-control" placeholder="Nama permandian anak *" name="nama_permandian_anak">
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
  <label>Jenis Kelamin</label><br>
    <input  type="radio" value="Laki-laki" name="jenis_kelamin"><font color="black"> Laki-laki</font><br>
    <input  type="radio" value="Perempuan" name="jenis_kelamin"><font color="black"> Perempuan</font><br>
  </div>

  <div class="form-group">
		<label>Anak yang ke</label>
		<input type="text" class="form-control" placeholder="Anak yang ke- *" name="anak_yang_ke">
	</div>
  <div class="form-group">
    <label>Stasi/Lingkungan</label>
    <input type="text" class="form-control" placeholder="Stasi(...)/Lingkungan(...)/Paroki(...) *" name="stasi">
  </div>

  <div class="form-group">
    <label>No. Hp</label>
    <input type="text" class="form-control"placeholder="+6289xxxxxxx *" name="no_hp">
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
    <label>Agama Ayah</label>
    <input type="text" class="form-control" placeholder="Agama ayah kandung  *" name="agama_ayah">
  </div>
  
  <div class="form-group">
    <label>Pekerjaan Ayah</label>
    <input type="text" class="form-control" placeholder="Pekerjaan ayah kandung *" name="pekerjaan_ayah">
  </div>
<div class="form-group">
    <label>Nama Ibu</label>
    <input type="text" class="form-control" placeholder="Nama lengkap ibu kandung *"name="nama_ibu">
  </div>
  <div class="form-group">
    <label>Agama Ibu</label>
    <input type="text" class="form-control" placeholder="Agama ibu kandung *"name="agama_ibu">
  </div>
  <div class="form-group">
    <label>Pekerjaan Ibu</label>
    <input type="text" class="form-control" placeholder="Pekerjaan ayah kandung *" name="pekerjaan_ibu">
  </div>
  <div class="form-group">
    <label>Tempat Sakramen Perkawinan</label>
    <input type="text" class="form-control" placeholder="Tempat sakramen perkawinan orangtua *"name="tempat_sakramen_perkawinan">
  </div>
  
  <div class="form-group">
  <label>Status Perkawinan</label><br>
    <input  type="radio" value="Gereja" name="status_perkawinan"><font color="black"> Gereja</font><br>
    <input  type="radio" value="KUA" name="status_perkawinan"><font color="black"> KUA</font><br>
    <input  type="radio" value="Catatan Sipil" name="status_perkawinan"><font color="black"> Catatan Sipil</font><br>
  </div>
   <div class="form-group">
    <label>Alamat Orangtua</label>
    <input type="text" class="form-control" placeholder="Alamat lengkap orangtua *" name="alamat_orangtua">
  </div>
  <div class="form-group">
    <label>Stasi Orangtua</label>
    <input type="text" class="form-control" placeholder="Stasi/Lingkungan orangtua saat ini *" name="stasi_orangtua">
  </div>
  <div class="form-group">
    <label>Nama Wali Permandian</label>
    <input type="text" class="form-control" placeholder="Nama lengkap wali permandian *" name="nama_wali_permandian">
  </div>
  <div class="form-group">
    <label>Tempat Permandian</label>
    <input type="text" class="form-control" placeholder="Stasi(..)/Lingkungan(...)/Paroki(...) *" name="tempat_permandian">
  </div>
  <div class="form-group">
    <label>Hari Permandian</label>
    <input type="text" class="form-control" placeholder="Hari permandian *" name="hari_permandian">
  </div>
  <div class="form-group">
    <label>Tanggal Permandian</label>
    <input type="date" class="form-control" name="tanggal_permandian">
  </div>
 <div class="form-group">
    <label>Pastor Yang Mempermandikan</label>
    <input type="text" class="form-control" placeholder="Nama lengkap pastor yang mempermandikan *" name="pastor_yang_mempermandikan">
  </div>

  <div class="form-group">
    <label>Kode Anak</label>
    <input type="text" class="form-control" name="kode_anak" value="<?php echo $IDbaru; ?>" readonly='readonly'>
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