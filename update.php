<?php
include './config.php';

$id=$_POST['id'];
$nama = $_POST['nama'];
$kategori = $_POST['kategori'];
$penerbit = $_POST['penerbit'];
$harga = $_POST['harga'];
$dis = (10/100)*$_POST['harga'];
$diskon =$_POST['harga']-$dis;

mysqli_query($koneksi,"update tokobuku set nama='$nama',kategori='$kategori',penerbit='$penerbit',harga='$harga',diskon='$diskon' where id='$id'");

header("location:home.php");