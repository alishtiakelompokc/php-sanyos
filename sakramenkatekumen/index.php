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
                    <h3 class="form-section">FORMULIR PENDAFTARAN KATEKUMEN</h3>
                                    </div>
<!---------------------------------------------------------------->                
<?php 
include 'koneksi.php';

$query = "SELECT max(kode_katekumen) as kode FROM katekumen";
$hasil = mysqli_query($koneksi, $query);
$data  = mysqli_fetch_array($hasil);
$nim = $data['kode'];


//mengatur 3 karakter sebagai jumalh karakter yang tetap
//mengatur 4 karakter untuk jumlah karakter yang berubah-ubah
$noUrut = (int) substr($nim, 3, 4);
$noUrut++;

//menjadikan 201353 sebagai 6 karakter yang tetap
$char = "KA-";
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
    alert("Nama Lengkap masih kosong!");
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
    alert("Stasi masih kosong!");
    form.stasi.focus();
    return (false);
  }
 
  else if (form.agama_sebelumnya.value == ""){
    alert("Agama sebelumnya Pendaftar masih kosong!");
    form.agama_sebelumnya.focus();
    return (false);
  }
 
  else if (form.ijazah_terakhir.value == ""){
    alert("Ijazah Terakhir masih kosong!");
    form.ijazah_terakhir.focus();
    return (false);
  }
  else if (form.pekerjaan.value == ""){
    alert("Pekerjaan masih kosong!");
    form.pekerjaan.focus();
    return (false);
  }
   else if (form.nama_anak_anak.value == ""){
    alert("Nama anak-anak masih kosong!");
    form.nama_anak_anak.focus();
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
                                  
    <h3 class="form-section">Data Diri Calon Katekumen</h3>
  <div class="form-group">
    <label >Nama Lengkap</label>
    <input type="text" class="form-control" placeholder="Nama sesuai dengan akta kelahiran *" name="nama_lengkap">
  </div>
  <div class="form-group">
    <label >Nama Permandian</label>
    <input type="text" class="form-control" placeholder="Nama permandian *" name="nama_permandian_anak">
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
    <label>Stasi</label>
    <input type="text" class="form-control" placeholder="Stasi Lengkap *" name="stasi">
  </div>
  

  <div class="form-group">
    <label>Agama Sebelumnya</label>
    <input type="text" class="form-control" placeholder="Agama sebelumnya *" name="agama_sebelumnya">
  </div>
  <div class="form-group">
    <label>Ijazah Terakhir</label>
    <input type="text" class="form-control" placeholder="SD atau SMP atau SMK atau S1 (Sarjana) *" name="ijazah_terakhir">
  </div>

  <div class="form-group">
    <label>Pekerjaan</label>
    <input type="text" class="form-control"placeholder="Pekerjaan Calon Katekumen *" name="pekerjaan">
  </div>
 

  <div class="form-group">
    <label>Nama Anak-anak</label>
    <input type="text" class="form-control" placeholder="Nama anak jika punya *" name="nama_anak_anak">
  </div>
  <div class="form-group">
    <label>Alamat Sekarang</label>
    <input type="text" class="form-control" placeholder="Alamat lengkap saat ini  *" name="alamat_sekarang">
  </div>
                                  <div class="form-group">
    <label></label>
    
  </div>
  
   <h3 class="form-section">Data Keluarga (bagi yang sudah berkeluarga)</h3>
    <div class="form-group">
    <label>Nama Suami/Isteri</label>
    <input type="text" class="form-control" placeholder="Nama lengkap suami/isteri jika punya *" name="nama_suami_isteri">
  </div>
<div class="form-group">
    <label>Pekerjaan Suami/Isteri</label>
    <input type="text" class="form-control" placeholder="Pekerjaan suami/isteri jika punya *"name="pekerjaan_suami_isteri">
  </div>
  <div class="form-group">
  <label>Status Perkawinan</label><br>
    <input  type="radio" value="Gereja" name="status_perkawinan"><font color="black"> Gereja</font><br>
    <input  type="radio" value="KUA" name="status_perkawinan"><font color="black"> KUA</font><br>
    <input  type="radio" value="Catatan Sipil" name="status_perkawinan"><font color="black"> Catatan Sipil</font><br>
    <input  type="radio" value="Belum Menikah" name="status_perkawinan"><font color="black"> Belum Menikah</font><br>
  </div>
  <div class="form-group">
    <label>Tempat Perkawinan</label>
    <input type="text" class="form-control" placeholder="Tempat penerimaan sakramen Perkawinan *" name="tempat_perkawinan">
  </div>
   <div class="form-group">
    <label>Tanggal Perkawinan</label>
    <input type="date" class="form-control" name="tanggal_perkawinan">
  </div>
  <div class="form-group">
    <label>Jumlah Anak</label>
    <input type="text" class="form-control" placeholder="Jumlah anak jika punya *"name="jumlah_anak">
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
    <input type="text" class="form-control" placeholder="Agama ayah kandung *" name="agama_ayah">
  </div>
  <div class="form-group">
    <label>Pekerjaan Ayah</label>
    <input type="text" class="form-control" placeholder="Pekerjaan ayah *" name="pekerjaan_ayah">
  </div>
  <div class="form-group">
    <label>Nama Ibu</label>
    <input type="text" class="form-control" placeholder="Nama lengkap ibu kandung *" name="nama_ibu">
  </div>
  <div class="form-group">
    <label>Agama Ibu</label>
    <input type="text" class="form-control" placeholder="Agama ibu kandung *" name="agama_ibu">
  </div>
  <div class="form-group">
    <label>Pekerjaan Ibu</label>
    <input type="text" class="form-control" placeholder="Pekerjaan ibu kandung *" name="pekerjaan_ibu">
  </div>
  <div class="form-group">
    <label>Alamat Orangtua</label>
    <input type="text" class="form-control" placeholder="Alamat lengkap orangtua *" name="alamat_ortu">
  </div>
  <div class="form-group">
    <label>Nama Guru Agama</label>
    <input type="text" class="form-control" placeholder="Nama Guru Agama *" name="nama_guru_agama">
  </div>
  <div class="form-group">
    <label>Nama Wali Permandian</label>
    <input type="text" class="form-control" placeholder="Nama lengkap wali permandian *" name="wali_permandian">
  </div>
 <div class="form-group">
    <label>Pastor Yang Mempermandikan</label>
    <input type="text" class="form-control" placeholder="Nama lengkap pastor yang mempermandikan *" name="pastor_yang_mempermandikan">
  </div>
  <div class="form-group">
    <label>Kode Katekumen</label>
    <input type="text" class="form-control" name="kode_katekumen" value="<?php echo $IDbaru; ?>" readonly='readonly'>
  </div>

 
  
  
  
   
  
  <div class="row">
                                <div class="col-md-4 text-center">

                                </div>
                                <div class="col-md-4 text-center">
                                    <input type="submit" name="submit" class="btn btn-outline-danger btn-block" value="SIMPAN">
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