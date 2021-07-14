<?php
// Koneksi database
include './config.php';

// Menangkap data yang dikirim dari form
$nama = $_POST['nama'];
$kategori = $_POST['kategori'];
$penerbit = $_POST['penerbit'];
$harga = $_POST['harga'];
$dis = (10/100)*$_POST['harga'];
$diskon =$_POST['harga']-$dis;

//Menginput data ke database
mysqli_query($koneksi,"insert into tokobuku values (NULL,'$nama','$kategori','$penerbit','$harga','$diskon')");

//Mengembalikan ke halaman awal
header("location:./home.php");