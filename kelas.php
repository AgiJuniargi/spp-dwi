<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Halaman | Kelas</title>
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
                    <a class="nav-link text-white" href="kelas.php"><b>Kelas</b></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="spp.php">SPP</a>
                </li>
            </ul>
        </div>
        <a href="cetak-kelas.php" class="btn btn-light" style="margin-right: 15px; width: 95px;" target="_BLANK"><b><i class="fa fa-print"></i> Print</b></a>
        <a href="login.php" class="btn btn-light" style="margin-right: 30px;"><b><i class="fa fa-sign-out"></i> Logout</b></a>
    </nav>
    <!-- End Navbar -->

    <!-- Banner -->
    <div class="d-flex justify-content-center align-items-center" style="height: 230px;background-image: url(img/kelas-bg.png); background-position: center; background-size:cover;">
        <div class="text-center text-white">
            <h2 class="display-4"><b>Data Kelas</b></h2>
            <p class="lead">Lihat, Tambah, Edit & Hapus data Kelas disini!</p>
        </div>
    </div>
    <!-- End Banner -->

    <!-- Table Kelas -->
    <div class="card col-md-10 mx-auto" style="margin-top:35px ; ">
        <div class="card-body">
            <table class="table text-center">
                <thead style="background-color: #353935;">
                    <tr>
                        <th scope="col" class="text-white">No</th>
                        <th scope="col" class="text-white">Nama Kelas</th>
                        <th scope="col" class="text-white">Kompetensi Keahlian</th>
                        <th scope="col" class="text-white"></th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    include 'koneksi.php';
                    $no = 1;
                    $data = mysqli_query($koneksi, "select * from kelas");
                    while ($d = mysqli_fetch_array($data)) {
                    ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $d['nama_kelas']; ?></td>
                            <td><?php echo $d['kompetensi_keahlian']; ?></td>
                            <td>
                                <a href="edit-kelas.php?id=<?php echo $d['id']; ?>"><b><i class="fa fa-pencil" style="color: black;"></i></b></a>
                                <a href="delete-kelas.php?id=<?php echo $d['id']; ?>"><b><i class="fa fa-trash" style="color: black;"></i></b></a>
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
            <h5 class="text-center text-white d-flex justify-content-center align-items-center" style="background-color: #353935; height: 35px;">Tambah Kelas</h5>
            <form method="POST" action="input-kelas.php">
                <div class="form-group" style="margin-top: 13px;">
                    <label for="nama_kelas">Nama Kelas</label>
                    <input type="text" class="form-control" name="nama_kelas" placeholder="Ketik nama kelas">
                </div>
                <div class="form-group" style="margin-top: 13px;">
                    <label for="kompetensi_keahlian">Kompetensi Keahlian</label>
                    <select class="form-select" name="kompetensi_keahlian">
                        <option>Pilih kelas</option>
                        <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option> 
                        <option value="Teknik Komputer Jaringan">Teknik Komputer Jaringan</option>
                        <option value="Teknik dan Bisnis Sepeda Motor">Teknik dan Bisnis Sepeda Motor</option>
                        <option value="Otorisasi dan Tata Kelola Perkantoran">Otorisasi dan Tata Kelola Perkantoran</option>
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