<?php
//koneksi database
include './config.php';

//Menangkap data yang dikirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$nktp = $_POST['nktp'];
$notel = $_POST['notel'];
$thn_masuk = $_POST['thn_masuk'];
$masa_kerja = $_POST['masa_kerja'];

//Update data ke database
mysqli_query($koneksi, "update karyawan set Nama='$nama', No_KTP='$nktp', No_Telp='$notel', Tahun_masuk='$thn_masuk', Masa_Kerja='$masa_kerja' where id ='$id'");

//Mengalihkan halaman kembali ke index.php
header("location:index.php");