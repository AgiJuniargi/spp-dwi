<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Halaman | SPP</title>
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
                    <a class="nav-link" href="pembayaran.php">Pembayaran</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="kelas.php">Kelas</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link text-white" href="spp.php"><b>SPP</b></a>
                </li>
            </ul>
        </div>
        <a href="cetak-spp.php" class="btn btn-light" style="margin-right: 15px; width: 95px;" target="_BLANK"><b><i class="fa fa-print"></i> Print</b></a>
        <a href="login.php" class="btn btn-light" style="margin-right: 30px;"><b><i class="fa fa-sign-out"></i> Logout</b></a>
    </nav>
    <!-- End Navbar -->

    <!-- Banner -->
    <div class="d-flex justify-content-center align-items-center" style="height: 230px;background-image: url(img/lapang-bg.png); background-position: bottom; background-size:cover;">
        <div class="text-center text-white">
            <h2 class="display-4"><b>Data SPP</b></h2>
            <p class="lead">Lihat, Tambah, Edit & Hapus data SPP disini!</p>
        </div>
    </div>
    <!-- End Banner -->

    <!-- Table SPP -->
    <div class="card col-md-10 mx-auto" style="margin-top:35px ; ">
        <div class="card-body">
            <table class="table text-center">
                <thead style="background-color: #353935;">
                    <tr>
                        <th scope="col" class="text-white">No</th>
                        <th scope="col" class="text-white">ID SPP</th>
                        <th scope="col" class="text-white">Tahun</th>
                        <th scope="col" class="text-white">Nominal</th>
                        <th scope="col" class="text-white"></th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    include 'koneksi.php';
                    $no = 1;
                    $data = mysqli_query($koneksi, "select * from spp");
                    while ($d = mysqli_fetch_array($data)) {
                    ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $d['id_spp']; ?></td>
                            <td><?php echo $d['tahun']; ?></td>
                            <td><?php echo $d['nominal']; ?></td>
                            <td>
                            
                                <a href="edit-spp.php?id_spp=<?php echo $d['id_spp']; ?>"><b><i class="fa fa-pencil" style="color: black;"></i></b></a>
                                <a href="delete-spp.php?id_spp=<?php echo $d['id_spp']; ?>"><b><i class="fa fa-trash" style="color: black;"></i></b></a>
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
            <h5 class="text-center text-white d-flex justify-content-center align-items-center" style="background-color: #353935; height: 35px;">Tambah SPP</h5>
            <form method="POST" action="input-spp.php">
                <div class="form-group" style="margin-top: 13px;">
                    <label for="tahun">Tahun SPP</label>
                    <input type="text" class="form-control" name="tahun" placeholder="Ketik tahun SPP">
                </div>
                <div class="form-group" style="margin-top: 13px;">
                    <label for="nominal">Nominal</label>
                    <input type="number" class="form-control" name="nominal" placeholder="Ketik nominal SPP">
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