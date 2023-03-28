<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Edit | Petugas</title>
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
                    <a class="nav-link text-white" href="petugas.php"><b>Petugas</b></a>
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
    <div class="d-flex justify-content-center align-items-center" style="height: 230px;background-image: url(img/petugas-bg.png); background-position: center; background-size:cover;">
        <div class="text-center text-white">
            <h2 class="display-4"><b>Data Petugas</b></h2>
            <p class="lead">Edit & Ubah data Petugas disini!</p>
        </div>
    </div>
    <!-- End Banner -->

    <?php 
	include "koneksi.php";
	$id = $_GET['id'];
	$query_mysqli = mysqli_query($koneksi, "SELECT * FROM petugas WHERE id='$id'");
	while($data = mysqli_fetch_array($query_mysqli)){
	?>

    <!-- Form -->
    <div class="card col-md-10 mx-auto" style="margin-top:35px ; ">
        <div class="card-body">
            <h5 class="text-center text-white d-flex justify-content-center align-items-center" style="background-color: #353935; height: 35px;">Edit Petugas</h5>
            <form method="POST" action="update-petugas.php">
            <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                <div class="form-group" style="margin-top: 13px;">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" name="username" value="<?php echo $data['username'] ?>" placeholder="Ketik username">
                </div>
                <div class="form-group" style="margin-top: 13px;">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" value="<?php echo $data['password'] ?>" placeholder="Ketik password">
                </div>
                <div class="form-group" style="margin-top: 13px;">
                    <label for="nama_petugas">Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama_petugas" value="<?php echo $data['nama_petugas'] ?>" placeholder="Ketik nama lengkap">
                </div>

                <div class="form-check form-check-inline" style="margin-top: 13px;">
                    <input class="form-check-input" type="radio" name="level" value="admin" checked>
                    <label class="form-check-label" for="level">
                        Admin
                    </label>
                </div>
                <div class="form-check form-check-inline" style="margin-top: 13px;">
                    <input class="form-check-input" type="radio" name="level" value="petugas">
                    <label class="form-check-label" for="level">
                        Petugas
                    </label>
                </div>
                <br>
                <button class="btn btn-dark float-end" type="submit" style="margin-top: 12px; width: 80px;">Simpan</button>
            </form>
            <?php } ?>
        </div>
    </div>
    <br>
    <br>
    <br>
    <!-- End Form Petugas -->
</body>

</html>