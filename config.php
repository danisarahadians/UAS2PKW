<?php
// Koneksi ke database ("" merupakan password phpmyadmin)
$koneksi = mysqli_connect("localhost", "ucp2pkw_danisarahadian", "uaspkw123", 
"ucp2pkw_tokobukudanis");


//Cek koneksi ke Database
//Apabila Error
if (mysqli_connect_errno()){
    echo "Koneksi database gagal : " . mysqli_connect_error();
}