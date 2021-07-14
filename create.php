<?php
// include koneksi database
include './config.php';

//Menangkap data yang dikirim dari form
$nama_buku = $_POST['nama_buku'];
$kategori = $_POST['kategori'];
$penerbit = $_POST['penerbit'];
$harga = $_POST['harga'];
$diskon = $_POST['diskon'];


//Menginput data ke database
mysqli_query($koneksi, "insert into tokobuku values('', '$nama_buku', '$kategori', '$penerbit', '$harga', '$diskon')");
//mengembalikan ke halaman awal
header("location:./index.php");