
<?php
include 'koneksi.php';
session_start();

$username = $_POST['username1'];
$password = $_POST['password1'];

$query    = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
$runquery = mysql_query($koneksi, $query);

if($runquery){
	$_SESSION['username1'] = $username;
           echo "<script>window.location='sakramen.html';</script>";
} else {
	echo "<script>alert('Username atau password salah'); window.location='login.php';</script>";
}

?>

