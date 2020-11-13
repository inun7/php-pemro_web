<?php
// Mengaktifkan session php
session_start();

// Menghubungkan ke Database
include_once("config.php");

// Menangkap Data yang dikirim
$username = $_POST['username'];
$password = $_POST['password'];

// Menyeleksi data admin menggunakan username dan password
$data = mysqli_query($db, "select * from akunAdmin where username='$username' and password='$password'");

// Menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

if($cek>0){
  $_SESSION['username'] = $username;
  $_SESSION['status'] = "login";
  header("location: adminDashboard.php");
}else {
  header("location: index.php?pesan=gagal");
}
 ?>
