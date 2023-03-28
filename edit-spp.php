<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Edit | SPP</title>
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
    </nav>
    <!-- End Navbar -->

    <!-- Banner -->
    <div class="d-flex justify-content-center align-items-center" style="height: 230px;background-image: url(img/lapang-bg.png); background-position: bottom; background-size:cover;">
        <div class="text-center text-white">
            <h2 class="display-4"><b>Data SPP</b></h2>
            <p class="lead">Edit & Ubah data SPP disini!</p>
        </div>
    </div>
    <!-- End Banner -->

    <?php 
	include "koneksi.php";
	$id_spp = $_GET['id_spp'];
	$query_mysqli = mysqli_query($koneksi, "SELECT * FROM spp WHERE id_spp='$id_spp'");
	while($data = mysqli_fetch_array($query_mysqli)){
	?>

    <!-- Form -->
    <div class="card col-md-10 mx-auto" style="margin-top:35px ; ">
        <div class="card-body">
            <h5 class="text-center text-white d-flex justify-content-center align-items-center" style="background-color: #353935; height: 35px;">Edit Data SPP</h5>
            <form method="POST" action="update-spp.php">
            <input type="hidden" name="id_spp" value="<?php echo $data['id_spp'] ?>">
                <div class="form-group" style="margin-top: 13px;">
                    <label for="tahun">Tahun SPP</label>
                    <input type="text" class="form-control" name="tahun" value="<?php echo $data['tahun'] ?>" placeholder="Ketik tahun SPP">
                </div>
                <div class="form-group" style="margin-top: 13px;">
                    <label for="nominal">Nominal</label>
                    <input type="number" class="form-control" name="nominal" value="<?php echo $data['nominal'] ?>" placeholder="Ketik nominal SPP">
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