<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>PT Sawit Bahagia</title>
</head>

<body style="background-image: url('images/bg-01.jpg');">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark";>
        <div class="container" >
            <a href="#" class="navbar-brand">Data Karyawan PT Sawit Bahagia</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active" aria-current="page" href="#">Tambah Karyawan</a>
                    <a class="nav-link" href="#">Product</a>
                    <a class="nav-link" href="#">Pricing</a>
                </div>
            </div>
        </div>
    </nav>

    <?php
    //Memanggil file config.php
    include 'config.php';
    //Menangkap query id yang dikirim melalui button detail di index.php
    $id = $_GET['id'];
    //Melakukan query untuk mendapatkan data mahasiswa berdasarkan $id
    $karyawan = mysqli_query($koneksi, "select * from karyawan where id='$id'");
    while ($data = mysqli_fetch_assoc($karyawan)){
    ?>
        <div class="container my-5">
            <p><a href="index.php">Home</a> / Edit Data Karyawan / <?php echo $data['Nama'] ?></p>
            <div class="card">
                <div class="card-header" style="background-color:#00FFFF;">
                    <p class="fw-bold">Profil Karyawan</p>
                </div>
                <div class="card-body fw-bold" style="background-color:#C0C0C0;">
                    <!-- Kita membuat form dengan memanggil file store.php-->
                    <form id="formcreate" method="POST" action="update.php">
                        <div class="mb-3">
                            <input type="hidden" class="form-control" name="id" value="<?php echo $data['Id']; ?>">
                        </div>
                        <div class="mb-3">
                            <!-- input nama -->
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="Nama" placeholder="Masukkan Nama Karyawan" name="nama" value="<?php echo $data['Nama']; ?>">
                        </div>
                        <div class="mb-3">
                            <!-- input no ktp -->
                            <label for="nktp" class="form-label">No. KTP</label>
                            <input type="text" class="form-control" id="No_KTP" placeholder="Masukkan No KTP" name="nktp" value="<?php echo $data['No_KTP']; ?>">
                        </div>
                        <div class="mb-3">
                            <!-- input no telp -->
                            <label for="notel" class="form-label">No. Telp</label>
                            <input type="text" class="form-control" id="No_Telp" placeholder="Masukkan No Telpon" name="notel" value="<?php echo $data['No_Telp']; ?>">
                        </div>
                        <div class="mb-3">
                            <!-- input thn masuk -->
                            <label for="thn_masuk" class="form-label">Tahun Masuk</label>
                            <input type="text" class="form-control" id="Tahun_masuk" placeholder="Tahun Masuk Karyawan" name="thn_masuk" value="<?php echo $data['Tahun_masuk']; ?>">
                        </div>
                        <div class="mb-3">
                            <!-- input masa kerja -->
                            <label for="masa_kerja" class="form-label">Jumlah Masa Kerja</label>
                            <input type="text" class="form-control" id="Masa_Kerja" placeholder="Masa Kerja Karyawan" name="masa_kerja" value="<?php echo $data['Masa_Kerja']; ?>">
                        </div>
                        <button type="submit" class="btn btn-primary" form="formcreate" value="SIMPAN">Update</button>
                    </form>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body>

</html>