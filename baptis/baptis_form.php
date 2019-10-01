<!DOCTYPE html>
<html>
    <head>	<title>Formulir Baptis</title>
    <link href="css/style1.css" rel="stylesheet" type="text/css" > 
    </head>
<body>

<h4>Silahkan Isi Formulir Pendaftaran Sakramen Baptis Bayi di Bawah Ini</h4>

<form method="post" action="proses_simpan.php" enctype="multipart/form-data">
    
 Nama Lengkap Anak:<br>
  <input type="text" name="namalengkap">
  </br>
Nama Permandian:<br>
  <input type="text" name="namapermandian">
  </br>
Tempat Lahir:<br>
  <input type="text" name="tempatlahir">
  </br>
  Tanggal Lahir:<br>
  <input type="text" name="tgllahir">
  </br>
Jenis Kelamin:<br>
  <input type="text" name="jk">
  </br>
  <input type="radio" name="gender" value="lakilaki" checked> Laki-laki<br>
  <input type="radio" name="gender" value="pr"> Perempuan<br>
  
  </br>
 Anak yang ke-:<br>
  <input type="text" name="anakke">
  </br>
Stasi/Lingkungan:<br>
  <input type="text" name="stasi">
  </br>
  
 Nama Ayah:<br>
  <input type="text" name="namaayah">
  </br>

Agama Ayah:<br>
  <input type="text" name="agamaayah">
  </br>

Pekerjaan Ayah:<br>
  <input type="text" name="kerjaayah">
  </br>

Nama Ibu:<br>
  <input type="text" name="namaibu">
  </br>

Agama Ibu:<br>
  <input type="text" name="agamaibu">
  </br>
  
  Pekerjaan Ibu:<br>
  <input type="text" name="kerjaibu">
  </br>
  
  Tempat Sakramen Perkawinan:<br>
  <input type="text" name="tempatkawin">
  </br>
  
  Status Perkawinan:<br>
  <input type="text" name="statuskawin">
  </br>
  <input type="radio" name="kawin" value="gerejani" checked> Gerejani<br>
  <input type="radio" name="kawin" value="kua"> KUA<br>
  <input type="radio" name="kawin" value="catatansipil"> Catatan Sipil<br>  
  
  Alamat orang tua:<br>
  <input type="text" name="alamatortu">
  </br>
  
  Stasi/Lingkungan orang tua:<br>
  <input type="text" name="stasiortu">
  </br>
  
  Nama Wali Permandian:<br>
  <input type="text" name="wali">
  </br>

Tempat Permandian (stasi/paroki):<br>
  <input type="text" name="tempatpermandian">
  </br>
  
Hari Permandian:<br>
  <input type="text" name="haripermandian">
  </br>

Tanggal Permandian:<br>
  <input type="text" name="tglpermandian">
  </br>

Pastor yang mempermandian:<br>
  <input type="text" name="pastorpermandian">
  </br>
  
 Foto:<br>
  <input type="file" name="foto">
  </br>
  
  	<input type="submit" value="Simpan">
	<a href="sakramen.html"><input type="button" value="Batal"></a>
</form>



</body>
</html>

