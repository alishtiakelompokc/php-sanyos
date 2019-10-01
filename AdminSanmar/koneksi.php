<?php
$host = "localhost"; //hostnya
$user = "root"; //userhost
$pass = ""; //password untuk masuk
$db = "sanmar"; //database yang dituju

$koneksi = mysqli_connect($host, $user, $pass, $db) or DIE("ERROR Database"); //untuk mengkoneksikan ke database sekaligus memberikan pesan jika database tidak terkoneksi..

?>
