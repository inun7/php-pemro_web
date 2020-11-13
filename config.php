<?php
$dbServername = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'dbPemweb';
 
// Create connection
$db = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
if (!$db) {
  echo "Gagal koneksi";
} else {
  // code...
}

function simpan($tabel, $kolom, $value){
    global $db;
    $query = "INSERT into " . $tabel . " (" . $kolom . ") VALUES(" . $value . ")";
    $cek = mysqli_query($db, $query);
    return $cek;
}

//menampilkan data dari tabel di variabel param
function tampil($tabel, $key = ""){
    global $db;
    $query = "SELECT * from " . $tabel . $key;
    $cek = mysqli_query($db, $query);
    return $cek;
}

//untuk mengedit data di tabel yang telah di tentukan
function update($tabel, $kolomkey, $valuekey, $value){
    global $db;
    $query = "UPDATE  " . $tabel . " set " . $value . " where $kolomkey = '$valuekey'";
    $cek = mysqli_query($db, $query);
    return $cek;
}

//menghapus data dan method procedur
function hapus($tabel, $key = ""){
    global $db;
    $query = "DELETE from " . $tabel ." WHERE " . $key;
    $cek = mysqli_query($db, $query);
    return $cek;
}

 ?>
