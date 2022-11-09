<?php 
$koneksi = mysqli_connect("localhost", "root", "", "logindb");

//pengecekan koneksi 
if (mysqli_connect_error()) {
	echo "Koneksi Database gagal" . mysqli_connect_error();
}else{
	// echo "Koneksi Berhasil";
}

?>