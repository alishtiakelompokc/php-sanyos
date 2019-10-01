<form name="katekumen-form" method="post" action="">
	<table border="0" width="500" height="500" align="center" class="demo-table">
     <?php
if(!empty($_POST["katekumen"])) {
	/* Form Required Field Validation */
	foreach($_POST as $key=>$value) {
		if(empty($_POST[$key])) {
		$error_message = "All Fields are required";
		break;
		}
	}

	/* Validation to check if gender is selected */
	if(!isset($error_message)) {
	if(!isset($_POST["stasi"])) {
	$error_message = " All Fields are required";
	}
	}
	
	
	/* Validation to check if Terms and Conditions are accepted */
	if(!isset($error_message)) {
		if(!isset($_POST["terms"])) {
		$error_message = "Accept Terms and Conditions to Register";
		}
	}


	if(!isset($error_message)) {
		require_once("dbcontrollerA.php");
		$db_handle = new DBController();
		
		$query = "INSERT INTO formulir_katekumen (nama_lengkap,nama_permandian,tempat_lahir,tgl_lahir,stasi,agama_sebelumnya,ijazah_terakhir,
        pekerjaan,nama_anak_anak,alamat_sekarang,nama_suami_isteri,
        pekerjaan_suami_isteri,status_perkawinan,tempat_perkawinan,tgl_perkawinan,
        jumlah_anak,nama_ayah,agama_ayah,pekerjaan_ayah,nama_ibu,
        agama_ibu,pekerjaan_ibu,alamat_ortu,nama_guru_agama,nama_pastur_yang_mempermandikan,nama_wali_permandian) 
		VALUES 
		('" . $_POST["nama_lengkap"] . "', '" . $_POST["nama_permandian"] . "', '" . $_POST["tempat_lahir"] . "', '" . $_POST["tgl_lahir"] . "', '" . $_POST["stasi"] . "',
		'" . $_POST["agama_sebelumnya"] . "', '" . $_POST["ijazah_terakhir"] . "',	'" . $_POST["pekerjaan"] . "',	'" . $_POST["nama_anak_anak"] . "',	'" . $_POST["alamat_sekarang"] . "',
		'" . $_POST["nama_suami_isteri"] . "','" . $_POST["pekerjaan_suami_isteri"] . "',	'" . $_POST["status_perkawinan"] . "',	'" . $_POST["tempat_perkawinan"] . "','" . $_POST["tgl_perkawinan"] . "',
		'" . $_POST["jumlah_anak"] . "',	'" . $_POST["nama_ayah"] . "',
		'" . $_POST["agama_ayah"] . "',	
		'" . $_POST["pekerjaan_ayah"] . "',	'" . $_POST["nama_ibu"] . "', 	'" . $_POST["agama_ibu"] . "',
        '" . $_POST["pekerjaan_ibu"] . "', 	'" . $_POST["alamat_ortu"] . "',	'" . $_POST["nama_guru_agama"] . "',	'" . $_POST["nama_pastur_yang_mempermandikan"] . "', '" . $_POST["nama_wali_permandian"] . "')";
		$result = $db_handle->insertQuery($query);
		if(!empty($result)) {
			$error_message = "";
			$success_message = "Selamat, anda berhasil registrasi!";	
			unset($_POST);
		} else {
			$error_message = "Ada masalah. Coba Lagi!";	
		}
	}
}
?>   

	<html lang="en" >
    <head>
      <meta charset="UTF-8
      <title>Gereja</title>
      
      
      <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>
          <link rel="stylesheet" href="css/form.css">
          
     <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

       
<style>
    .note
{
    text-align: center;
    height: 80px;
    background: -webkit-linear-gradient(left, #ff0000, #8B0000);
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
    background: #ff0000;
    color: #fff;
}
</style>
       
        <title>Santa Maria Fatima</title>
        </head>
        <body background="img/wall.jpeg">
         
         </body>
</html>


		<?php if(!empty($success_message)) { ?>	
		<div class="success-message"><?php if(isset($success_message)) echo $success_message; ?></div>
		<?php } ?>
		<?php if(!empty($error_message)) { ?>	
		<div class="error-message"><?php if(isset($error_message)) echo $error_message; ?></div>
		<?php } ?>
		<br></br>
		<br></br>
		
		<h1 align="center"> FORMULIR PENDAFTARAN KATEKUMEN </h1>
		<tr>
			<td><strong>Nama Lengkap</td>
			<td><input type="text" class="form-control" name="nama_lengkap" value="<?php if(isset($_POST['nama_lengkap'])) echo $_POST['nama_lengkap']; ?>"></td>
		</tr>
		<tr>
			<td><br></td>
		</tr>
			<tr>
			<td><strong>Nama Permandian</td>
			<td><input type="text" class="form-control" name="nama_permandian" value="<?php if(isset($_POST['nama_permandian'])) echo $_POST['nama_permandian']; ?>"></td>
		</tr>
		<tr>
			<td><br></td>
		</tr>
			<tr>
			<td><strong>Tempat Lahir</td>
			<td><input type="text" class="form-control" name="tempat_lahir" value="<?php if(isset($_POST['tempat_lahir'])) echo $_POST['tempat_lahir']; ?>"></td>
		</tr>
		<tr>
			<td><br></td>
		</tr>
			<tr>
			<td><strong>Tanggal Lahir</td>
			<td><input type="text" class="form-control" name="tgl_lahir" value="<?php if(isset($_POST['tgl_lahir'])) echo $_POST['tgl_lahir']; ?>"></td>
		</tr>
			<tr>
			<td><br></td>
		</tr>
			<tr>
			<td><strong>Stasi/Lingkungan</td>
			<td><input type="text" class="form-control" name="stasi" value="<?php if(isset($_POST['stasi'])) echo $_POST['stasi']; ?>"></td>
		</tr>
		<tr>
			<td><br></td>
		</tr>
                                                                                                                                      <tr>
			<td><strong>Agama Sebelumnya</td>
			<td><input type="text" class="form-control" name="agama_sebelumnya" value="<?php if(isset($_POST['agama_sebelumnya'])) echo $_POST['agama_sebelumnya']; ?>"></td>
		</tr>
		<tr>
			<td><br></td>
		</tr>
                                                                                                                                      <tr>
			<td><strong>Ijazah Terakhir</td>
			<td><input type="text" class="form-control" name="ijazah_terakhir" value="<?php if(isset($_POST['ijazah_terakhir'])) echo $_POST['ijazah_terakhir']; ?>"></td>
		</tr>
		<tr>
			<td><br></td>
		</tr>
            <tr>
			<td><strong>Pekerjaan</td>
			<td><input type="text" class="form-control" name="pekerjaan" value="<?php if(isset($_POST['pekerjaan'])) echo $_POST['pekerjaan']; ?>"></td>
		</tr> 
		<tr>
			<td><br></td>
		</tr><tr>
			<td><strong>Nama Anak-anak</td>
			<td><input type="text" class="form-control" name="nama_anak_anak" value="<?php if(isset($_POST['nama_anak_anak'])) echo $_POST['nama_anak_anak']; ?>"></td>
		</tr>
		<tr>
			<td><br></td>
		</tr>
                                                                                                                                      <tr>
			<td><strong>Alamat Sekarang</td>
			<td><input type="text" class="form-control" name="alamat_sekarang" value="<?php if(isset($_POST['alamat_sekarang'])) echo $_POST['alamat_sekarang']; ?>"></td>
		</tr>
		<tr>
			<td><br></td>
		</tr>
            <tr>
			<td><strong>Nama Suami/Isteri</td>
			<td><input type="text" class="form-control" name="nama_suami_isteri" value="<?php if(isset($_POST['nama_suami_isteri'])) echo $_POST['nama_suami_isteri']; ?>"></td>
		</tr>
		<tr>
			<td><br></td>
		</tr>
             <tr>
			<td><strong>Pekerjaan Suami/Isteri</td>
			<td><input type="text" class="form-control" name="pekerjaan_suami_isteri" value="<?php if(isset($_POST['pekerjaan_suami_isteri'])) echo $_POST['pekerjaan_suami_isteri']; ?>"></td>
		</tr>  
		<tr>
			<td><br></td>
		</tr>
             			<tr>
			<td><strong>Status Perkawinan<strong></td>
			<td><strong><input type="radio" name="status_perkawinan" value="gerejani" <?php if(isset($_POST['status_perkawinan']) && $_POST['status_perkawinan']=="gerejani") { ?>checked<?php  } ?>> gerejani
			<input type="radio" name="status_perkawinan" value="kua" <?php if(isset($_POST['status_perkawinan']) && $_POST['status_perkawinan']=="kua") { ?>checked<?php  } ?>> kua
			<input type="radio" name="status_perkawinan" value="catatan sipil" <?php if(isset($_POST['status_perkawinan']) && $_POST['status_perkawinan']=="catatansipil") { ?>checked<?php  } ?>> catatan sipil
			<input type="radio" name="status_perkawinan" value="belum menikah" <?php if(isset($_POST['status_perkawinan']) && $_POST['status_perkawinan']=="belummenikah") { ?>checked<?php  } ?>> belum menikah
			</td>
		</tr>
		<tr>
			<td><br></td>
		</tr>
            <tr>
			<td><strong>Tempat Perkawinan</td>
			<td><input type="text" class="form-control" name="tempat_perkawinan" value="<?php if(isset($_POST['tempat_perkawinan'])) echo $_POST['tempat_perkawinan']; ?>"></td>
		</tr> 
		<tr>
			<td><br></td>
		</tr>
             <tr>
			<td><strong>Tanggal Perkawinan</td>
			<td><input type="text" class="form-control" name="tgl_perkawinan" value="<?php if(isset($_POST['tgl_perkawinan'])) echo $_POST['tgl_perkawinan']; ?>"></td>
		</tr> 
		<tr>
			<td><br></td>
		</tr>
            <tr>
			<td><strong>Jumlah Anak</td>
			<td><input type="text" class="form-control" name="jumlah_anak" value="<?php if(isset($_POST['jumlah_anak'])) echo $_POST['jumlah_anak']; ?>"></td>
		</tr> 
		<tr>
			<td><br></td>
		</tr>
             <tr>
			<td><strong>Nama Ayah</td>
			<td><input type="text" class="form-control" name="nama_ayah" value="<?php if(isset($_POST['nama_ayah'])) echo $_POST['nama_ayah']; ?>"></td>
		</tr>
		<tr>
			<td><br></td>
		</tr>
                      
			<tr>
			<td><strong>Agama Ayah</td>
			<td><input type="text" class="form-control" name="agama_ayah" value="<?php if(isset($_POST['agama_ayah'])) echo $_POST['agama_ayah']; ?>"></td>
		</tr>
		<tr>
			<td><br></td>
		</tr>
			<tr>
			<td><strong>Pekerjaan Ayah</td>
			<td><input type="text" class="form-control" name="pekerjaan_ayah" value="<?php if(isset($_POST['pekerjaan_ayah'])) echo $_POST['pekerjaan_ayah']; ?>"></td>
		</tr>
		<tr>
			<td><br></td>
		</tr>
			<tr>
			<td><strong>Nama Ibu</td>
			<td><input type="text" class="form-control" name="nama_ibu" value="<?php if(isset($_POST['nama_ibu'])) echo $_POST['nama_ibu']; ?>"></td>
		</tr>
		<tr>
			<td><br></td>
		</tr>
            <tr>
			<td><strong>Agama Ibu</td>
			<td><input type="text" class="form-control" name="agama_ibu" value="<?php if(isset($_POST['agama_ibu'])) echo $_POST['agama_ibu']; ?>"></td>
		</tr>
		<tr>
			<td><br></td>
		</tr>
		    <tr>
			<td><strong>Pekerjaan Ibu</td>
			<td><input type="text" class="form-control" name="pekerjaan_ibu" value="<?php if(isset($_POST['pekerjaan_ibu'])) echo $_POST['pekerjaan_ibu']; ?>"></td>
		</tr>
		<tr>
			<td><br></td>
		</tr>
        <tr>
			<td><strong>Alamat orang tua</td>
			<td><input type="text" class="form-control" name="alamat_ortu" value="<?php if(isset($_POST['alamat_ortu'])) echo $_POST['alamat_ortu']; ?>"></td>
		</tr>
		<tr>
			<td><br></td>
		</tr>
	    	<tr>
			<td><strong>Nama Guru Agama</td>
			<td><input type="text" class="form-control" name="nama_guru_agama" value="<?php if(isset($_POST['nama_guru_agama'])) echo $_POST['nama_guru_agama']; ?>"></td>
		</tr>
		<tr>
			<td><br></td>
		</tr>
			
			<tr>
			<td><strong>Pastor yang mempermandikan</td>
			<td><input type="text" class="form-control" name="nama_pastur_yang_mempermandikan" value="<?php if(isset($_POST['nama_pastur_yang_mempermandikan'])) echo $_POST['nama_pastur_yang_mempermandikan']; ?>"></td>
		</tr>
		<tr>
			<td><br></td>
		</tr>
<tr>
			<td><strong>Nama Wali Permandian</td>
			<td><input type="text" class="form-control" name="nama_wali_permandian" value="<?php if(isset($_POST['nama_wali_permandian'])) echo $_POST['nama_wali_permandian']; ?>"></td>
		</tr>
		<tr>
			<td><br></td>
		</tr>
		    <tr>
            <td colspan=2> <strong>
            <input type="checkbox" name="terms"> Saya Bertanggung jawab atas data diri diatas <input type="submit" name="katekumen" value="Register" class="btnRegister"></td>
            </tr>
		
	</table>