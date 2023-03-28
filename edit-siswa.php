<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Edit | Siswa</title>
  <!-- Bootstrap -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <img src="img/logo_sekolah.png" width="53px" height="70px" alt="" style="margin-left: 10px;">
        <h5 style="margin-left:5px;" class="text-white">SMK Merdeka<br>Kota Bandung</h5>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php" style="margin-left: 30px;">Beranda</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link text-white" href="siswa.php"><b>Siswa</b></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="petugas.php">Petugas</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="pembayaran.php">Pembayaran</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="kelas.php">Kelas</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="spp.php">SPP</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- End Navbar -->

    <!-- Banner -->
    <div class="d-flex justify-content-center align-items-center" style="height: 230px;background-image: url(img/siswa-bg.png); background-position: center; background-size:cover;">
        <div class="text-center text-white">
            <h2 class="display-4"><b>Data Siswa</b></h2>
            <p class="lead">Edit & Ubah data Siswa disini!</p>
        </div>
    </div>
    <!-- End Banner -->

    <?php 
	include "koneksi.php";
	$nisn = $_GET['nisn'];
	$query_mysqli = mysqli_query($koneksi, "SELECT * FROM siswa WHERE nisn='$nisn'");
	while($data = mysqli_fetch_array($query_mysqli)){
	?>

    <!-- Form -->
    <div class="card col-md-10 mx-auto" style="margin-top:35px ; ">
        <div class="card-body">
            <h5 class="text-center text-white d-flex justify-content-center align-items-center" style="background-color: #353935; height: 35px;">Edit Data Siswa</h5>
            <form method="POST" action="update-siswa.php">
                <div class="form-group" style="margin-top: 13px;">
                    <label for="nisn">NISN (*tidak boleh di ubah)</label>
                    <input type="number" class="form-control" name="nisn" value="<?php echo $data['nisn'] ?>" placeholder="Ketik NISN">
                </div>
                <div class="form-group" style="margin-top: 13px;">
                    <label for="nis">NIS</label>
                    <input type="number" class="form-control" name="nis" value="<?php echo $data['nis'] ?>" placeholder="Ketik NIS">
                </div>
                <div class="form-group" style="margin-top: 13px;">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama" value="<?php echo $data['nama'] ?>" placeholder="Ketik nama lengkap">
                </div>
                <div class="form-group" style="margin-top: 13px;">
                    <label for="kelas">Kelas</label>
                    <select class="form-select" name="kelas">
                        <option selected="<?php echo $data['kelas'] ?>"><?php echo $data['kelas'] ?></option>
                    <?php
                    include "koneksi.php";
                    $sql = mysqli_query($koneksi, "SELECT * FROM kelas");
                    while ($data = mysqli_fetch_array($sql)) {
                    ?>
                        <option value="<?= $data['nama_kelas'] ?>"><?= $data['nama_kelas'] ?></option>
                    <?php
                    }
                    ?>
                </select>
                </div>
                <div class="form-group" style="margin-top: 13px;">
                    <label for="alamat">Alamat</label>
                    <?php
                    include "koneksi.php";
                    $sql = mysqli_query($koneksi, "SELECT * FROM siswa WHERE nisn='$nisn'");
                    while ($data = mysqli_fetch_array($sql)) {
                    ?>
                    <textarea class="form-control" name="alamat"><?php echo $data['alamat'] ?></textarea>
                </div>
                <div class="form-group" style="margin-top: 13px;">
                    <label for="no_telp">No Telepon</label>
                    <input type="number" class="form-control" name="no_telp" value="<?php echo $data['no_telp'] ?>">
                    <?php
                    }
                    ?>
                </div>
                <div class="form-group" style="margin-top: 13px;">
                    <label for="id_spp">SPP (Tahun / Nominal)</label>
                    <select class="form-select" name="id_spp">
                    <?php
                    include "koneksi.php";
                    $sql = mysqli_query($koneksi, "SELECT * FROM siswa WHERE nisn='$nisn'");
                    while ($data = mysqli_fetch_array($sql)) {
                    ?>
                    <option value="<?php echo $data['id_spp'] ?>">-Pilih SPP-</option>
                    <?php
                    }
                    ?>
                    <?php
                    include "koneksi.php";
                    $sql = mysqli_query($koneksi, "SELECT * FROM spp");
                    while ($data = mysqli_fetch_array($sql)) {
                    ?>
                        <option value="<?php echo $data['id_spp'] ?>"><?= $data['tahun'] ?> / <?= $data['nominal'] ?></option>
                    <?php
                    }
                    ?>
                </select>
                </div>
                <button class="btn btn-dark float-end" type="submit" style="margin-top: 15px; width: 80px;">Simpan</button>
            </form>
            <?php } ?>
        </div>
    </div>
    <!-- End Form -->
    <br>
    <br>
    <br>
</body>

</html>