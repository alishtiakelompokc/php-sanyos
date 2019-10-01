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
                    <h3 class="form-section">FORMULIR PENDAFTARAN PELAJARAN AGAMA KRISTEN Ke KATOLIK</h3>
                                    </div>
<!---------------------------------------------------------------->                
<?php 
include 'koneksi.php';

$query = "SELECT MAX(kode_pindahan) AS kode FROM pindahan_kristenkatolik";
$hasil = mysqli_query($koneksi, $query);
$data  = mysqli_fetch_array($hasil);
$nim = $data['kode'];


//mengatur 3 karakter sebagai jumalh karakter yang tetap
//mengatur 4 karakter untuk jumlah karakter yang berubah-ubah
$noUrut = (int) substr($nim, 3, 4);
$noUrut++;

//menjadikan 201353 sebagai 6 karakter yang tetap
$char = "PI-";
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
  else if (form.umur.value == ""){
    alert("Umur masih kosong!");
    form.umur.focus();
    return (false);
  }
 else if (form.jenis_kelamin.value == ""){
    alert("Jenis kelamin masih kosong!");
    form.jenis_kelamin.focus();
    return (false);
  }
 else if (form.agama_sebelumnya.value == ""){
    alert("Agama sebelumnya masih kosong!");
    form.agama_sebelumnya.focus();
    return (false);
  }
 else if (form.pendidikan.value == ""){
    alert("Pendidikan masih kosong!");
    form.pendidikan.focus();
    return (false);
  }
 else if (form.pekerjaan.value == ""){
    alert("Pekerjaan masih kosong!");
    form.pekerjaan.focus();
    return (false);
  }
 else if (form.alamat_lengkap.value == ""){
    alert("Alamat masih kosong!");
    form.alamat_lengkap.focus();
    return (false);
  }
 else if (form.no_tlp.value == ""){
    alert("Nomor Tlp/HP masih kosong!");
    form.no_tlp.focus();
    return (false);
  }
 else if (form.nama_suami_isteri.value == ""){
    alert("Nama Suami/Isteri masih kosong!");
    form.nama_suami_isteri.focus();
    return (false);
  }
 else if (form.status_perkawinan.value == ""){
    alert("Status Perkawinan masih kosong!");
    form.status_perkawinan.focus();
    return (false);
  }
 else if (form.tempat_perkawinan.value == ""){
    alert("Tempat Perkawinan masih kosong!");
    form.tempat_perkawinan.focus();
    return (false);
  }
 else if (form.tgl_perkawinan.value == ""){
    alert("Tanggal Perkawinan masih kosong!");
    form.tgl_perkawinan.focus();
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
     else if (form.agama_ayah.value == ""){
    alert("Agama Ayah masih kosong!");
    form.agama_ayah.focus();
    return (false);
  }  
  else if (form.agama_ibu.value == ""){
    alert("Agama Ibu masih kosong!");
    form.agama_ibu.focus();
    return (false);
  }
else if (form.alamat_ortu.value == ""){
    alert("Alamat orangtua Ibu masih kosong!");
    form.alamat_ortu.focus();
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
                                  
    <h3 class="form-section">Data Diri</h3>
	<div class="form-group">
		<label >Nama Lengkap</label>
		<input type="text" class="form-control" placeholder="Nama sesuai dengan akta kelahiran *" name="nama_lengkap">
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
		<label>Umur</label>
		<input type="text" class="form-control" placeholder="Umur *"  name="umur">
	</div>
    <div class="form-group">
        <label>Jenis Kelamin</label><br>
        <input  type="radio" value="Perempuan" name="jenis_kelamin"><font color="black"> Perempuan</font><br>
        <input  type="radio" value="Laki-laki" name="jenis_kelamin"><font color="black"> Laki-laki</font><br>
    
    </div>
    <div class="form-group">
		<label>Agama Sebelumnya</label>
		<input type="text" class="form-control" placeholder="Agama sebelumnya *"  name="agama_sebelumnya">
	</div>	
    <div class="form-group">
		<label>Pendidikan</label>
		<input type="text" class="form-control" placeholder="Pendidikan *"  name="pendidikan">
	</div>
	<div class="form-group">
		<label>Pekerjaan</label>
		<input type="text" class="form-control" placeholder="Pekerjaan *"  name="pekerjaan">
	</div>
    <div class="form-group">
		<label>Alamat lengkap</label>
		<input type="text" class="form-control" placeholder="Alamat lengkap *"  name="alamat_lengkap">
	</div>
    <div class="form-group">
		<label>No.Tlp/HP</label>
		<input type="text" class="form-control" placeholder="No.Tlp/HP *"  name="no_tlp">
	</div>
<h4 class="form-section">Bila sudah kawin*</h4>
                      
<div class="form-group">
		<label>Nama Suami/Isteri</label>
		<input type="text" class="form-control" placeholder="Nama Suami/Isteri *" name="nama_suami_isteri">
	</div>
<div class="form-group">
  <label>Status Perkawinan</label><br>
    <input  type="radio" value="Katolik" name="status_perkawinan"><font color="black"> Katolik</font><br>
    <input  type="radio" value="Kristen" name="status_perkawinan"><font color="black"> Kristen</font><br>
<input  type="radio" value="Islam" name="status_perkawinan"><font color="black"> Islam</font><br>
<input  type="radio" value="Hindu" name="status_perkawinan"><font color="black"> Hindu</font><br>
<input  type="radio" value="Budha" name="status_perkawinan"><font color="black"> Budha</font><br>
<input  type="radio" value="Adat" name="status_perkawinan"><font color="black"> Adat</font><br>
<input  type="radio" value="Catatan Sipil" name="status_perkawinan"><font color="black"> Catatan Sipil</font><br>
<input  type="radio" value="Belum menikah" name="status_perkawinan"><font color="black"> Belum menikah</font><br>
  </div>
<div class="form-group">
		<label>Tempat Perkawinan</label>
		<input type="text" class="form-control" placeholder="Tempat Perkawinan *" name="tempat_perkawinan">
	</div>
                                  	<div class="form-group">
		<label>Tanggal Perkawinan</label>
		<input type="date" class="form-control" name="tgl_perkawinan">
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
		<label>Agama Ayah</label>
		<input type="text" class="form-control" placeholder="Agama ayah kandung *" name="agama_ayah">
	</div>
<div class="form-group">
		<label>Agama Ibu</label>
		<input type="text" class="form-control" placeholder="Agama ibu kandung *" name="agama_ibu">
	</div>
  <div class="form-group">
    <label>Alamat Orangtua</label>
    <input type="text" class="form-control"placeholder="Alamat Lengkap Orangtua *" name="alamat_ortu">
  </div>
     <div class="form-group">
    <label>Kode Pindahan</label>
    <input type="text" class="form-control" name="kode_pindahan" value="<?php echo $IDbaru; ?>" readonly='readonly'>
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