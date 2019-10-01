<?php
if(!empty($_POST["register-user"])) {
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
        
        // dibawah ini disesuaikan dengan DB
		$query = "INSERT INTO upload_coba (kode_katekumen, nama_file, uploaded_on) VALUES
		('" . $_POST["kode_baptis"] . "', '" . $_POST["nama_file"] . "', '" . $_POST["uploaded_on"] . "');
		$result = $db_handle->insertQuery($query);
		if(!empty($result)) {
			$error_message = "";
			$success_message = "You have registered successfully!";
            
			unset($_POST);
		} else {
			$error_message = "Problem in registration. Try Again!";	
		}
        
    // dibwah ini yg diedit    
    // File upload path
$targetDir = "uploads/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database TAROK SINI !
            $insert = $db->query("INSERT into images (file_name, uploaded_on) VALUES ('".$fileName."', NOW())");
            if($insert){
                $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
            }else{
                $statusMsg = "File upload failed, please try again.";
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}else{
    $statusMsg = 'Please select a file to upload.';
}

// Display status message
echo $statusMsg;    
	// akhir upload
    }
}
?>                                                   
	
	<html>
    <head>
      <meta charset="UTF-8">
      <title>Gereja</title>
      
      
      <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>
          <link rel="stylesheet" href="css/form.css">
        
       <style>
table {
    border-collapse: collapse;
    width: 40%;
}

th, td {
    text-align: center;
    padding: 3px;
}

tr:nth-child(even){}
</style>
        <link href="http://tempemendo.com/gereja/croses/dashboard/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        </head>
<body style="background-color: 	#FF6699;color:black;">



		
        <?php if(!empty($error_message)) { ?>	
        <div class="error-message"><?php if(isset($error_message)) echo $error_message; ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
        </div>
        <?php } ?>
		
            <div class="container">
                <div class="row">
                <div class="col-md-3">
                
                </div>
                <div class="col-md-6">
                <h1 align="center" style="color:white;"> FORMULIR BAPTIS AIR </h1>
      <form class="form-signin" method="POST" enctype="multipart/form-data">
	  <div class="form-group">
	    <label for="InputFile">Foto Kartu Keluarga</label>
	    <input type="file" name="file" id="InputFile">
	   
	  </div>
     
    <br>       
        
	  <div class="form-group">
	    <label for="InputFile">Foto Kartu Tanda Penduduk</label>
	    <input type="file" name="file" id="InputFile">
	    
	  </div>
        
      
        <br>       
        
	  <div class="form-group">
	    <label for="InputFile">Foto Diri (Setengah Badan)</label>
	    <input type="file" name="file" id="InputFile">
	    <p class="help-block">Upload JPEG Files that are below 100 KiloBytes</p>
	  </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Upload</button>
      </form>
                    
            <br>
            <?php if(!empty($success_message)) { ?>	
        <div class="success-message"><?php if(isset($success_message)) echo $success_message; ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
        </div>
        <a href="upload_baptis.php?kd_baptis=<?php echo $_POST['nama'];?>" class="btn btn-block btn-sm btn-primary">
            Lanjutkan Upload File        
        </a>        
        
            
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
