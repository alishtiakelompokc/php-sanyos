<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Santa Maria Fatima</title>
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
                    <h3 class="form-section">LAPORAN KEMATIAN</h3>
                                    </div>
<!---------------------------------------------------------------->                
<?php 
include 'koneksi.php';

$query = "SELECT MAX(kode_kematian) AS kode FROM kematian";
$hasil = mysqli_query($koneksi, $query);
$data  = mysqli_fetch_array($hasil);
$nim = $data['kode'];


//mengatur 3 karakter sebagai jumalh karakter yang tetap
//mengatur 4 karakter untuk jumlah karakter yang berubah-ubah
$noUrut = (int) substr($nim, 3, 4);
$noUrut++;

//menjadikan 201353 sebagai 6 karakter yang tetap
$char = "KE-";
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
    alert("Tempat lahir masih kosong!");
    form.nama_baptis.focus();
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
  else if (form.usia.value == ""){
    alert("Tempat baptis masih kosong!");
    form.usia.focus();
    return (false);
  }
 
  else if (form.alamat.value == ""){
    alert("Tanggal baptis Pendaftar masih kosong!");
    form.alamat.focus();
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
                                  
    <h3 class="form-section">Disampaikan untuk dicatat dalam administrasi paroki bahwa yag beridentitas dibawah ini telah meninggal dunia:</h3>
	<div class="form-group">
		<label >Nama Lengkap</label>
		<input type="text" class="form-control" placeholder="Nama sesuai dengan akta kelahiran *" name="nama_lengkap">
	</div>
	<div class="form-group">
		<label >Nama Baptis</label>
		<input type="text" class="form-control" placeholder="Nama permandian *" name="nama_baptis">
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
		<label>Usia</label>
		<input type="text" class="form-control" placeholder="Usia *" name="usia">
	</div>

	  	<div class="form-group">
		<label>Alamat</label>
		<input type="text" class="form-control" placeholder="Alamat lengkap *" name="alamat">
	</div>

  <div class="form-group">
		<label>Hari Kematian</label>
		<input type="text" class="form-control" placeholder="Hari kematian *" name="hari_kematian">
	</div>
  <div class="form-group">
		<label>Tanggal Kematian</label>
		<input type="date" class="form-control" name="tgl_kematian">
	</div>
   <div class="form-group">
		<label>Waktu Kematian</label>
		<input type="text" class="form-control" placeholder="Waktu kematian *" name="waktu_kematian">
	</div>
	 <div class="form-group">
		<label>Tempat Kematian</label>
		<input type="text" class="form-control" placeholder="Tempat kematian *" name="tempat_kematian">
	</div>
	 <div class="form-group">
		<label>Alamat Kematian</label>
		<input type="text" class="form-control" placeholder="Alamat kematian *" name="alamat_kematian">
	</div>
	 <div class="form-group">
		<label>Tempat Pemakaman</label>
		<input type="text" class="form-control" placeholder="Tempat Dimakamkan *" name="tempat_pemakaman">
	</div>
	 <div class="form-group">
		<label>Tanggal Pemakaman</label>
		<input type="date" class="form-control" name="tgl_pemakaman">
	</div>
		 <div class="form-group">
		<label>Bentuk Pemakaman</label>
		<input type="text" class="form-control" placeholder="Bentuk pemakaman *" name="bentuk_pemakaman">
	</div>
		 <div class="form-group">
		<label>Pemimpin Upacara Pemakaman (Romo/Prodiakon/dll)</label>
		<input type="text" class="form-control" placeholder="Nama pemimpin upacara pemakaman *" name="pemimpin_upacara">
	</div>
		 <div class="form-group">
		<label>Nama Famili terdekat yang masih hidup</label>
		<input type="text" class="form-control" placeholder="Nama Famili terdekat *" name="nama_famili">

		 <div class="form-group">
		<label>Alamat Famili terdekat yang masih hidup</label>
		<input type="text" class="form-control" placeholder="Alamat famili terdekat *" name="alamat_famili">
	</div>

		 <div class="form-group">
		<label>Stasi</label>
		<input type="text" class="form-control" placeholder="Stasi *" name="stasi">
	</div>
	<h3 class="form-section">Sudah/Belum menerima sakamen perminyakan</h3>
		
		 <div class="form-group">
		<label>Hari</label>
		<input type="text" class="form-control" placeholder="Hari penerimaan sakramen perminyakan *" name="hari_perminyakan">
	</div>
		 <div class="form-group">
		<label>Tanggal</label>
		<input type="date" class="form-control" name="tgl_peerminyakan">
	</div>
			 <div class="form-group">
		<label>Tempat</label>
		<input type="text" class="form-control" placeholder="Tempat penerimaan sakramen perminyakan *" name="tempat_perminyakan">
	</div>
			 <div class="form-group">
		<label>Nama Romo</label>
		<input type="text" class="form-control" placeholder="Romo yang memberikan perminyakan *" name="romo_perminyakan">
	</div>
			 <div class="form-group">
		<label>Sakramen yang sudah pernah diterima (Permandian,Penguatan,Ekaristi,Minyak Suci,Perkawinan,Imamat)</label>
		<input type="text" class="form-control" placeholder="Permandian,Penguatan,Ekaristi,Minyak Suci,Perkawinan,Imamat *" name="sakramen_yang_diterima">
	</div>
  <div class="form-group">
    <label>Kode Kematian</label>
    <input type="text" class="form-control" name="kode_kematian" value="<?php echo $IDbaru; ?>" readonly='readonly'>
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