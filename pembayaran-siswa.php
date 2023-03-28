<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Beranda</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #0096FF;">

        <img src="img/logo_sekolah.png" width="53px" height="70px" alt="" style="margin-left: 10px;">
        <h5 style="margin-left:5px;" class="text-white">SMK Merdeka<br>Kota Bandung</h5>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="beranda.php" style="margin-left: 30px;"">Beranda</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link text-white" href="pembayaran-siswa.php"><b>Riwayat Pembayaran</b></a>
                </li>
            </ul>
        </div>
        <a href="loginsiswa.php" class="btn btn-light" style="margin-right: 30px; color:#0096FF;"><b><i class="fa fa-sign-out"></i> Logout</b></a>
    </nav>

    <!-- Banner -->
    <div class="d-flex justify-content-center align-items-center" style="height: 230px;background-image: url(img/pembayaran-bg.png); background-position: center; background-size:cover;">
        <div class="text-center text-white">
            <h2 class="display-4"><b>Riwayat Pembayaran</b></h2>
            <p class="lead">Lihat Riwayat Transakasi Pembayaran disini!</p>
        </div>
    </div>
    <!-- End Banner -->

        <!-- Table -->
        <div class="card col-md-10 mx-auto" style="margin-top:35px ; ">
        <div class="card-body">
            <table class="table text-center mx-auto">
                <thead style="background-color: #0096FF;">
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
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End Table -->

</body>

</html>