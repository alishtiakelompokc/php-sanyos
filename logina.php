<?php session_start(); ?>    
<!DOCTYPE html>

    <html lang="en" >
    <head>
      <meta charset="UTF-8">
      <title>Login</title>
      
      
      <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>
          <link rel="stylesheet" href="css/styless.css">
      
    </head>
    <body>
      <div class="login-wrap">
      <div class="login-html">
        <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">LOGIN</label>
        <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">DAFTAR</label>
        <div class="login-form">
          <form class="sign-in-htm" action="" method="post" >
            <div class="group">
              <label class="label">Username</label>
              <input name="username1" type="text" class="input" required="">
            </div>
            <div class="group">
              <label class="label">Password</label>
              <input name="password1" type="password" class="input" data-type="password" required="">
            </div>
              <br>
            <div class="group">
              <input type="submit" class="button" name="submitlogin" value="Masuk">
            </div>
            <div class="hr"></div>
            <div class="foot-lnk">
              <a href="#forgot">Lupa Password?</a>
            </div>
          </form>
          <form class="sign-up-htm" action="" method="post" >
            <div class="group">
              <label class="label">Username</label>
              <input id="1username" name="username" type="text" class="input">
            </div>
            <div class="group">
              <label class="label">Password</label>
              <input id="1password" name="password" type="password" class="input" data-type="password">
            </div>
            <div class="group">
              <input type="submit" name="submitregister" class="button" value="Daftar">
            </div>
            <div class="hr"></div>
            <div class="foot-lnk">
              <label for="tab-1">Sudah punya akun? Langsung LOGIN</a>
            </div>
          </form>
        </div>
      </div>
    </div>
      
      
    </body>
    </html>

<?php
if(isset($_POST['submitlogin'])){
include 'koneksi.php';

$username1 = $_POST['username1'];
$password1 = $_POST['password1'];

$query    = "SELECT * FROM user WHERE username = '$username1' AND password = '$password1'";
$runquery = mysqli_query($koneksi, $query);
$row = mysqli_num_rows($runquery);
if($row > 0){
	$_SESSION['username'] = $username1;
           echo "<script>window.location='sakramen.php';</script>";
} else {
	echo "<script>alert('Username atau password salah'); window.location='login.php';</script>";
}
}

//if(isset($_POST['submitregister'])){
//include 'koneksi.php';
//
//$username = $_POST['username'];
//$password = $_POST['password'];
//
//$query    = "INSERT INTO user VALUES ('$username', '$password')";
//$runquery = mysqli_query($koneksi, $query);
//
//if($runquery){
//           echo "<script>alert('Register telah berhasil'); window.location='login.php';</script>";
//} else {
//	echo "<script>alert('Register gagal dilakukan'); window.location='login.php';</script>";
//}
//}
?>

