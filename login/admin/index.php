<?php
include "../koneksi.php";

//mengaktifkan session start 
session_start();

//cek apakah user telah login
if($_SESSION['status']!="login") {
	header("Location: ../index.php");
}

//menampilkan pesan selamat datang
echo "Selamat Datang " . $_SESSION['username'] . "<br>" ; 
var_dump(password_hash('123', PASSWORD_DEFAULT));
	$hash = '$2y$10$NSzJ/7IqMEKU6wW1xjSab.3A/KiTnbGcfCyDq.CI0pGJqiHOKxVHK';
    $asli = '123';
    echo "<br>";
    if(password_verify($asli , $hash)){
        echo "Password Anda Benar";
    }
    else{
        echo "Password Anda salah";
    }

?>

<br  />
<br  />
<a href="logout.php"> Logout</a>