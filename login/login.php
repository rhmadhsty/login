<?php 
//mengaktifkan session php
session_start();
include 'koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];
$login = mysqli_query($koneksi, "SELECT * FROM admin WHERE username = '$username' AND password = '$password' ");

$cek = mysqli_num_rows($login);
if ($cek > 0) {
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("Location: admin/index.php");
}else{
	header("Location: index.php?pesan=gagal");
	// echo "var_dump($password)";
	  
}


?>