<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Print | Siswa</title>
  <!-- Bootstrap -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
</head>

<body>
    <h3 class="text-center" style="color: #353935; margin-top:50px;">Table Siswa</h3>
    <!-- Table Siswa -->
    <div class="card col-md-12 mx-auto" style="margin-top:35px ; ">
        <div class="card-body">
            <table class="table text-center">
                <thead style="background-color: #353935;">
                    <tr>
                        <th scope="col" class="text-white">NO</th>
                        <th scope="col" class="text-white">NISN</th>
                        <th scope="col" class="text-white">NIS</th>
                        <th scope="col" class="text-white">Nama</th>
                        <th scope="col" class="text-white">Kelas</th>
                        <th scope="col" class="text-white">Alamat</th>
                        <th scope="col" class="text-white">No Telpon</th>
                        <th scope="col" class="text-white">Nominal</th>
                        <th scope="col" class="text-white">Tahun</th>
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
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End Table -->
<script>
	window.print();
</script>
</body>

</html>