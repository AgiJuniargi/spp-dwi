<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Print | Petugas</title>
  <!-- Bootstrap -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
</head>

<body>
    <h3 class="text-center" style="color: #353935; margin-top:50px;">Table Petugas</h3>
    <!-- Table Petugas -->
    <div class="card col-md-12 mx-auto" style="margin-top:35px;">
        <div class="card-body">
            <table class="table text-center">
                <thead style="background-color: #353935;">
                    <tr>
                        <th scope="col" class="text-white">No</th>
                        <th scope="col" class="text-white">ID</th>
                        <th scope="col" class="text-white">Nama</th>
                        <th scope="col" class="text-white">Username</th>
                        <th scope="col" class="text-white">Password</th>
                        <th scope="col" class="text-white">Hak</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    include 'koneksi.php';
                    $no = 1;
                    $data = mysqli_query($koneksi, "select * from petugas");
                    while ($d = mysqli_fetch_array($data)) {
                    ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $d['id']; ?></td>
                            <td><?php echo $d['nama_petugas']; ?></td>
                            <td><?php echo $d['username']; ?></td>
                            <td><?php echo $d['password']; ?></td>
                            <td><?php echo $d['level']; ?></td>
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