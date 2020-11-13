<?php
include 'config.php';

$id = $_GET['id'];
$delBerita = hapus('berita', "idBerita='$id'");

if ($delBerita) {
    echo "<script>alert('Berita berhasil dihapus.'); window.location.href='adminBerita.php';</script>";
} else {
    echo "<script>alert('Berita gagal dihapus.');</script>";
}
 ?>
