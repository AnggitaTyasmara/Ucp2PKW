<?php
// Include koneksi database
include './config.php';

// Menangkap data yang dikirim dari form
$nama = $_POST['nama'];
$nktp = $_POST['nktp'];
$notel = $_POST['notel'];
$thn_masuk = $_POST['thn_masuk'];
$masa_kerja = $_POST['masa_kerja'];

// Menginput data ke database
mysqli_query($koneksi, "insert into karyawan values('','$nama','$nktp','$notel','$thn_masuk','$masa_kerja')");
// Mengembalikan ke halaman awal
header("location:/index.php");
