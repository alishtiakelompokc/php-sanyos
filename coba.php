<form name="coba" method="post" action="">
	<table border="0" width="500" height="500" align="center" class="demo-table">
     <?php
if(!empty($_POST["coba"])) {
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
        pekerjaan,nama_anak_anak,alamat_sekarang) 
		VALUES 
		('" . $_POST["nama_lengkap"] . "', '" . $_POST["nama_permandian"] . "', '" . $_POST["tempat_lahir"] . "', '" . $_POST["tgl_lahir"] . "', '" . $_POST["stasi"] . "',
		'" . $_POST["agama_sebelumnya"] . "', '" . $_POST["ijazah_terakhir"] . "',	'" . $_POST["pekerjaan"] . "',	'" . $_POST["nama_anak_anak"] . "',	'" . $_POST["alamat_sekarang"] . "')";
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
		
		<h1 align="center"> FORMULIR PENDAFTARAN COBA </h1>
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
            <td colspan=2>
            <input type="checkbox" name="terms"> I accept Terms and Conditions <br>
 <a href="upload_coba.php" class="site-btn sb-line">coba MASUK</a>
            <input type="submit" name="coba" value="Lanjutkan" class="btnRegister">
            <br>
            <?php if(!empty($success_message)) { ?>	
        <div class="success-message"><?php if(isset($success_message)) echo $success_message; ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
        </div>
              
        <?php } ?>    
            </td>
            </tr>
		
	</table>