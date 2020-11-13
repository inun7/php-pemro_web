<?php
include 'config.php';

$id = $_GET['id'];
$delData = hapus('data', "idData='$id'");

if ($delData) {
    echo "<script>alert('Data berhasil dihapus.'); window.location.href='adminData.php';</script>";
} else {
    echo "<script>alert('Data gagal dihapus.');</script>";
}
 ?>
