<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Edit | Pembayaran</title>
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
    </nav>
    <!-- End Navbar -->

    <!-- Banner -->
    <div class="d-flex justify-content-center align-items-center" style="height: 230px;background-image: url(img/pembayaran-bg.png); background-position: center; background-size:cover;">
        <div class="text-center text-white">
            <h2 class="display-4"><b>Pembayaran</b></h2>
            <p class="lead">Edit & Ubah Pembayaran disini!</p>
        </div>
    </div>
    <!-- End Banner -->

    <?php
    include "koneksi.php";
    $id_pembayaran = $_GET['id_pembayaran'];
    $query_mysqli = mysqli_query($koneksi, "SELECT * FROM pembayaran WHERE id_pembayaran='$id_pembayaran'");
    while ($data = mysqli_fetch_array($query_mysqli)) {
    ?>

        <!-- Form -->
        <div class="card col-md-10 mx-auto" style="margin-top:35px ; ">
            <div class="card-body">
                <input type="hidden" name="id_pembayaran" value="<?php echo $data['id_pembayaran'] ?>">
                <h5 class="text-center text-white d-flex justify-content-center align-items-center" style="background-color: #353935; height: 35px;">Edit Data Pembayaran</h5>
                <form method="POST" action="update-pembayaran.php">
                    <div class="form-group" style="margin-top: 13px;">
                        <label for="id_petugas">Petugas</label>
                        <select class="form-select" name="id_petugas">
                            <?php
                            include "koneksi.php";
                            $sql = mysqli_query($koneksi, "SELECT * FROM pembayaran WHERE id_pembayaran='$id_pembayaran'");
                            while ($data = mysqli_fetch_array($sql)) {
                            ?>
                                <option value="<?php echo $data['id_petugas']; ?>">-Pilih Petugas-</option>
                            <?php } ?>
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
                            <?php
                            include "koneksi.php";
                            $sql = mysqli_query($koneksi, "SELECT * FROM pembayaran WHERE id_pembayaran='$id_pembayaran'");
                            while ($data = mysqli_fetch_array($sql)) {
                            ?>
                                <option value="<?php echo $data['nisn']; ?>">-Pilih Identitas Siswa-</option>
                            <?php
                            }
                            ?>
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
                        <?php
                        include "koneksi.php";
                        $sql = mysqli_query($koneksi, "SELECT * FROM pembayaran WHERE id_pembayaran='$id_pembayaran'");
                        while ($data = mysqli_fetch_array($sql)) {
                        ?>
                            <input type="number" class="form-control" name="tgl_bayar" value="<?php echo $data['tgl_bayar']; ?>" placeholder="Ketik tanggal bayar">
                    </div>
                    <div class="form-group" style="margin-top: 13px;">
                        <label for="bulan_dibayar">Bulan Dibayar</label>
                        <select class="form-select" name="bulan_dibayar">
                            <option value="<?php echo $data['bulan_dibayar']; ?>"><?php echo $data['bulan_dibayar']; ?></option>
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
                        <input type="number" class="form-control" name="tahun_dibayar" value="<?php echo $data['tahun_dibayar']; ?>" placeholder="Ketik tahun dibayar">
                    <?php
                        }
                    ?>
                    </div>
                    <div class="form-group" style="margin-top: 13px;">
                        <label for="id_spp">SPP (Tahun / Nominal)</label>
                        <select class="form-select" name="id_spp">
                            <?php
                            include "koneksi.php";
                            $sql = mysqli_query($koneksi, "SELECT * FROM pembayaran WHERE id_pembayaran='$id_pembayaran'");
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
                    <div class="form-group" style="margin-top: 13px;">
                        <label for="jumlah_bayar">Jumlah Bayar</label>
                        <?php
                        include "koneksi.php";
                        $sql = mysqli_query($koneksi, "SELECT * FROM pembayaran WHERE id_pembayaran='$id_pembayaran'");
                        while ($data = mysqli_fetch_array($sql)) {
                        ?>
                            <input type="number" class="form-control" name="jumlah_bayar" value="<?php echo $data['jumlah_bayar'] ?>" placeholder="Ketik jumlah bayar">
                        <?php
                        }
                        ?>
                    </div>
                    <button class="btn btn-dark float-end" type="submit" style="margin-top: 15px; width: 80px;">Selesai</button>
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