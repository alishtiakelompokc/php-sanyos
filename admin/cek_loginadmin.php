<?php 
session_start();
include 'admin/config.php';
$username=$_POST['username'];
$password=$_POST['password'];

$query=mysql_query("select * from admin where username='$username' and password='$password'")or die(mysql_error());
if(mysql_num_rows($query)==1){
	$_SESSION['uname']=$uname;
	header("location:admin/index.php");
}else{
	header("location:login_admin.php?pesan=gagal")or die(mysql_error());
	// mysql_error();
}
// echo $pas;
 ?>