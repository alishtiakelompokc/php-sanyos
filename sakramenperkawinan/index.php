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
                    <h3 class="form-section">FORMULIR PENDAFTARAN SAKRAMEN PERKAWINAN</h3>
                                    </div>
<!---------------------------------------------------------------->                
<?php 
include 'koneksi.php';

$query = "SELECT MAX(kode_perkawinan) AS kode FROM perkawinan";
$hasil = mysqli_query($koneksi, $query);
$data  = mysqli_fetch_array($hasil);
$nim = $data['kode'];


//mengatur 3 karakter sebagai jumalh karakter yang tetap
//mengatur 4 karakter untuk jumlah karakter yang berubah-ubah
$noUrut = (int) substr($nim, 3, 4);
$noUrut++;

//menjadikan 201353 sebagai 6 karakter yang tetap
$char = "PR-";
//%04s untuk mengatur 4 karakter di belakang 201353
$IDbaru = $char . sprintf("%04s", $noUrut);


?>
                
                
<!----------------------------------------------------------------->
<div class="row">
  <div class="col-md-12"></div>
  <div class="col-md-12">


 <script type="text/javascript">

function validasi_input(form){

  if (form.nama_lengkap_pria.value == ""){
    alert("Nama Pendaftar masih kosong!");
    form.nama_lengkap_pria.focus();
    return (false);
  }
  
  else if (form.tempat_lahir_pria.value == ""){
    alert("Tempat lahir masih kosong!");
    form.tempat_lahir_pria.focus();
    return (false);
  }
  
  else if (form.tgl_lahir_pria.value == ""){
    alert("Tanggal lahir masih kosong!");
    form.tgl_lahir_pria.focus();
    return (false);
  }
    else if (form.tempat_baptis_pria.value == ""){
    alert("Tempat baptis masih kosong!");
    form.tempat_baptis_pria.focus();
    return (false);
  }
  
  else if (form.tgl_baptis_pria.value == ""){
    alert("Tanggal baptis masih kosong!");
    form.tgl_baptis_pria.focus();
    return (false);
  }
    else if (form.tempat_krisma_pria.value == ""){
    alert("Tempat krisma masih kosong!");
    form.tempat_krisma_pria.focus();
    return (false);
  }
  
  else if (form.tgl_krisma_pria.value == ""){
    alert("Tanggal krisma masih kosong!");
    form.tgl_krisma_pria.focus();
    return (false);
  }
  else if (form.agama_pria.value == ""){
    alert("Agama pria masih kosong!");
    form.agama_pria.focus();
    return (false);
  }
 
  else if (form.pendidikan_terakhir_pria.value == ""){
    alert("Pendidikan terakhir masih kosong!");
    form.pendidikan_terakhir_pria.focus();
    return (false);
  }
    else if (form.pekerjaan_pria.value == ""){
    alert("Pekerjaan masih kosong!");
    form.pekerjaan_pria.focus();
    return (false);
  }
 else if (form.alamat_pria.value == ""){
    alert("Alamat masih kosong!");
    form.alamat_pria.focus();
    return (false);
  }
    else if (form.stasi_pria.value == ""){
    alert("Stasi masih kosong!");
    form.stasi_pria.focus();
    return (false);
  }
  else if (form.nama_ayah_pria.value == ""){
    alert("Nama Ayah masih kosong!");
    form.nama_ayah_pria.focus();
    return (false);
  }
    
  else if (form.agama_ayah_pria.value == ""){
    alert("Agama Ayah masih kosong!");
    form.agama_ayah_pria.focus();
    return (false);
  }
    
   else if (form.pekerjaan_ayah_pria.value == ""){
    alert("Pekerjaan Ayah masih kosong!");
    form.pekerjaan_ayah_pria.focus();
    return (false);
  }
else if (form.alamat_ayah_pria.value == ""){
    alert("Alamat ayah masih kosong!");
    form.alamat_ayah_pria.focus();
    return (false);
  }
    else if (form.nama_ibu_pria.value == ""){
    alert("Nama ibu masih kosong!");
    form.nama_ibu_pria.focus();
    return (false);
  }
        else if (form.agama_ibu_pria.value == ""){
    alert("Agama ibu masih kosong!");
    form.agama_ibu_pria.focus();
    return (false);
  }
    else if (form.pekerjaan_ibu_pria.value == ""){
    alert("Pekerjaan ibu masih kosong!");
    form.pekerjaan_ibu_pria.focus();
    return (false);
  }
        else if (form.alamat_ibu_pria.value == ""){
    alert("Alamat ibu masih kosong!");
    form.alamat_ibu_pria.focus();
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
                                  
    <h3 class="form-section">Data Diri Mempelai Pria</h3>
	<div class="form-group">
		<label >Nama Lengkap</label>
		<input type="text" class="form-control" placeholder="Nama sesuai dengan akta kelahiran *" name="nama_lengkap_pria">
	</div>
	
	<div class="form-group">
		<label>Tempat Lahir</label>
		<input type="text" class="form-control" placeholder="Tempat Lahir sesuai dengan akta kelahiran *" name="tempat_lahir_pria">
	</div>

	<div class="form-group">
		<label>Tanggal Lahir</label>
		<input type="date" class="form-control" name="tgl_lahir_pria">
	</div>
<div class="form-group">
		<label>Tempat Baptis</label>
		<input type="text" class="form-control" placeholder="Tempat penerimaan sakramen baptis *" name="tempat_baptis_pria">
	</div>

	<div class="form-group">
		<label>Tanggal Baptis</label>
		<input type="date" class="form-control" name="tgl_baptis_pria">
	</div>
                                  <div class="form-group">
		<label>Tempat Krisma</label>
		<input type="text" class="form-control" placeholder="Tempat penerimaan sakramen krisma *" name="tempat_krisma_pria">
	</div>

	<div class="form-group">
		<label>Tanggal Krisma</label>
		<input type="date" class="form-control" name="tgl_krisma_pria">
	</div>
  

  <div class="form-group">
		<label>Agama</label>
		<input type="text" class="form-control" placeholder="Agama *" name="agama_pria">
	</div>
  <div class="form-group">
    <label>Pendidikan Terakhir</label>
    <input type="text" class="form-control" placeholder="SMP/SMA/SMK/S1../S2... *" name="pendidikan_terakhir_pria">
  </div>

  <div class="form-group">
    <label>Pekerjaan</label>
    <input type="text" class="form-control"placeholder="Pekerjaan saat ini *" name="pekerjaan_pria">
  </div>
                                  <div class="form-group">
    <label>Alamat</label>
    <input type="text" class="form-control"placeholder="Alamat lengkap *" name="alamat_pria">
  </div>
                                  <div class="form-group">
    <label>Stasi/Lingkungan</label>
    <input type="text" class="form-control"placeholder="Stasi.../Lingkungan... *" name="stasi_pria">
  </div>
    <h3 class="form-section">Data Diri Orangtua</h3>

  <div class="form-group">
    <label>Nama Ayah</label>
    <input type="text" class="form-control" placeholder="Nama lengkap ayah kandung *" name="nama_ayah_pria">
  </div>
  <div class="form-group">
    <label>Agama Ayah</label>
    <input type="text" class="form-control" placeholder="Agama ayah kandung  *" name="agama_ayah_pria">
  </div>
  
  <div class="form-group">
    <label>Pekerjaan Ayah</label>
    <input type="text" class="form-control" placeholder="Pekerjaan ayah kandung *" name="pekerjaan_ayah_pria">
  </div>
                                  <div class="form-group">
    <label>Alamat Ayah</label>
    <input type="text" class="form-control" placeholder="Alamat ayah kandung *" name="alamat_ayah_pria">
  </div>
<div class="form-group">
    <label>Nama Ibu</label>
    <input type="text" class="form-control" placeholder="Nama lengkap ibu kandung *"name="nama_ibu_pria">
  </div>
  <div class="form-group">
    <label>Agama Ibu</label>
    <input type="text" class="form-control" placeholder="Agama ibu kandung *"name="agama_ibu_pria">
  </div>
  <div class="form-group">
    <label>Pekerjaan Ibu</label>
    <input type="text" class="form-control" placeholder="Pekerjaan ibu kandung *" name="pekerjaan_ibu_pria">
  </div>
                                  <div class="form-group">
    <label>Alamat Ibu</label>
    <input type="text" class="form-control" placeholder="Alamat ibu kandung *" name="alamat_ibu_pria">
  </div>
 <div class="form-group">
		<label></label>
    </div> 
<h3 class="form-section">Data Diri Mempelai Wanita</h3>
 <div class="form-group">
		<label >Nama Lengkap</label>
		<input type="text" class="form-control" placeholder="Nama sesuai dengan akta kelahiran *" name="nama_lengkap_wanita">
	</div>
	
	<div class="form-group">
		<label>Tempat Lahir</label>
		<input type="text" class="form-control" placeholder="Tempat Lahir sesuai dengan akta kelahiran *" name="tempat_lahir_wanita">
	</div>

	<div class="form-group">
		<label>Tanggal Lahir</label>
		<input type="date" class="form-control" name="tgl_lahir_wanita">
	</div>
<div class="form-group">
		<label>Tempat Baptis</label>
		<input type="text" class="form-control" placeholder="Tempat penerimaan sakramen baptis *" name="tempat_baptis_wanita">
	</div>

	<div class="form-group">
		<label>Tanggal Baptis</label>
		<input type="date" class="form-control" name="tgl_baptis_wanita">
	</div>
                                  <div class="form-group">
		<label>Tempat Krisma</label>
		<input type="text" class="form-control" placeholder="Tempat penerimaan sakramen krisma *" name="tempat_krisma_wanita">
	</div>

	<div class="form-group">
		<label>Tanggal Krisma</label>
		<input type="date" class="form-control" name="tgl_krisma_wanita">
	</div>
  

  <div class="form-group">
		<label>Agama</label>
		<input type="text" class="form-control" placeholder="Agama *" name="agama_wanita">
	</div>
  <div class="form-group">
    <label>Pendidikan Terakhir</label>
    <input type="text" class="form-control" placeholder="SMP/SMA/SMK/S1../S2... *" name="pendidikan_terakhir_wanita">
  </div>

  <div class="form-group">
    <label>Pekerjaan</label>
    <input type="text" class="form-control"placeholder="Pekerjaan saat ini *" name="pekerjaan_wanita">
  </div>
                                  <div class="form-group">
    <label>Alamat</label>
    <input type="text" class="form-control"placeholder="Alamat lengkap *" name="alamat_wanita">
  </div>
                                   <div class="form-group">
    <label>Stas/Lingkungan</label>
    <input type="text" class="form-control"placeholder="Stasi.../Lingkungan... *" name="stasi_wanita">
  </div>
     <h3 class="form-section">Data Diri Orangtua</h3>
  <div class="form-group">
    <label>Nama Ayah</label>
    <input type="text" class="form-control" placeholder="Nama lengkap ayah kandung *" name="nama_ayah_wanita">
  </div>
  <div class="form-group">
    <label>Agama Ayah</label>
    <input type="text" class="form-control" placeholder="Agama ayah kandung  *" name="agama_ayah_wanita">
  </div>
  
  <div class="form-group">
    <label>Pekerjaan Ayah</label>
    <input type="text" class="form-control" placeholder="Pekerjaan ayah kandung *" name="pekerjaan_ayah_wanita">
  </div>
                                  <div class="form-group">
    <label>Alamat Ayah</label>
    <input type="text" class="form-control" placeholder="Alamat ayah kandung *" name="alamat_ayah_wanita">
  </div>
<div class="form-group">
    <label>Nama Ibu</label>
    <input type="text" class="form-control" placeholder="Nama lengkap ibu kandung *"name="nama_ibu_wanita">
  </div>
  <div class="form-group">
    <label>Agama Ibu</label>
    <input type="text" class="form-control" placeholder="Agama ibu kandung *"name="agama_ibu_wanita">
  </div>
  <div class="form-group">
    <label>Pekerjaan Ibu</label>
    <input type="text" class="form-control" placeholder="Pekerjaan ibu kandung *" name="pekerjaan_ibu_wanita">
  </div>
                                  <div class="form-group">
    <label>Alamat Ibu</label>
    <input type="text" class="form-control" placeholder="Alamat ibu kandung *" name="alamat_ibu_wanita">
  </div>
  <div class="form-group">
    <label>Kode Perkawinan</label>
    <input type="text" class="form-control" name="kode_perkawinan" value="<?php echo $IDbaru; ?>" readonly='readonly'>
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