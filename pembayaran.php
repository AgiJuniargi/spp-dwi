<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Halaman | Pembayaran</title>
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
                    <a class="nav-link" href="siswa.php">Siswa</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="petugas.php">Petugas</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link text-white" href="pembayaran.php"><b>Pembayaran</b></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="kelas.php">Kelas</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="spp.php">SPP</a>
                </li>
            </ul>
        </div>
        <a href="cetak-pembayaran.php" class="btn btn-light" style="margin-right: 15px; width: 95px;" target="_BLANK"><b><i class="fa fa-print"></i> Print</b></a>
        <a href="login.php" class="btn btn-light" style="margin-right: 30px;"><b><i class="fa fa-sign-out"></i> Logout</b></a>
    </nav>
    <!-- End Navbar -->

    <!-- Banner -->
    <div class="d-flex justify-content-center align-items-center" style="height: 230px;background-image: url(img/pembayaran-bg.png); background-position: center; background-size:cover;">
        <div class="text-center text-white">
            <h2 class="display-4"><b>Pembayaran</b></h2>
            <p class="lead">Lihat, Tambah, Edit & Hapus Pembayaran disini!</p>
        </div>
    </div>
    <!-- End Banner -->

    <!-- Table -->
    <div class="card col-md-10 mx-auto" style="margin-top:35px ; ">
        <div class="card-body">
            <table class="table text-center">
                <thead style="background-color: #353935;">
                    <tr>
                        <th scope="col" class="text-white">No</th>
                        <th scope="col" class="text-white">ID Pembayaran</th>
                        <th scope="col" class="text-white">Nama Petugas</th>
                        <th scope="col" class="text-white">NISN</th>
                        <th scope="col" class="text-white">Tanggal Bayar</th>
                        <th scope="col" class="text-white">Bulan Dibayar</th>
                        <th scope="col" class="text-white">Tahun Dibayar</th>
                        <th scope="col" class="text-white">Nominal SPP</th>
                        <th scope="col" class="text-white">Jumlah Bayar</th>
                        <th scope="col" class="text-white"></th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    include 'koneksi.php';
                    $no = 1;
                    $data = mysqli_query($koneksi, "select * from pembayaran as a LEFT JOIN petugas as b ON a.id_petugas = b.id LEFT JOIN spp as c ON a.id_spp = c.id_spp;");
                    while ($d = mysqli_fetch_array($data)) {
                    ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $d['id_pembayaran']; ?></td>
                            <td><?php echo $d['nama_petugas']; ?></td>
                            <td><?php echo $d['nisn']; ?></td>
                            <td><?php echo $d['tgl_bayar']; ?></td>
                            <td><?php echo $d['bulan_dibayar']; ?></td>
                            <td><?php echo $d['tahun_dibayar']; ?></td>
                            <td><?php echo $d['nominal']; ?></td>
                            <td><?php echo $d['jumlah_bayar']; ?></td>
                            <td>
                                <a href="edit-pembayaran.php?id_pembayaran=<?php echo $d['id_pembayaran']; ?>"><b><i class="fa fa-pencil" style="color:black"></i></b></a>
                                <a href="delete-pembayaran.php?id_pembayaran=<?php echo $d['id_pembayaran']; ?>"><b><i class="fa fa-trash" style="color:black"></i></b></a>
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
            <h5 class="text-center text-white d-flex justify-content-center align-items-center" style="background-color: #353935; height: 35px;">Tambah Pembayaran</h5>
            <form method="POST" action="input-pembayaran.php">
                <div class="form-group" style="margin-top: 13px;">
                    <label for="id_petugas">Petugas</label>
                    <select class="form-select" name="id_petugas">
                        <option>-Pilih Petugas-</option>
                        <?php
                        include "koneksi.php";
                        $sql = mysqli_query($koneksi, "SELECT * FROM petugas");
                        while ($data = mysqli_fetch_array($sql)) {
                        ?>
                            <option value="<?= $data['id'] ?>"><?= $data['id'] ?> | <?= $data['nama_petugas'] ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group" style="margin-top: 13px;">
                    <label for="nisn">NISN</label>
                    <select class="form-select" name="nisn">
                        <option>-Pilih Identitas Siswa-</option>
                        <?php
                        include "koneksi.php";
                        $sql = mysqli_query($koneksi, "SELECT * FROM siswa");
                        while ($data = mysqli_fetch_array($sql)) {
                        ?>
                            <option value="<?= $data['nisn'] ?>"><?= $data['nisn'] ?> | <?= $data['nama'] ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group" style="margin-top: 13px;">
                    <label for="tgl_bayar">Tanggal Bayar</label>
                    <input type="number" class="form-control" name="tgl_bayar" placeholder="Ketik tanggal bayar">
                </div>
                <div class="form-group" style="margin-top: 13px;">
                    <label for="bulan_dibayar">Bulan Dibayar</label>
                    <select class="form-select" name="bulan_dibayar">
                        <option>-Pilih Bulan-</option>
                        <option value="Januari">Januari</option>
                        <option value="Februari">Februari</option>
                        <option value="Maret">Maret</option>
                        <option value="April">April</option>
                        <option value="Mei">Mei</option>
                        <option value="Juni">Juni</option>
                        <option value="Juli">Juli</option>
                        <option value="Agustus">Agustus</option>
                        <option value="September">September</option>
                        <option value="Oktober">Oktober</option>
                        <option value="November">November</option>
                        <option value="Desember">Desember</option>
                    </select>
                </div>
                <div class="form-group" style="margin-top: 13px;">
                    <label for="tahun_dibayar">Tahun Dibayar</label>
                    <input type="number" class="form-control" name="tahun_dibayar" placeholder="Ketik tahun dibayar">
                </div>
                <div class="form-group" style="margin-top: 13px;">
                    <label for="id_spp">SPP</label>
                    <select class="form-select" name="id_spp">
                        <option>-Pilih SPP-</option>
                        <?php
                        include "koneksi.php";
                        $sql = mysqli_query($koneksi, "SELECT * FROM spp");
                        while ($data = mysqli_fetch_array($sql)) {
                        ?>
                            <option value="<?= $data['id_spp'] ?>"><?= $data['tahun'] ?> | <?= $data['nominal'] ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group" style="margin-top: 13px;">
                    <label for="jumlah_bayar">Jumlah Bayar</label>
                    <input type="number" class="form-control" name="jumlah_bayar" placeholder="Ketik jumlah bayar">
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