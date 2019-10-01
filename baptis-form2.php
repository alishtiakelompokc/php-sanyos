<form name="baptis-form2" method="post" action="">
	<table border="0" width="500" height="500" align="center" class="demo-table">
     <?php
if(!empty($_POST["baptis"])) {
	/* Form Required Field Validation */
	foreach($_POST as $key=>$value) {
		if(empty($_POST[$key])) {
		$error_message = "All Fields are required";
		break;
		}
	}

	/* Validation to check if gender is selected */
	if(!isset($error_message)) {
	if(!isset($_POST["gender"])) {
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
	
		$query = "INSERT INTO formulir_baptisan_bayi (nama_lengkap_anak, nama_permandian_anak, tempat_lahir,tgl_lahir,gender,anak_yang_ke,
		stasi,nama_ayah,agama_ayah,pekerjaan_ayah,nama_ibu,agama_ibu,pekerjaan_ibu,tempat_sakramen_perkawinan,alamat_orangtua,
		stasi_orangtua,nama_wali_permandian, tempat_permandian,hari_permandian, tgl_permandian, pastor_yang_mempermandikan, surat_nikah_ortu) 
		VALUES 
		('" . $_POST["nama_lengkap_anak"] . "', '" . $_POST["nama_permandian_anak"] . "', '" . $_POST["tempat_lahir"] . "', '" . $_POST["tgl_lahir"] . "', '" . $_POST["gender"] . "',
		'" . $_POST["anak_yang_ke"] . "', '" . $_POST["stasi"] . "',	'" . $_POST["nama_ayah"] . "',	'" . $_POST["agama_ayah"] . "',	'" . $_POST["pekerjaan_ayah"] . "',
		'" . $_POST["nama_ibu"] . "','" . $_POST["agama_ibu"] . "',	'" . $_POST["pekerjaan_ibu"] . "',	'" . $_POST["tempat_sakramen_perkawinan"] . "',
		'" . $_POST["alamat_orangtua"] . "',	'" . $_POST["stasi_orangtua"] . "',
		'" . $_POST["nama_wali_permandian"] . "',	
		'" . $_POST["tempat_permandian"] . "',	'" . $_POST["hari_permandian"] . "', 	'" . $_POST["tgl_permandian"] . "',	'" . $_POST["pastor_yang_mempermandikan"] . "', '" . $_POST["surat_nikah_ortu"] . "')";
		$result = $db_handle->insertQuery($query);
		if(!empty($result)) {
			$error_message = "";
			$success_message = "You have registered successfully!";	
			unset($_POST);
		} else {
			$error_message = "Problem in registration. Try Again!";	
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
		
	
		<h1 align="center"> FORMULIR PENDAFTARAN SAKRAMEN BAPTIS </h1>
		<div class="container">
			<tr>
				<td><br></td>
		</tr>
		
			<h3 align="center"> Data Calon Baptisan </h3>
			<tr>
			
			
			<td><strong>Nama Lengkap Anak<strong></td>
			<td><input type="text" class="form-control" name="nama_lengkap_anak" value="<?php if(isset($_POST['nama_lengkap_anak'])) echo $_POST['nama_lengkap_anak']; ?>"></td>
		</tr>
		<tr>
			<td><br></td>
		</tr>
		<tr>
			<tr>
			<td><strong>Nama Permandian Anak<strong></td>
			<td><input type="text" class="form-control" name="nama_permandian_anak" value="<?php if(isset($_POST['nama_permandian_anak'])) echo $_POST['nama_permandian_anak']; ?>"></td>
		</tr>
		<tr>
			<td><br></td>
		</tr>
			<tr>
			<td><strong>Tempat Lahir<strong></td>
			<td><input type="text" class="form-control" name="tempat_lahir" value="<?php if(isset($_POST['tempat_lahir'])) echo $_POST['tempat_lahir']; ?>"></td>
		</tr>
		<tr>
			<td><br></td>
		</tr>
			<tr>
			<td><strong>Tanggal Lahir<strong></td>
			<td><input type="text" class="form-control" name="tgl_lahir" value="<?php if(isset($_POST['tgl_lahir'])) echo $_POST['tgl_lahir']; ?>"></td>
		</tr>
		<tr>
			<td><br></td>
		</tr>
			<tr>
			<td><strong>Gender<strong></td>
			<td><strong><input type="radio" name="gender" value="Laki-laki" <?php if(isset($_POST['gender']) && $_POST['gender']=="Laki-laki") { ?>checked<?php  } ?>> Laki-laki
			<input type="radio" name="gender" value="Perempuan" <?php if(isset($_POST['gender']) && $_POST['gender']=="Perempuan") { ?>checked<?php  } ?>> Perempuan
			</td>
		</tr>
		<tr>
			<td><br></td>
		</tr>
		    <tr>
			<td><strong>Anak yang ke-<strong></td>
			<td><input type="text" class="form-control" name="anak_yang_ke" value="<?php if(isset($_POST['anak_yang_ke'])) echo $_POST['anak_yang_ke']; ?>"></td>
		</tr>
		<tr>
			<td><br></td>
		</tr>
			<tr>
			<td><strong>Stasi/Lingkungan<strong></td>
			<td><input type="text" class="form-control" name="stasi" value="<?php if(isset($_POST['stasi'])) echo $_POST['stasi']; ?>"></td>
		</tr>
		<tr>
			<td><br></td>
		</tr>
		
	
			<tr>
			<td><strong>Nama Ayah<strong></td>
			<td><input type="text" class="form-control" name="nama_ayah" value="<?php if(isset($_POST['nama_ayah'])) echo $_POST['nama_ayah']; ?>"></td>
		</tr>
		<tr>
			<td><br></td>
		</tr>
			<tr>
			<td><strong>Agama Ayah<strong></td>
			<td><input type="text" class="form-control" name="agama_ayah" value="<?php if(isset($_POST['agama_ayah'])) echo $_POST['agama_ayah']; ?>"></td>
		</tr>
		<tr>
			<td><br></td>
		</tr>
			<tr>
			<td><strong>Pekerjaan Ayah<strong></td>
			<td><input type="text" class="form-control" name="pekerjaan_ayah" value="<?php if(isset($_POST['pekerjaan_ayah'])) echo $_POST['pekerjaan_ayah']; ?>"></td>
		</tr>
		<tr>
			<td><br></td>
		</tr>
			<tr>
			<td><strong>Nama Ibu<strong></td>
			<td><input type="text" class="form-control" name="nama_ibu" value="<?php if(isset($_POST['nama_ibu'])) echo $_POST['nama_ibu']; ?>"></td>
		</tr>
		<tr>
			<td><br></td>
		</tr>
            <tr>
			<td><strong>Agama Ibu<strong></td>
			<td><input type="text" class="form-control" name="agama_ibu" value="<?php if(isset($_POST['agama_ibu'])) echo $_POST['agama_ibu']; ?>"></td>
		</tr>
		<tr>
			<td><br></td>
		</tr>
		    <tr>
			<td><strong>Pekerjaan Ibu<strong></td>
			<td><input type="text" class="form-control" name="pekerjaan_ibu" value="<?php if(isset($_POST['pekerjaan_ibu'])) echo $_POST['pekerjaan_ibu']; ?>"></td>
		</tr>
		<tr>
			<td><br></td>
		</tr>
	    	<tr>
			<td><strong>Tempat Sakramen Perkawinan<strong></td>
			<td><input type="text" class="form-control" name="tempat_sakramen_perkawinan" value="<?php if(isset($_POST['tempat_sakramen_perkawinan'])) echo $_POST['tempat_sakramen_perkawinan']; ?>"></td>
		</tr>
		<tr>
			<td><br></td>
		</tr>
			<tr>
			<td><strong>Status Perkawinan<strong></td>
			<td><strong><input type="radio" name="status_perkawinan" value="gerejani" <?php if(isset($_POST['status_perkawinan']) && $_POST['status_perkawinan']=="gerejani") { ?>checked<?php  } ?>> gerejani
			<input type="radio" name="status_perkawinan" value="kua" <?php if(isset($_POST['status_perkawinan']) && $_POST['status_perkawinan']=="kua") { ?>checked<?php  } ?>> kua
			<input type="radio" name="status_perkawinan" value="catatan sipil" <?php if(isset($_POST['status_perkawinan']) && $_POST['status_perkawinan']=="catatansipil") { ?>checked<?php  } ?>> catatan sipil
			</td>
		</tr>
		<tr>
			<td><br></td>
		</tr>
			<tr>
			<td><strong>Alamat Orang Tua<strong></td>
			<td><input type="text" class="form-control" name="alamat_orangtua" value="<?php if(isset($_POST['alamat_orangtua'])) echo $_POST['alamat_orangtua']; ?>"></td>
		</tr>
		<tr>
			<td><br></td>
		</tr>
            <tr>
			<td><strong>Stasi/Lingkungan Orang Tua<strong></td>
			<td><input type="text" class="form-control" name="stasi_orangtua" value="<?php if(isset($_POST['stasi_orangtua'])) echo $_POST['stasi_orangtua']; ?>"></td>
		</tr>
		<tr>
			<td><br></td>
		</tr>
			<tr>
			<td><strong>Nama Wali Permandian<strong></td>
			<td><input type="text" class="form-control" name="nama_wali_permandian" value="<?php if(isset($_POST['nama_wali_permandian'])) echo $_POST['nama_wali_permandian']; ?>"></td>
		</tr>
		<tr>
			<td><br></td>
		</tr>
			<tr>
			<td><strong>Tempat Permandian(Stasi/Paroki)<strong></td>
			<td><input type="text" class="form-control" name="tempat_permandian" value="<?php if(isset($_POST['tempat_permandian'])) echo $_POST['tempat_permandian']; ?>"></td>
		</tr>
		<tr>
			<td><br></td>
		</tr>
				<tr>
			<td><strong>Hari Permandian<strong></td>
			<td><input type="text" class="form-control" name="hari_permandian" value="<?php if(isset($_POST['hari_permandian'])) echo $_POST['hari_permandian']; ?>"></td>
		</tr>
		<tr>
			<td><br></td>
		</tr>
			<tr>
			<td><strong>Tanggal Permandian<strong></td>
			<td><input type="text" class="form-control" name="tgl_permandian" value="<?php if(isset($_POST['tgl_permandian'])) echo $_POST['tgl_permandian']; ?>"></td>
		</tr>
		<tr>
			<td><br></td>
		</tr>
			<tr>
			<td><strong>Pastor yang mempermandikan<strong></td>
			<td><input type="text" class="form-control" name="pastor_yang_mempermandikan" value="<?php if(isset($_POST['pastor_yang_mempermandikan'])) echo $_POST['pastor_yang_mempermandikan']; ?>"></td>
		</tr>
		<tr>
			<td><br></td>
		</tr>
		    <tr>
		    <td><strong>Pilih File Surat Nikah Or'tu : <br/></strong></td>
            <td><input type="file" class="form-control" name="surat_nikah_ortu" value="<?php if(isset($_POST['surat_nikah_ortu'])) echo $_POST['surat_nikah_ortu']; ?>"></td>
    </tr>
    <tr>
            <td colspan=2> <strong>
            <input type="checkbox" name="terms"> Saya bertanggung jawab dengan data diri diatas <input type="submit" name="baptis" value="Register" class="btnRegister"></td>
            </tr>
		
	</table>
