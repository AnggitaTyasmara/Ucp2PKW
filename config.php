<?php
// Koneksi ke database ("" merupakan password phpmyadmin)
define('SERVER', 'localhost');

define('USERNAME', 'root');

define('PASSWORD', '');

define('DATABASE', 'pt_sawitbahagia');
$koneksi = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);
//Cek koneksi ke Database
//Apabila Error
if (mysqli_connect_errno()){
    echo "Koneksi database gagal : " . mysqli_connect_error();
}