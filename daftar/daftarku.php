
<?php
include "koneksi.php";

if ($_POST['act']=="add"){
    
$pengguna=$_POST['pengguna'];
$sandi=($_POST['sandi']);
$nama=$_POST['nama'];
$telepon=$_POST['telepon'];
$jabatan=$_POST['jabatan'];
$proses="INSERT into datadiri(username,password,nama,telepon,jabatan)
         VALUES('$pengguna','$sandi','$nama','$telepon','$jabatan')";
$hasil=mysql_query ($proses);



    echo '
    <script>window.location="daftarku.php"</script>
    ';
}

?>
<div id='bgkonten'>
<table border="0px">
 <form method="post" enctype="multipart/form-data">
<tr><td>Username</td> <td>:</td> <td><input name="pengguna" size="50" class="texbox" maxlength="12"></td></tr>
<tr><td>Password</td> <td>:</td><td><input name="sandi" size="50" class="texbox"></td></tr>
<tr><td>Nama</td> <td>:</td><td><input name="nama" size="50" class="texbox"></td></tr>
<tr><td>Telepon</td> <td>:</td><td><input name="telepon" size="50" class="texbox"></td></tr>
<tr><td>Jabatan</td> <td>:</td><td>
<select name="jabatan">
<option>--Pilih--</option>
<option>Laki-Laki</option>
<option>Permepuan</option>




</td></tr>


   

</div>
<div class="cleared">
    
     <a href="index.php"><i class="fa fa-arrow-circle-o-left"></i> Back</a></td>
    <input type="submit" value="TAMBAH" class="btn_submit">
    <input type="hidden" name="act" value="add">

</div>
<?php
include"footer.php";
?>


