<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Halaman | Siswa</title>
  <!-- Bootstrap -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
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
        <a href="cetak-siswa.php" class="btn btn-light" style="margin-right: 15px; width: 95px;" target="_BLANK"><b><i class="fa fa-print"></i> Print</b></a>
        <a href="login.php" class="btn btn-light" style="margin-right: 30px;"><b><i class="fa fa-sign-out"></i> Logout</b></a>
    </nav>
    <!-- End Navbar -->

    <!-- Banner -->
    <div class="d-flex justify-content-center align-items-center" style="height: 230px;background-image: url(img/siswa-bg.png); background-position: center; background-size:cover;">
        <div class="text-center text-white">
            <h2 class="display-4"><b>Data Siswa</b></h2>
            <p class="lead">Lihat, Tambah, Edit & Hapus data Siswa disini!</p>
        </div>
    </div>
    <!-- End Banner -->

    <!-- Table Siswa -->
    <div class="card col-md-10 mx-auto" style="margin-top:35px ; ">
        <div class="card-body">
            <table class="table text-center">
                <thead style="background-color: #353935;">
                    <tr>
                        <th scope="col" class="text-white">No</th>
                        <th scope="col" class="text-white">NISN</th>
                        <th scope="col" class="text-white">NIS</th>
                        <th scope="col" class="text-white">Nama</th>
                        <th scope="col" class="text-white">Kelas</th>
                        <th scope="col" class="text-white">Alamat</th>
                        <th scope="col" class="text-white">No Telpon</th>
                        <th scope="col" class="text-white">Nominal</th>
                        <th scope="col" class="text-white">Tahun</th>
                        <th scope="col" class="text-white"></th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    include 'koneksi.php';
                    $no = 1;
                    $data = mysqli_query($koneksi, "select * from siswa as a LEFT JOIN spp as b ON a.id_spp = b.id_spp;");
                    while ($d = mysqli_fetch_array($data)) {
                    ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $d['nisn']; ?></td>
                            <td><?php echo $d['nis']; ?></td>
                            <td><?php echo $d['nama']; ?></td>
                            <td><?php echo $d['kelas']; ?></td>
                            <td><?php echo $d['alamat']; ?></td>
                            <td><?php echo $d['no_telp']; ?></td>
                            <td><?php echo $d['nominal']; ?></td>
                            <td><?php echo $d['tahun']; ?></td>
                            <td>
                                <a href="edit-siswa.php?nisn=<?php echo $d['nisn']; ?>"><b><i class="fa fa-pencil" style="color: black;"></i></b></a>
                                <a href="delete-siswa.php?nisn=<?php echo $d['nisn']; ?>"><b><i class="fa fa-trash" style="color: black;"></i></b></a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End Table -->

    <!-- Form -->
    <div class="card col-md-10 mx-auto" style="margin-top:35px ; ">
        <div class="card-body">
            <h5 class="text-center text-white d-flex justify-content-center align-items-center" style="background-color: #353935; height: 35px;">Tambah Siswa</h5>
            <form method="POST" action="input-siswa.php">
                <div class="form-group" style="margin-top: 13px;">
                    <label for="nisn">NISN</label>
                    <input type="number" class="form-control" name="nisn" placeholder="Ketik NISN">
                </div>
                <div class="form-group" style="margin-top: 13px;">
                    <label for="nis">NIS</label>
                    <input type="number" class="form-control" name="nis" placeholder="Ketik NIS">
                </div>
                <div class="form-group" style="margin-top: 13px;">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama" placeholder="Ketik nama lengkap">
                </div>
                <div class="form-group" style="margin-top: 13px;">
                    <label for="kelas">Kelas</label>
                    <select class="form-select" name="kelas">
                        <option>Pilih kelas</option>
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
                    <textarea class="form-control" name="alamat" placeholder="Ketik alamat"></textarea>
                </div>
                <div class="form-group" style="margin-top: 13px;">
                    <label for="no_telp">No Telepon</label>
                    <input type="number" class="form-control" name="no_telp" placeholder="Ketik nomor telepon">
                </div>
                <div class="form-group" style="margin-top: 13px;">
                    <label for="id_spp">SPP (Tahun / Nominal)</label>
                    <select class="form-select" name="id_spp">
                        <option>Pilih SPP</option>
                    <?php
                    include "koneksi.php";
                    $sql = mysqli_query($koneksi, "SELECT * FROM spp");
                    while ($data = mysqli_fetch_array($sql)) {
                    ?>
                        <option value="<?= $data['id_spp'] ?>"><?= $data['tahun'] ?> / <?= $data['nominal'] ?></option>
                    <?php
                    }
                    ?>
                </select>
                </div>
                <button class="btn btn-dark float-end" type="submit" style="margin-top: 15px; width: 80px;">Selesai</button>
            </form>
        </div>
    </div>
    <!-- End Form -->

    <br>
    <br>
    <br>
</body>

</html>